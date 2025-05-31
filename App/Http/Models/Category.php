<?php 

namespace App\Http\Models;

include "../../vendor/autoload.php";

use Database\DB\MySQL;
use PDOException;

class Category extends Model
{
    //  private static $db = null;

    // public function __construct(MySQL $db)
    // {
    //     static::$db = $db->connect();
    // }

    public static function all()
    {
        // static::$db = new MySQL()->connect();

        try{
            $query = "SELECT * FROM categories";
            $stmt = static::$db->query($query);

            return $stmt->fetchAll();
        }

        catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public static function create($name)
    {
        try{
            $query = "INSERT INTO categories (name) VALUES (:name)";

            $stmt = static::$db->prepare($query);
            $stmt->execute([
                "name" => $name
            ]);
            
            return static::$db->lastInsertId();
        }

        catch (PDOException $e){
            return $e->getMessage();
        }
    }
}
