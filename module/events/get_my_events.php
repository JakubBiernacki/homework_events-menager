<?php
require_once "../../database.php";

$user_id = $_SESSION['id'];

$query = "SELECT ev.id, ev.topic, ev.type, ev.description, ev.date, ev.active FROM `events` as ev INNER JOIN `user-event-registration` as ue ON ev.id = ue.event_id WHERE user_id = ? ORDER BY ev.date;";
$all_events_query = $conn->prepare($query);
$all_events_query->bind_param('s', $user_id);
$all_events_query->execute();
$result = $all_events_query->get_result();


$events = $result->fetch_all(MYSQLI_ASSOC);

