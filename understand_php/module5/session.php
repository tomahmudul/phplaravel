<?php
session_start();

$_SESSION["counter"] = $_SESSION['counter']??1;
$_SESSION["counter"]++;
echo $_SESSION["counter"];


echo session_save_path();

//unset($_SESSION["counter"]);
//session_destroy();