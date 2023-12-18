<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Remove the remember_me cookie if set
if (isset($_COOKIE["remember_me"])) {
    setcookie("remember_me", "", time() - 3600, "/");
}

// Redirect to the login page or any other page you prefer
header("Location: login.php");
exit();
?>
