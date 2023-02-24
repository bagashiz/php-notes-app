<?php

require "helpers.php";
// require "router.php";
require "Database.php";

$config = require("config.php");
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = ?";

$result = $db->query($query, [$id])->fetch();

dd($result);
