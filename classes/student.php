<?php
require_once "Person.php";

class Student extends Person {
    private $course;

    public function __construct($name, $age, $course) {
        parent::__construct($name, $age);
        $this->course = $course;
    }

    public function getCourse() {
        return $this->course;
    }

    public function intro() {
        return parent::intro() . " I am studying {$this->course}.";
    }
}
