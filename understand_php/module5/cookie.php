<?php
<<<<<<< HEAD
define("ONE_WEEK", 7*86400);

$returning_visitor = false;

if(!isset($_COOKIE["cookie_name"])){
    setcookie("cookie_name", 1, time()+ ONE_WEEK);
}else{
    $returning_visitor = true;
}

echo $returning_visitor ?"Welcome Back!":"Welcome to my website";
=======
//setcookie("username","David", time()+3600,"/module5/public");
//setcookie("username","David", time()+3600,"/module5/public");
setcookie("notice","John", time()-3600,"/");
>>>>>>> 810a0ed358d7ab1d38c6a4349b8fb20f97105f69
