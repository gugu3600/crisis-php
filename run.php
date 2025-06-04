<?php

// namespace Database\DB\Migrations;

// use Database\DB\MySQL;

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

    public function remove()
    {

    }

    public function string($name)
    {
        $this->query .= "$name VARCHAR(255),";
        return $this;
    }

    public function notnull()
    {
        $this->query .= "NOT NULL,";
        return $this;
    }

    public function text($name)
    {
        $this->query .= "$name TEXT,";
        return $this;
    }

    public function nullable()
    {
        $this->query .= "NULL,";
        return $this;
    }

    public function foreignKey($name)
    {
        $this->query .= "FOREIGN KEY ($name),";
        return $this;
    }

    public function references($name, $id)
    {
        $this->query .= "REFERENCES $name($id),";
        return $this;
    }

    public function getData()
    {
        if (strpos($this->query, "VARCHAR")) {

            str_replace("INT", "", $this->query);
        }

        if (strpos($this->query, "INT")) {

            str_replace("VARCHAR(255)", "", $this->query);
        }

        return $this->query;
    }

    public function create($data)
    {
        return "CREATE TABLE $this->table ($data)";
    }

    public function removeQuery()
    {
       $this->query = " ";
       return $this;
    }

    public static function Schema($table)
    {
        // static::$table = $table;
        //  new Blueprint($table);
        if(static::$singleton === null){
            static::$singleton = new Blueprint($table);
        }

        return static::$singleton;
    }
}




// echo $asd;

class ABC extends Blueprint
{

    protected $query;

    public function __construct($table)
    {
        $this->table = $table;
    }

    public function remove()
    {
        $this->query = " ";
        return $this;
    }

    public function clear()
    {
        $this->query .= "i clear this";
        return $this;

    }

    public function sweep()
    {
        $this->query .= "i sweep this";
        return $this;
    }
}


$ac = new ABC(44);

echo $ac->id()->clear()->getData();

