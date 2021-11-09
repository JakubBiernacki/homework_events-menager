<?php
require_once "../../config.php";

if (!isset($_SESSION['username'])) {
    header("Location: ".Config::path."/auth/login.php");
}