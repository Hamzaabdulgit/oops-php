<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age  = $age;
    }

    public function intro() {
        return "My name is {$this->name} and I am {$this->age} years old.";
    }
}
