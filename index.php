<?php
require_once "classes/StudentModel.php";

$studentModel = new StudentModel();

// Insert test data
$studentModel->insert("Hamza", 23, "OOPS in PHP");

// Fetch data
$students = $studentModel->getAll();

echo "<h3>Students List</h3>";

foreach ($students as $student) {
    echo $student['name'] . " - " . $student['course'] . "<br>";
}
