<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class HomepageController extends Controller
{
    function homepage(): View
    {
        $toSend = [];
        $array_of_images = DB::select("SELECT id, user_id, source FROM illustration ORDER BY timestamp DESC");
        if (count($array_of_images) === 0) {
            return view('err', ['msg' => "no image found to be displayed in homepage"]);
        }
        foreach ($array_of_images as $images) {
            $path = $images->source;
            $id = $images->id;
            $toSend[$id] = $path;
        }
        return view('homepage', ["images" => $toSend]);
    }
}
