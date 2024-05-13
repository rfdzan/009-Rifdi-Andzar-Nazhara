<?php

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
