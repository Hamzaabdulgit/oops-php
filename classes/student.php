<?php

require_once "Person.php";

class Student extends Person {
    public $course;

    public function __construct($name, $age, $course) {
        parent::__construct($name, $age);
        $this->course = $course;
    }

    public function intro() {
        return parent::intro() . " I am studying {$this->course}.";
    }
}
