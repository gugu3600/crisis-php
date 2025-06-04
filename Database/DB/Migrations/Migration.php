<?php 

namespace Database\DB\Migrations;


interface Migration
{
    public function up(Blueprint $bp);
    public function down(Blueprint $bp);

}