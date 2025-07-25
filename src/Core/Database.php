<?php

namespace Deleon\Gs\Core;

class Database {
    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'oop';
        $user = 'root';
        $pass = '';
        //mysqli connection
        $this->conn = new \mysqli($host, $user, $pass, $db);
        if ($this->conn->connect_error) {
            die("Connection failed: ". $this->conn->connect_error);
            
        }
    }
}