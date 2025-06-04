<?php

namespace Database\DB\Migrations;

use Database\DB\MySQL;

class Blueprint
{
    protected $table;
    protected $query;
    protected static $db;
    protected static $singleton = null;

    public function __construct($table)
    {
        // static::$db = $db->connect();
        $this->table = $table;
    }

    public function id()
    {;
        $this->query .=  "id INT AUTO_INCREMENT PRIMARY KEY,";
       return $this;
    }

    public function integer($name) 
    {

         $this->query .= "$name INT,";
         return $this;
        
    }

    public function string($name)
    {
         $this->query .= "$name VARCHAR(255),";
         return $this;
        
    }

     public function text($name)
    {
         $this->query .= "$name TEXT,";
         return $this;
        
    }

    public function unique()
    {
        $this->query .= " UNIQUE ,";
        return $this;
    }

    public function notnull()
    {
         $this->query .= "NOT NULL,";
         return $this;
        
    }

   

    public function nullable()
    {
         $this->query .= "NULL,";
         return $this;
        
    }

        public function foreignKey($name)
    {
         $this->query .= "FOREIGN KEY ($name) ";
         return $this;
        
    }

    public function references($name)
    {
         $this->query .= "REFERENCES $name(id),";
         return $this;        
    }



    public function timestamps()
    {
         $this->query .= "created_at TIMESTAMP,updated_at TIMESTAMP";
         return $this;        
    }


    public function getData()
    {
         if(strpos($this->query,"VARCHAR")){

            str_replace("INT","",$this->query);
        }

        if(strpos($this->query,"INT")){

            str_replace("VARCHAR(255)","",$this->query);
        }

        return $this->query;
    }

    public function create($data)
    {
        return "CREATE TABLE $this->table ($data);";
    }

    public function drop()
    {
       return $this->query = "DROP TABLE $this->table;";
    }

    public function truncate()
    {
        return $this->query = "TRUNCATE TABLE $this->table;";
    }

     public function alter($data)
    {
        return $this->query .= "ALTER TABLE $this->table $data;";
    }

    public function add()
    {
        $this->query .= " ADD ";
        return $this;
    }

    public function first()
    {
        $this->query .= " FIRST ";
        return $this;
    }

    public function after($name)
    {
        $this->query .= " AFTER $name";
        return $this; 
    }


    public function removeQuery()
    {
        $this->query = "";
        return $this;
    }

    public static function Schema($table)
    {
        // static::$table = $table;
        if(static::$singleton === null)
        {
            static::$singleton = new Blueprint($table); 
        }


        return static::$singleton ;

    }

}
