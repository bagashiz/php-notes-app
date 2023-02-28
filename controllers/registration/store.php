<?php

use Core\App;
use Core\Database;
use Core\Validator;

require base_path("Core/Validator.php");

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "please enter a valid email address";
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = "a password of at least 7 characters is required";
}

if (!empty($errors)) {
    return view("registration/create.view.php", [
        'errors' => $errors,
    ]);
}

$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email,
])->find();

if ($user) {
    header("location: /");
    exit();
} else {
    $db->query("INSERT INTO users (email, password) VALUES (:email, :password)", [
        'email' => $email,
        'password' => $password, // will be hashed in the future
    ]);

    $_SESSION['user'] = [
        'email' => $email,
    ];

    header("location: /");
    exit();
}
