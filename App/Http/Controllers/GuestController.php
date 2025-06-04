<?php 

namespace App\Http\Controllers;

use App\Http\Helpers\Route;
use App\Http\Models\Users;

class GuestController extends Controller
{

    public function store($data)
    {
        
        // print_r($data);
        Users::create($data);
        $guest = Users::find(["id" => $data['id']]);
        session_start();
        $_SESSION['user'] = $guest;
        Route::redirect("/index.php");
    }
}