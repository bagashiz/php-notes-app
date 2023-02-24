<?php

require "helpers.php";
// require "router.php";

// environment variables
$host = "127.0.0.1";
$port = "3306";
$username = "root";
$pw = "password";
$db = "myapp";

// connect to MySQL database
$dsn = "mysql:host=$host;port=$port;dbname=$db;user=$username;password=$pw;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', 'password');

// set a query to fetch all users
$statement = $pdo->prepare("SELECT * FROM users");
// execute the query
$statement->execute();
// store the result in a variable
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($users);
