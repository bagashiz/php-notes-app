<?php

require "helpers.php";
// require "router.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config['database']);
$result = $db->query("SELECT * FROM users")->fetch(PDO::FETCH_ASSOC);

dd($result);
