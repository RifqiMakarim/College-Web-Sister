<?php

class Database
{
    // Untuk MySQL
    // private $host = "localhost";
    // private $db_name = "perkuliahan";
    // private $username = "root";
    // private $password = "";
    // public $conn;

    // Untuk PostgreSQL ( Supabase )
    private $host = "aws-1-ap-southeast-1.pooler.supabase.com"; //Host Supabase 
    private $db_name = "postgres";
    private $username = "postgres.dzcnfiqnhzofomumbyri";
    private $password = "Sister@12345"; //  password
    private $port = "5432";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            // Untuk MySQL
            // $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);

            // Untuk PostgreSQL
            $dsn = "pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name;
            $this->conn = new PDO($dsn, $this->username, $this->password);
    
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
