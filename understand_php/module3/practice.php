<?php
//Mastering PHP Array & String

//call back function

$cars = array(
    array('name' => 'Ferrari', 'rate' => 5),
    array('name' => 'Benz', 'rate' => 5),
    array('name' => 'BMW', 'rate' => 4),
    array('name' => 'Volvo', 'rate' => 4)
);


array_filter($cars, function($car) { return $car['rate'] > 4; });

print_r($cars);
