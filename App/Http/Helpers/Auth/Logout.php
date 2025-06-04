<?php
include "../../../../vendor/autoload.php";
use App\Http\Helpers\Route;

session_start();
session_unset();
Route::redirect("/index.php");