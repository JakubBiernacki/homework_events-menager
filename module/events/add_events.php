<?php 

require_once "../../database.php";

$topic = $_POST['topic'];
$type = $_POST['type'];
$disc = $_POST['disc'];
$date = date('Y-m-d\TH:i', strtotime($_POST['date']));
$activate = ($_POST['activate']) ? 1 : 0 ;

$query= "INSERT INTO `events` (`id`, `topic`, `type`, `description`, `date`, `active`) VALUES (NULL, ?, ?, ?, ?, ?);";

$all_events_query = $conn->prepare($query);
$all_events_query->bind_param('sssss', $topic, $type, $disc, $date, $activate);
$all_events_query->execute();

header('Location: all.php');

