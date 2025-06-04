<?php


namespace App\Http\Models;

include "../../vendor/autoload.php";

use Database\DB\MySQL;
use PDOException;

class Users extends Model
{
    // private static $db = null;

    // public function __construct(MySQL $db)
    // {
    //     static::$db = $db->connect();
    // }

    public static function all()
    {
        try {
            $query = "SELECT * FROM users";

            $stmt = static::$db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {

            return $e->getMessage();
        }
    }

    public static function create($data)
    {
        try {

            $query = "INSERT INTO users (username,email,password,role_id,region_id,created_at,updated_at) VALUES (:username,:email,:password,:role_id,:region_id,NOW(),NOW()) ";

            $stmt = static::$db->prepare($query);
            $stmt->execute($data);

            return static::$db->lastInsertId();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function find($id)
    {
        try {
            $query = "SELECT * FROM users WHERE id = :id";

            $stmt = static::$db->prepare($query);
            $stmt->execute(["id" => $id]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function auth($username, $password)
    {
        try {
            $query = "SELECT * FROM users WHERE username = :username And password = :password";

            $stmt = static::$db->prepare($query);
            $stmt->execute([
                "username" => $username,
                "password" => $password
            ]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function update($data)
    {
        try {

            $query = "UPDATE users SET username = :username, email = :email, region_id = :region_id, report_count = :report_count ,updated_at = NOW() WHERE id = :id";
            $stmt = static::$db->prepare($query);
            $stmt->execute($data);

            return $stmt->rowCount();
        } catch (PDOException $e) {

            return $e->getMessage();
        }
    }

    
}
