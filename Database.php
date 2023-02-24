<?php

// Database class to connect and execute queries
class Database
{
    public $connection;

    public function __construct()
    {
        // environment variables
        $host = "127.0.0.1";
        $port = "3306";
        $username = "root";
        $pw = "password";
        $db = "myapp";
        $dsn = "mysql:host=$host;port=$port;dbname=$db;user=$username;password=$pw;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}