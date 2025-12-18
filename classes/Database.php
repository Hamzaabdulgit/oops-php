<?php

class Database {
    protected $conn;

    public function __construct() {
        $env = parse_ini_file(__DIR__ . "/../.env");

        $host = $env['DB_HOST'];
        $db   = $env['DB_NAME'];
        $user = $env['DB_USER'];
        $pass = $env['DB_PASS'];

        try {
            $this->conn = new PDO(
                "mysql:host=$host;dbname=$db",
                $user,
                $pass
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
