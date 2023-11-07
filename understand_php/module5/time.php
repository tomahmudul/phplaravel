<?php
date_default_timezone_set("Asia/Dhaka");

$currentTime = time();
$one_week_later = $currentTime + 7 * 24*60*60;
echo date("Y-m-d g:ia", $one_week_later);

echo date_default_timezone_get();

echo 'July 13, 2021 is on a ' . date('l', mktime(0, 0, 0, 7, 13, 2021));

echo date("Y-m-d H:i:s");
echo PHP_EOL;
echo date('Y-m-d h:i:s A');
echo PHP_EOL;

$d1 = new DateTime("28 August 2022");
$d2 = new DateTime("19 October 2023");

//$difference = date_diff($d1, $d2);
$difference = $d1->diff($d2);
echo $difference->format("%y %m %d") ."\n";


function lookForTen(int $num1 , int $num2){

    $sum = $num1 + $num2;

    if($num1 == 10 || $num2 == 10 || $sum == 10){
        return "True";
    }else{
        return "False";
    }
}

//echo lookForTen(5,5);
//fscanf(STDIN, "%d %d", $num1, $num2);

function concatenateTwiString(string $str1, string $str2){
    return "{$str2}, {$str1}";
}
fscanf(STDIN, "%d %d", $str1, $str2);
//echo concatenateTwiString($str1,$str2);

$time = mktime(0,0,130,0,0,0);
echo date("H:i", $time);
