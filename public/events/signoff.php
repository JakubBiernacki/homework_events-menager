<?php 
session_start();

require_once "../../module/auth/guard.login.php";

require_once "../../module/events/signoff.php";

header("Location: index.php");