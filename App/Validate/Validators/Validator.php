<?php

namespace App\Validate\Validators;

use App\Http\Controllers\UserController;
use App\Http\Helpers\Route;

class Validator
{
    private $data = null;
    protected $success = false;

    public function __construct($data,$success = false)

    {
        $this->data = $data;
        $this->success = $success;
    }

    public function required($field)
    {
        if($this->data[$field] == null or trim($this->data[$field]) == ''){
            $this->success = false;
            return $this;
        }
        else{
            $this->success = true;
            return $this;
        }
    }

    public function integer($field)
    {
        if(is_numeric($this->data[$field])){
            $this->success = true;
            return $this;
        }
        else{
            $this->success = false;
            return $this;
        }
    }

    // public function

    public function successful()
    {
        return $this->success;
    }
}
