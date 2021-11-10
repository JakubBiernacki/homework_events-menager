<?php
require_once "../../database.php";

$id = $_POST['id'];

$query= "DELETE FROM events WHERE id = ?;";

$all_events_query = $conn->prepare($query);
$all_events_query->bind_param('s',$id);
$all_events_query->execute();

