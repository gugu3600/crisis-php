<?php 

namespace App\Http\Helpers;

class Route
{
    // public static $data = null;
    public static $route = "http://localhost:3005";

    public static function redirect($base,$query = '')
    {
        $url =  static::$route.$base;
        if ($query) $url .= $query;

        return header("location:$url");
        // exit();
    }

}

