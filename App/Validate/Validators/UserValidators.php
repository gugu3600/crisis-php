<?php

namespace App\Validate\Validators;

use App\Http\Helpers\Route;

class UserValidators extends Validator
{
    private static $validator = null;
    private $parent;

    public function __construct(Validator $parent)
    {
        
        $this->parent = $parent;

        if($this->parent->required("username")->integer('role_id')->required("password")->successful()){
            $this->success = true;
        }
        else{
            $this->success = false;
        }
        //  echo $this->parent->required("username")->successful();

        // ---
        // var_dump($this->parent->data);
        // Route::redirect("/App/Http/Controllers/UserController.php");
    }

    public static function validate($data)
    {
        
        if(static::$validator == null){
            static::$validator = new UserValidators(new Validator($data));
        }
        return static::$validator;
    }
}



