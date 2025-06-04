<?php

namespace App\Http\Controllers;

use App\Http\Models\Model;
// use App\Http\Requests\Request;

class Controller
{

    protected $script;

    public function __construct()
    {
        // new Request();
        return new Model();
    }

}