<?php
require_once "Database.php";

class StudentModel extends Database {

    public function insert($name, $age, $course) {
        $sql = "INSERT INTO students (name, age, course) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$name, $age, $course]);
    }

    public function getAll() {
        $sql = "SELECT * FROM students";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
