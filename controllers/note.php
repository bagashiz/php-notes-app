<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Note";

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort();
}

$currentUserID = 1;

if ($note['user_id'] !== $currentUserID) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
