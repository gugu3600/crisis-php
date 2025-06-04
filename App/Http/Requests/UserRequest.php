<?php

include_once("../../../vendor/autoload.php");

use App\Http\Controllers\UsersController;
use App\Http\Requests\FormApp;
use App\Http\Helpers\Route;
use App\Http\Requests\Request;
use App\Http\Controllers\UserController;

// print_r($_SERVER['REQUEST_METHOD']);

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    // $data = [];
    $username = $_POST['username'];
    $email = $_POST["email"];
    $password = md5($_POST['password']);
    $confirmPW = md5($_POST['confirm-password']);
    $region_id = $_POST['region_id'];
    $role_id = $_POST["role_id"];

    if ($password === $confirmPW) {
        $data = ["username" => $username, "email" => $email, "password" => $password, "region_id" => $region_id, "role_id" => $role_id];

        if (isset($data)) {
       
        $user = new UsersController();
        $user->store($data);
        // print_r($request)
        Route::redirect("/index.php");
        
    }

    } else {
        Route::redirect("/index.php", "?error=1");
    }
} else {
    Route::redirect("/index.php","?error");
}
