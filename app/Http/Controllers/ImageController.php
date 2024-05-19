<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\UserController;

class ImageController extends Controller
{
    private function getPlaceHolderIMage(): array
    {
        $dir = 'kanvas_placeholder_images/';
        $file = scandir($dir);
        $images = array_slice($file, 2);
        $asLink = [];
        foreach ($images as $image) {
            $pathinfo = pathinfo($image);
            if ($pathinfo['extension'] === "json") {
                continue;
            }
            $link = $dir . $image;
            array_push($asLink, $link);
        }
        return $asLink;
    }
    function getPath(): array
    {
        $toSend = [];
        foreach ($this->getPlaceHolderIMage() as $path) {
            $info = pathinfo($path);
            $id = $info['filename'];
            $toSend[$id] = $path;
        }
        return $toSend;
    }
    /**
     * This needs to move out from this class.
     */
    function temp_homepage(): View
    {
        return view('homepage', ["images" => $this->getPath()]);
    }
    function getArtwork(string $id): object
    {
        $authors = new UserController();
        $success = false;
        foreach ($this->getPath() as $image_id => $path) {
            if (strcmp($id, $image_id) == 0) {
                $success = true;
                $fake_db = $authors->getPlaceHolderAuthors();
                foreach ($fake_db as $author => $artwork_array) {
                    return (object) array("view" => view('artwork', ["artwork_name" => $image_id, "path" => $path, "author" => $author]), "success" => $success);
                }
            }
        }
        return (object) array("view" => null, "success" => $success);
    }
}
