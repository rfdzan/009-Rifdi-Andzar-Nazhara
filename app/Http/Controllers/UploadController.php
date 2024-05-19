<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(string $name)
    {
        $files = request()->file("file");
        var_dump($files);
        var_dump($name);
        return view('upload');
    }
}
