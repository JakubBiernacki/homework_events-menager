<?php
require_once "../../module/auth/guard.login.php";

if ($_SESSION['is_admin'] !== '1') {
  header("Location: " . Config::path . "/auth/login.php");
}

require_once "../../module/events/delete_event.php";
header("Location: all.php");