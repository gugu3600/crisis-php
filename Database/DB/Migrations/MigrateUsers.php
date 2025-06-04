<?php 

namespace Database\DB\Migrations;

include "../../../vendor/autoload.php";

use Database\DB\Migrations\Migration;

class MigrateUsers implements Migration
{

    protected $table;

    public function up(Blueprint $bp)
    {
        
    }

    public function down(Blueprint $bp)
    {
        $this->table = $bp::Schema("users");
        return $this->table->truncate();
    }
}

// $user = new MigrateUsers();

// $abc = $user->down(Blueprint::Schema("users"));

// echo $abc;
