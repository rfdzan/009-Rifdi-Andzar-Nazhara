<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
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
