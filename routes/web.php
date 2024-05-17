<?php

namespace webRoute;

use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImageController::class, "getPath"]);
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
Route::post('/{user}/upload', function (string $user) {
    return view('upload');
});
Route::get('/{user}', [UserController::class, "getUserPage"])->name("user");
