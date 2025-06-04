<?php

include "../../../vendor/autoload.php";
use App\Http\Controllers\GuestController;

$time = time();

$name = "Guest".$time;
$email = $name."@gmail.com";
$password = md5("password"); 
$region_id = $_POST["region_id"];
$role_id = 3;

$data = [
    "name" => $name,
    "email" => $email,
    "password" => $password,
    "region_id" => $region_id,
    "role_id" => $role_id
];


$guest = new GuestController();

$guest->store($data);