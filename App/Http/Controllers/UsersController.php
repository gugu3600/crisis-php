<?php

namespace App\Http\Controllers;

include_once "../../../vendor/autoload.php";

use Database\DB\MySQL;
use App\Http\Models\Users;
use App\Validate\Validators\UserValidators;


class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
    }

    public function store()
    {
        // $data = [
        //     "username" => $_POST['username'],
        //     "email" => $_POST['email'],
        //     "password" => md5($_POST['password']),
        //     "role_id" => $_POST['role_id'],
        //     "region_id" => $_POST['region_id'],
        // ];
        $request = UserValidators::class;

        $data = [
            "username" => '44',
            "email" => 'abc@gmail.com',
            "password" => 'kglay',
            "role_id" => "5",
            "region_id" => 5,
        ];

        $datas = $request::validate($data);

        if ($datas->successful() === true || $datas->successful() == 1) {
            //    print_r($datas);
            return print_r($datas);
        }

        echo "no";
    }
}
