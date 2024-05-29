<?php

namespace webRoute;

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, "homepage"])->name("home");
Route::get('/registration', function () {
    $msg = "";
    $userExists = session()->get("userExistmsg");
    if (strlen($userExists) !== 0) {
        $msg = $userExists;
    }
    return view('registration', ["userExist" => $msg]);
})->name('registration');
Route::post('/register', [RegistrationController::class, "register"])->name("register");
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
Route::post(
    '/{user}/upload',
    [UploadController::class, "upload"]
)->name("artwork_upload");
Route::get('/{user}', [UserController::class, "getUserPage"])->name("user");
