<?php
require_once "../../database.php";

$user_id = $_SESSION['id'];


$result= $conn->query("SELECT * FROM `events`");
// $all_events_query->bind_param('s', $user_id);
// $all_events_query->execute();
// $result = $all_events_query->get_result();


$events = $result->fetch_all(MYSQLI_ASSOC);

