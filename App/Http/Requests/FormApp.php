<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class FormApp
{
    protected $request;
    protected $data;

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function request()
    {
        return new Request($this);
    }
}



// $request = Request::add($data);


// print_r($form);