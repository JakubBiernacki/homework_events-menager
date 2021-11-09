<?php

require_once "../../database.php";

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

$errors = [];


$user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";

$user_check_query_result = $conn->query($user_check_query);

$user = $user_check_query_result->fetch_assoc();

$compare = password_verify($password , $user['password']);

if (!$user || !$compare) {
    $errors[] = "Błędne dane";   
}

if (!count($errors)) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['is_admin'] = $user['is_admin'];
    header('Location: '.Config::path."/events");
}


