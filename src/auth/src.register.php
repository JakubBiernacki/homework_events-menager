<?php

require_once "../../database.php";

$username = $_POST['username'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$errors = [];

if (empty($username)) {
    array_push($errors, "Username jest wymagane");
}
if (empty($password)) {
    array_push($errors, "Password jest wymagane");
}

if ($password !== $password_confirm) {
    $errors[] = "Hasła sie nie zgadzają";
}

$user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";

$user_check_query_result = $conn->query($user_check_query);

$user_exist = $user_check_query_result->num_rows;

if ($user_exist) {
    $errors[] = "Istnieje juz taki urzytkownik";
}

if (!count($errors)) {
    $password_encrypted = password_hash($password, PASSWORD_BCRYPT);
    $registerQuery = "INSERT INTO users (username, password, is_admin) 
  			  VALUES('$username', '$password_encrypted', 0)";

    $conn->query($registerQuery);
    header('Location: login.php');
}
