<?php

namespace webRoute;

use Illuminate\Support\Facades\Route;

function getPlaceHolderImg(): array
{
    $dir = 'kanvas_placeholder_images/';
    $file = scandir($dir);
    $images = array_slice($file, 2);
    $asLink = [];
    foreach ($images as $image) {
        $link = $dir . $image;
        array_push($asLink, $link);
    }
    return $asLink;
}
Route::get('/', function () {
    return view('homepage', ["images" => getPlaceHolderImg()]);
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/{user}', function (string $user) {
    return view('user', ['name' => $user]);
});
Route::get('/artwork/', function () {
    return view('artwork_homepage');
});
Route::get('/artwork/{id}', function (string $id) {
    $links = getPlaceHolderImg();
    foreach ($links as $path) {
        $info = pathinfo($path);
        $name = $info['filename'];
        if (strcmp($id, $name) == 0) {
            return view('artwork', ["artwork_name" => $name, "path" => $path]);
        }
    }
    return redirect()->route('err_page')->with(['msg' => "artwork of id '{$id}' was not found"]);
});
Route::get('/error/err', function () {
    $msg = session()->get('msg');
    return view('err', ['msg' => $msg]);
})->name('err_page');
