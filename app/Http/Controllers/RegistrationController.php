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
        $validate = request()->validate([
            USERNAME => "required",
            PASSWORD => "required"
        ]);
        $username = request()->input(USERNAME);
        $password = kanvasHasher(request()->input(PASSWORD));
        $selectPassword = DB::selectOne("SELECT password FROM user WHERE username=:username", ["username" => $username]);
        if ($selectPassword === null) {
            return redirect()->route('login')->with(['userExistmsg' => "Username doesn't exist."]);
        }
        if (strcmp($password, $selectPassword->password) !== 0) {
            return redirect()->route('login')->with(['userExistmsg' => "Wrong password."]);
        }
        // var_dump($selectPassword);
        return redirect()->route('user', ["user" => $username]);
    }
    function register()
    {
        $validate = request()->validate([
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
        // insert user,email,pass to db.
        $insertIntoDb = DB::insert("INSERT INTO user (username, email, password) values (
            :username,
            :email,
            :password
        )", ["username" => $username, "email" => $email, "password" => $password]);
        // mark as logged in.
        // - store marker + username to cookies via session.
        // redirect to home route
        return redirect()->route('home');
    }
}
