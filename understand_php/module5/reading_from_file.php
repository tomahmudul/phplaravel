<?php
$filename = "../phplaravel/understand_php/module5/data.txt";

if(!file_exists($filename)){
    die("Filename {$filename} doesn't exists") ;
}

$fp = fopen($filename,"r");

while($line = fgets($fp)){
    $line = trim($line);
    echo $line;
}


fclose($fp);
