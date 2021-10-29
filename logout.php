<?php
session_start();
$cookie_name = "admin_logged";
unset($_COOKIE[$cookie_name]);
setcookie($cookie_name, "", time() - 3600, '/');
session_destroy();
header('location: login.php');
