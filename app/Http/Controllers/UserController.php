<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ImageController;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    function getPlaceHolderAuthors(): array
    {
        return array('bob' => '104827', 'jole' => '416160', 'luna' => '45201', 'rudy' => '57416', 'elena' => '96938');
    }
    function getUserPage(string $user): View
    {
        $image_db = new ImageController();
        $artworks = [];
        foreach ($image_db->getPath() as $id => $path) {
            if (strcmp($id, $this->getPlaceHolderAuthors()[$user]) === 0) {
                array_push($artworks, (object)['id' => $id, 'path' => $path]);
            }
        }
        return view('user', ['name' => $user, 'artworks' => $artworks]);
    }
}
