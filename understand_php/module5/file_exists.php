<?php

//file exists
$filename = "../phplaravel/understand_php/module5/public/population.txt";
//D:\xampp\htdocs\phplaravel

if(!is_readable($filename)){
    die("Filename {$filename} is not readable");
}


$fp = fopen($filename, "r");

while($line = fgets($fp)) {
    echo $line;
}

fclose($fp);
