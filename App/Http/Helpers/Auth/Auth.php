<?php 

namespace App\Http\Helpers\Auth;

class Auth
{
    static $user;

    public static function check()
    {
        session_start();

        if($_SESSION['user']){

            return $_SESSION['user'];
        }
    }

}