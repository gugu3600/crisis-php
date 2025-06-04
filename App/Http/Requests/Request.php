<?php 

namespace App\Http\Requests;

// include "FormApp.php";

// use App\Http\Requests\FormApp;


class Request
{
    protected static $data = [];
    protected $formApp;
    protected static $request = null;
    protected $keys = [];
    public static $items = [];

    public function __construct()
    {

        if($this->data){
        $this->keys = array_keys($this->data);
        }

        print_r($this->data);
    }

     public function __call($name, $arguments)
    {
        $arguments = "column $name has not found";

        if(in_array($name,$this->keys)){
            return $this->data[$name];
        }

        print_r($this->data);
    } 

    public static function callback($data)
    {
        self::$data = $data;

        if(static::$request === null)
        {
            static::$request = new Request();
        }

        return static::$request;
    }

}


// $data = [1,2,3,4];
// $form = new FormApp();
// $form->create($data);
// $request = new Request();