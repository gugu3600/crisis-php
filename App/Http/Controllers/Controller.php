<?php

namespace App\Http\Controllers;

use App\Http\Models\Model;

class Controller
{

    protected $script;

    public function __construct()
    {
        return new Model();
    }
}