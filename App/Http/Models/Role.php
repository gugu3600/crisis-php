<?php 

namespace App\Http\Models;

include "../../../vendor/autoload.php";

use Database\DB\MySQL;
use PDOException;

class Role extends Model
{
        // private $db;

        // public function __construct(MySQL $db)
        // {
        //     $this->db = $db->connect();
        // }

        // public static function all()
        // {
        //     try{
        //         $query = "SELECT * FROM roles ";
        //     }

        //     catch(PDOException $e){
        //         return $e->getMessage();
        //     }
        // }

        public static function all()
        {
            
        }
    
}