<?php
require_once "../../database.php";

$event_id = $_POST['id'];
$user_id = $_SESSION['id'];

$query= "INSERT INTO `user-event-registration` (`user_id`, `event_id`) VALUES (?, ?);";

$prepare_query = $conn->prepare($query);
$prepare_query->bind_param('ss',$user_id, $event_id);
$prepare_query->execute();
