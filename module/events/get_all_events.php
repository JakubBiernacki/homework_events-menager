<?php
require_once "../../database.php";

$user_id = $_SESSION['id'];


$query = "SELECT * FROM events WHERE id NOT IN (SELECT events.id FROM events LEFT JOIN `user-event-registration` ON events.id = `user-event-registration`.event_id WHERE `user-event-registration`.user_id = ? );";

$all_events_query = $conn->prepare($query);
$all_events_query->bind_param('s', $user_id);
$all_events_query->execute();
$result = $all_events_query->get_result();

$events = $result->fetch_all(MYSQLI_ASSOC);

