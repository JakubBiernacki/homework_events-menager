<?php
require_once "../../database.php";

$user_id = $_SESSION['id'];


$all_events_query = $conn->prepare("SELECT * FROM `events` as ev INNER JOIN `user-event-registration` as ue ON ev.id = ue.event_id WHERE user_id = ?");
$all_events_query->bind_param('s', $user_id);
$all_events_query->execute();
$result = $all_events_query->get_result();


$events = $result->fetch_all(MYSQLI_ASSOC);

