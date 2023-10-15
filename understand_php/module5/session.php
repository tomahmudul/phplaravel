<?php
session_start();

$_SESSION["counter"] = $_SESSION['counter']??1;
$_SESSION["counter"]++;
echo $_SESSION["counter"];

unset($_SESSION["counter"]);
session_destroy();