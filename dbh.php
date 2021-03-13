<?php

$servername = "localhost";
$username = "root";
$password = "011298";
$database = "case_study";

class Dbh {
    private static $connection = null;
    
    public static function getInstance() {
        if(!isset(self::$connection)) {
            try {
                self::$connection = new PDO("mysql:host=localhost;dbname=case_study","root", "011298");
                // set the PDO error mode to exception
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully";
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }
        return self::$connection;
    }
}
?>