<?php
require_once "Person.php";
require_once "LoggerTrait.php";

class Student extends Person {
    use LoggerTrait;

    private $course;

    public function __construct($name, $age, $course) {
        parent::__construct($name, $age);
        $this->course = $course;
    }

    public function intro() {
        return parent::intro() . " I am studying {$this->course}.";
    }
}
