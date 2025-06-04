<?php


namespace Database\DB\Migrations;

include "../../../vendor/autoload.php";

use Database\DB\Migrations\MigrateMessages;
use Database\DB\MySQL;

class Make
{

    protected static $db;
    protected $migration;

    public function __construct(MySQL $db)
    {
        static::$db = $db->connect();
    }


    public function call(Migration $migration)
    {
        $this->migration = $migration;
       return $this->migration->up(Blueprint::Schema("users_categories"));
    }

    public function fresh(Migration $migration)
    {
        $this->migration = $migration;
        return $this->migration->down(Blueprint::Schema("users"));
    }


    public static function Migrate($query)
    {
        // new Make();
        $stmt = static::$db->prepare($query);
        $stmt->execute();
        return static::$db->lastInsertId();
    }

}

$make = new Make(new MySQL());

// Make::Migrate()

// $query = ($make->fresh(new MigrateUsers()));
$query = ($make->call(new MigrateUsersCategories()));

echo $query;

Make::Migrate($query);
