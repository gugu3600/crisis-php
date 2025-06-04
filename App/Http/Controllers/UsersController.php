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

    // public function __construct()
    // {
    //     parent::__construct();
    //     $data = [
    //         "name" => $request->name(),
    //         "email" => $request->email(),
    //         "password" => $request->password(),
    //         "role_id" => $request->role_id(),
    //         "region_id" => $request->region_id()
    //     ];
    // }
    public function index()
    {
        $users = Users::all();
        return $users;
    }

    public function store($data)
    {
        // $data = [
        //     "username" => $_POST['username'],
        //     "email" => $_POST['email'],
        //     "password" => md5($_POST['password']),
        //     "role_id" => $_POST['role_id'],
        //     "region_id" => $_POST['region_id'],
        // ];
        $request = UserValidators::class;
        
        // $data = [
        //     "username" => '44',
        //     "email" => 'abc@gmail.com',
        //     "password" => 'kglay',
        //     "role_id" => "5",
        //     "region_id" => 5,
        // ];

        $datas = $request::validate($data);

        if ($datas->successful() === true || $datas->successful() == 1) {
            //    print_r($datas);
            //  print_r($datas);
            return Users::create($data);
        }
        // echo "no";
    }

    public function auth($username,$password)
    {
        $user = Users::auth($username,$password);
        session_start();
        $_SESSION['user'] = $user;

        Route::redirect("/index.php","success");
    }

    
}
