<?php
require_once "classes/Student.php";
require_once "classes/Circle.php";
require_once "classes/MathHelper.php";

$student = new Student("Hamza", 23, "OOPS in PHP");
echo $student->intro();

echo "<br><br>";

echo $student->log("Student object created");

echo "<br><br>";

$circle = new Circle(5);
echo "Circle Area: " . $circle->area();

echo "<br><br>";

echo "Addition: " . MathHelper::add(10, 20);
echo "<br>";
echo "Square of 5: " . MathHelper::square(5);
