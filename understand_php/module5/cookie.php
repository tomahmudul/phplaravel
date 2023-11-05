<?php
define("ONE_WEEK", 7*86400);

$returning_visitor = false;

if(!isset($_COOKIE["cookie_name"])){
    setcookie("cookie_name", 1, time()+ ONE_WEEK);
}else{
    $returning_visitor = true;
}

echo $returning_visitor ?"Welcome Back!":"Welcome to my website";