<?php
require_once "../../database.php";

$registration_id = $_POST['id'];

$query= "DELETE FROM `user-event-registration` WHERE id = ?";

$prepare_query = $conn->prepare($query);
$prepare_query->bind_param('s',$registration_id);
$prepare_query->execute();
