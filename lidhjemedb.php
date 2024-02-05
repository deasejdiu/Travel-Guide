<?php

class DatabaseConnection {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "Travel-Guide";

    function startConnection() {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            return $conn;
        } catch(PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }
}

?>
