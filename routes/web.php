<?php

namespace webRoute;

use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImageController::class, "getPath"]);

function getPlaceHolderAuthors(): array
{
    return array('104827' => 'bob', '416160' => 'jole', '45201' => 'luna', '57416' => 'rudy', '96938' => 'elena');
}

Route::get('/registration', function () {
    return view('registration');
});
Route::get('/artwork', function () {
    $controller = new ImageController();
    $id = request()->get('id');
    if ($id !== null) {
        $links = $controller->getArtwork($id);
        if ($links->success === true) {
            return $links->view;
        }
    }
    return redirect()->route('err_page')->with(['msg' => "artwork of id '{$id}' was not found"]);
});
Route::get('/error', function () {
    $msg = session()->get('msg');
    return view('err', ['msg' => $msg]);
})->name('err_page');
Route::get('/{user}', [UserController::class, "getUser"]);
