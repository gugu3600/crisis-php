<?php

namespace Database\DB\Migrations;

include "../../../vendor/autoload.php";

use Database\DB\Migrations\Migration;

class MigrateUsersCategories implements Migration
{

    protected $table;

    public function up(Blueprint $bp)
    {
        $this->table = $bp::Schema("users_categories");
        $this->table->id();
        $this->table->integer("user_id")->foreignKey("user_id")->references("users");
        $this->table->integer("category_id")->foreignKey("category_id")->references("categories");
        $this->table->timestamps();
        $data = $this->table->getData();
        return $this->table->create($data);
    }

    public function down(Blueprint $bp) {
        //
    }
}


// $uc = new MigrateUsersCategories();

// $up = $uc->up(Blueprint::Schema("users_categories"));

// echo $up;