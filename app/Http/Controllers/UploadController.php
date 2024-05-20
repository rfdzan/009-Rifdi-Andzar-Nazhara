<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(string $name)
    {
        $files = request()->file("file");
        foreach ($files as $file) {
            var_dump($file->extension());
        }
        return view('upload');
    }
}
