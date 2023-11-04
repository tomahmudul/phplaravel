<?php
//Task 1:
$file = "../phplaravel/understand_php/module5/data.txt";

$fp = fopen($file,"r");
$data = [];
while($line = fgets($fp)){
    $data[] = trim($line);
}

fclose($fp);

foreach($data as $line){
    echo $line.PHP_EOL;
}


//Task 2:
$fileName = "../phplaravel/understand_php/module5/data.txt";
$fp = fopen($fileName,"a");
$data = "\nThis is additional text";
fwrite($fp, $data);  
fclose($fp);