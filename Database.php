<?php

class Database {
    private static ?PDO $instance = null;

    private function __construct() {}

    public static function getInstance(): PDO {
        if (self::$instance === null) {
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'ecommerce';
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

            self::$instance = new PDO($dsn, $username, $password);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}

?>
