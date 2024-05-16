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
function getPlaceHolderAuthors(): array
{
    return array('104827' => 'bob', '416160' => 'jole', '45201' => 'luna', '57416' => 'rudy', '96938' => 'elena');
}
Route::get('/', function () {
    $toSend = [];
    foreach (getPlaceHolderImg() as $path) {
        $info = pathinfo($path);
        $name = $info['filename'];
        $toSend[$name] = $path;
    }
    return view('homepage', ["images" => $toSend]);
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/artwork', function () {
    $links = getPlaceHolderImg();

    $id = request()->get('id');
    foreach ($links as $path) {
        $info = pathinfo($path);
        $name = $info['filename'];
        if (strcmp($id, $name) == 0) {
            return view('artwork', ["artwork_name" => $name, "author" => getPlaceHolderAuthors()[$name], "path" => $path]);
        }
    }
    return redirect()->route('err_page')->with(['msg' => "artwork of id '{$id}' was not found"]);
});
Route::get('/error', function () {
    $msg = session()->get('msg');
    return view('err', ['msg' => $msg]);
})->name('err_page');
Route::get('/{user}', function (string $user) {
    return view('user', ['name' => $user]);
});
