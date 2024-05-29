<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

define("USERNAME", "username");
define("EMAIL", "email");
define("PASSWORD", "password");

class RegistrationController extends Controller
{
    function login()
    {
    }
    function register()
    {
        $loginData = request()->validate([
            USERNAME => "required",
            EMAIL => ["required", "email"],
            PASSWORD => "required"
        ]);
        $username = request()->input(USERNAME);
        $email = request()->input(EMAIL);
        $password = kanvasHasher(request()->input(PASSWORD));

        $existingUser = DB::selectOne("SELECT username FROM user WHERE username=:username", ["username" => $username]);

        if ($existingUser !== null) {
            return redirect()->route('registration')->with(['userExistmsg' => "Username '{$username}' already exists."]);
        }
        return redirect()->route('home');
        // insert user,email,pass to db.
        // mark as logged in.
        // - store marker + username to cookies via session.
        // redirect to home route
    }
}
