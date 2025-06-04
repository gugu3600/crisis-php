<?php

class Animal
{
    protected $data;

    public function create($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Cat extends Animal
{
    private $dog;
    public function __construct()
    {
        $this->dog = $this->data;
    }

    public function output()
    {
         return $this->dog;
    }
}

$data = ["name" => "abc","age" => 20];

$abc = new Animal();

$animal = $abc->create($data);

print_r( $abc->getData());

$bcd = new Cat();

print_r($bcd->output());