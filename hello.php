<?php 


class Animal
{
    private $data;

    public function __construct($data = [1,4,5]) {
        $this->data = $data;
    }

    public function connect()
    {
        return $this->data;
    }
}

class Dog
{

    protected static $key;

    public function __construct($key = new Animal())
    {   
        // static::$key = $key;
        $this->key = $key->connect();
        print_r($this->key);
        echo "<br/><br/>";
        return $this->key;  
    }
}


class Car
{
    protected $iron;

    public function __construct()
    {
        $this->iron = new Dog();

        print_r( $this->iron);
        echo "<br/><br/>";
        return $this->iron;
    }
}


class Cat extends Car 
{
    public function index()
    {
        echo "Hello World";
    }
}


$cat = new Cat();

$cat->index();