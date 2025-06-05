<?php

namespace Database\DB\Migrations;

use Database\DB\Migrations\Blueprint;

class MigrateMessages implements Migration
{

    protected $table;

    public function up(Blueprint $bp)
    {
        // $bp = Blueprint::Schema("messages");
        $this->table = $bp::Schema("messages");
        $this->table->id();
        $this->table->text("messages");
        $this->table->integer("user_id");
        $this->table->timestamps();
        $this->table->foreignKey("user_id")->references("users");
        $data = $this->table->getData();
        return $this->table->create($data);
    }

    public function down(Blueprint $bp)
    {
        $this->table = $bp::Schema("messages");

    }
}
