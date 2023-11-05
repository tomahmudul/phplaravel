<?php


date_default_timezone_set("Asia/Dhaka");

echo time();
echo date("h:i:sa");

echo mktime(0,0,0, date("m"), date("d"), date("Y"));


$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d);


$startDate = strtotime("saturday");

$endDate = strtotime("+6 weeks", $startDate);

while ($startDate < $endDate) {

    echo date("M d", $startDate). "\n";
    $startDate = strtotime("+1 week", $startDate);
    
}
