<?php 

namespace Database\DB;
 use PDO;

class MySQL
{
    private $db;
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpass;

    public function __construct($dbhost = 'localhost', $dbname = "crisis_php", $dbuser = "root", $dbpass = "jukonjukon1")
    {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->db = null;
    }

    public function connect(){
        $this->db = new PDO("mysql: host=$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
        
        return $this->db;
    }


}

// user features -> name , email, appointment_date , 

// "Models\\": "Database/Models/",