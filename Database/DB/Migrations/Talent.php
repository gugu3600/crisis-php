<?php 

namespace Database\DB\Migrations;

include "../../../vendor/autoload.php";

use Database\DB\Migrations\Migration;

class Talent implements Migration
{
    protected $table;
    public function up(Blueprint $bp)
    {
        $this->table = Blueprint::Schema("talent");
        $this->table->id();
        $this->table->string("name")->notnull();
        $this->table->integer("count");
        $data = $this->table->getData();
        echo $this->table->create($data);
    }

    public function down(Blueprint $bp)
    {
        //
    }
}

$talent = new Talent();
 $talent->up(Blueprint::Schema("talent"));