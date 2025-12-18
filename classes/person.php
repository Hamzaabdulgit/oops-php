<?php

class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
    }

    // Setter for name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Setter for age
    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    // Getter for age
    public function getAge() {
        return $this->age;
    }

    public function intro() {
        return "My name is {$this->name} and I am {$this->age} years old.";
    }
}
