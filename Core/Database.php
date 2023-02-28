<?php

namespace Core;

use PDO;

// Database class to connect and execute queries
class Database
{
    public $connection;
    public $statement;

    // constructor for creating a new database connection
    public function __construct($config, $user = 'root', $password = 'password')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    
    // query executes a query on the database
    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    // find fetches all records from the database based on the query
    public function find()
    {
        return $this->statement->fetch();
    }

    // findAll fetches all records from the database based on the query
    public function findAll()
    {
        return $this->statement->fetchAll();
    }

    // findOrFail fetches all records from the database based on the query,
    // if no records are found, it aborts the script with a 404 status code
    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}