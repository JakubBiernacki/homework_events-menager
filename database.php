<?php
require_once "config.php";

$conn = new mysqli(Config::database['host'], Config::database['username'], Config::database['password'], Config::database['db']);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
