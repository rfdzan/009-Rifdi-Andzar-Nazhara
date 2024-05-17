<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ImageController extends Controller
{
    private function getPlaceHolderIMage(): array
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
    private function getPlaceHolderAuthors(): array
    {
        return array('104827' => 'bob', '416160' => 'jole', '45201' => 'luna', '57416' => 'rudy', '96938' => 'elena');
    }

    function getPath(): View
    {
        $toSend = [];
        foreach ($this->getPlaceHolderIMage() as $path) {
            $info = pathinfo($path);
            $name = $info['filename'];
            $toSend[$name] = $path;
        }
        return view('homepage', ["images" => $toSend]);
    }
    function getArtwork(string $id): object
    {
        $success = false;
        foreach ($this->getPlaceHolderIMage() as $path) {
            $info = pathinfo($path);
            $name = $info['filename'];
            if (strcmp($id, $name) == 0) {
                $success = true;
                return (object) array("view" => view('artwork', ["artwork_name" => $name, "path" => $path, "author" => $this->getPlaceHolderAuthors()[$name]]), "success" => $success);
            }
        }
        return (object) array("view" => null, "success" => $success);
    }
}
