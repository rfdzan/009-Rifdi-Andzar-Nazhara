<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    function getUser(string $user)
    {
        return view('user', ['name' => $user]);
    }
}
