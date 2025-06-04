<?php

namespace App\Http\Controllers;

include_once "../../../vendor/autoload.php";

// use Database\DB\MySQL;

use App\Http\Helpers\Route;
use App\Http\Models\Users;
use App\Http\Requests\Request;
use App\Validate\Validators\UserValidators;


class UsersController extends Controller
{

    public function index()
    {
        $users = Users::all();
        return $users;
    }

    public function store($data)
    {
        $request = UserValidators::class;
        
      
        $datas = $request::validate($data);

        if ($datas->successful() === true || $datas->successful() == 1) {
            //    print_r($datas);
            //  print_r($datas);
            return Users::create($data);
        }
        // echo "no";
    }

    public function edit($id)
    {
        $user = Users::find($id);
        return $user;
    }

    public function update($data)
    {
        Users::update($data);
        return Route::redirect("index.php");
    }

    public function auth($username,$password)
    {
        $user = Users::auth($username,$password);
        session_start();
        $_SESSION['user'] = $user;

        Route::redirect("/index.php");
    }


    
}
