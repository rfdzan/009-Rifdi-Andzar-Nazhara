<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ImageController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use stdClass;

class UserController extends Controller
{
    function getPlaceHolderAuthors(): stdClass
    {
        $fake_db_path = "./kanvas_placeholder_images/fake_db.json";
        $file = file_get_contents($fake_db_path);
        return json_decode($file);
    }
    function getUserPage(string $username): View
    {
        $select_user = DB::select("SELECT id FROM user WHERE username = :username", ["username" => $username]);
        $user_id = array_pop($select_user)->id;
        $select_illustration = DB::select("SELECT * FROM illustration WHERE user_id = :user_id", ["user_id" => $user_id]);
        $artworks = [];
        foreach ($select_illustration as $image) {
            $image_id = $image->id;
            $title = $image->title;
            $path = $image->source;
            array_push($artworks, (object) array("title" => $title, "path" => $path, "id" => $image_id));
        }
        return view("user", ["name" => $username, "artworks" => $artworks]);
    }
}
