<?php 
session_start();

require_once "../../module/auth/guard.login.php";

require_once "../../module/events/signup.php";

header("Location: all.php");