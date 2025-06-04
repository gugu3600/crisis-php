<?php

include "../../../../vendor/autoload.php";
use App\Http\Controllers\UsersController;

$username = $_POST["username"];
$password = md5($_POST["password"]);


$user =new UsersController();

$user->auth($username,$password);