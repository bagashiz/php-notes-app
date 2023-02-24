<?php

require "helpers.php";
// require "router.php";
require "Database.php";

$db = new Database();
$result = $db->query("SELECT * FROM users")->fetch(PDO::FETCH_ASSOC);

dd($result);
