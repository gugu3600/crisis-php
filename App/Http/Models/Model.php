<?php 

namespace App\Http\Models;

include_once "../../../vendor/autoload.php";

use Database\DB\MySQL;

class Model 
{
    protected static $db;

    public function __construct($db = new MySQL())
    {
        static::$db = $db->connect();
        return static::$db;
        // echo static::$db;
    }

    // public function belongsTo()
    // {

    // }
}