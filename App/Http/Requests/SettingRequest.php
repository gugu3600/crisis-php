<?php

include_once "../../../vendor/autoload.php";
use App\Http\Models\Users;
use App\Http\Controllers\UsersController;
use App\Http\Helpers\Route;

$user = new UsersController();

$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$region = $_POST["region_id"];
$report_count = $_POST["report_count"];

$data = ["id"=> $id,"username" => $username, "email" => $email, "region_id" => $region,"report_count" => $report_count];

$user->update($data);
Route::redirect("/index.php","?updated");