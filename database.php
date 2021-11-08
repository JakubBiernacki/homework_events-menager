<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, 'szkola_events_meanger');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}