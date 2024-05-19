<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ImageController;
use Illuminate\Contracts\View\View;
use stdClass;

class UserController extends Controller
{
    function getPlaceHolderAuthors(): stdClass
    {
        $fake_db_path = "./kanvas_placeholder_images/fake_db.json";
        $file = file_get_contents($fake_db_path);
        return json_decode($file);
    }
    function getUserPage(string $user): View
    {
        $image_db = new ImageController();
        $fake_author_db = $this->getPlaceHolderAuthors();
        $works = $fake_author_db->$user;
        $artworks = [];
        foreach ($image_db->getPath() as $id => $path) {
            foreach ($works as $artwork) {
                if (strcmp($artwork, $id) === 0) {
                    array_push($artworks, (object)['id' => $id, 'path' => $path]);
                }
            }
        }
        return view('user', ['name' => $user, 'artworks' => $artworks]);
    }
}
