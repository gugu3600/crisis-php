<?php 

namespace App\Http\Models;

include "../../../vendor/autoload.php";

use Database\DB\MySQL;
use PDOException;

class Regions extends Model
{
        // private static $db;

        // public function __construct(MySQL $db)
        // {
        //     $this->db = $db->connect();
        // }

        public static function all()
        {
            try{
                $query = "SELECT * FROM regions";
                $stmt = static::$db->query($query);
                return $stmt->fetchAll();
            }

            catch(PDOException $e){
                return $e->getMessage();
            }
        }   
}