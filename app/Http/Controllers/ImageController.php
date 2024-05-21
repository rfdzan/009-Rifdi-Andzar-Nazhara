<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

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
    function getImages()
    {
        // $toSend = [];
        $toSend2 = [];
        $array_of_images = DB::select("SELECT id, user_id, source FROM illustration ORDER BY timestamp DESC");
        if (count($array_of_images) === 0) {
            return view('err', ['msg' => "no image found to be displayed in homepage"]);
        }
        foreach ($array_of_images as $images) {
            $path = $images->source;
            $id = $images->id;
            $toSend2[$id] = $path;
        }
        //---------------------
        // foreach ($this->getPlaceHolderIMage() as $path) {
        //     $info = pathinfo($path);
        //     $id = $info['filename'];
        //     $toSend[$id] = $path;
        // }
        return $toSend2;
    }
    /**
     * This needs to move out from this class.
     */
    function temp_homepage(): View
    {
        return view('homepage', ["images" => $this->getImages()]);
    }
    function getArtwork(string $id): object
    {
        $id_as_int = (int) $id;
        $select_artwork = DB::selectOne("SELECT id, user_id, title, source FROM illustration WHERE id = :id", ["id" => $id_as_int]);
        $select_author = DB::selectOne("SELECT username FROM user WHERE id = :user_id", ["user_id" => $select_artwork->user_id]);
        $success = true;
        $title = $select_artwork->title;
        $path = $select_artwork->source;
        $author = $select_author->username;
        return (object) array("view" => view('artwork', ["artwork_name" => $title, "path" => $path, "author" => $author]), "success" => $success);
    }
}
