<?php
session_start();
session_destroy();
session_unset();
unset($_SESSION["email"]);
unset($_SESSION["name"]);
unset($_SESSION["role"]);
$_SESSION = array();
//print_r($_SESSION);
header("Location:login.php");