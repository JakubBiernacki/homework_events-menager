<?php
session_start();

echo $_SESSION['username'].$_SESSION['is_admin'];
?>
<a href="../auth/logout.php">Logout</a>