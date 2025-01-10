<?php

namespace App\Database;

use PDO;
use PDOException;

class Database {
    private $servername= "localhost" ;
    private $username = "root";
    private $password;
    private $dbname = "gestion_biblio";
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
