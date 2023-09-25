<?php
//Mastering PHP Array & String

//Most used PHP array functions
//1. count()

$cars = ["Ferrari", "Mercedes", "BMW", "Benz"];
echo count( $cars );

$cars = [
    'Ferrari'  => [
        'FI585',
        'FI909',
    ],
    'Mercedes' => [
        'M39',
        'M69',
    ],
    'Benz'     => [
        'BZ01',
    ],
];

echo "Normal count: ".count( $cars );
echo "Recursive count: ".count($cars, 1);

//2. array_key_exists()
$search_array = ['first'=>1, 'second'=>2];
if(array_key_exists('first', $search_array) ) {
    //echo 'the first is in the array';
}

$array = [0=>100, 'color'=>'red'];
$keys = array_keys($array, 'red');
//print_r( $keys );

$array = array("blue", "red", "green", "blue", "blue");
//print_r(array_keys($array, "blue"));


//3. array_values()

$array = array("size" => "XL", "color" => "gold");
//print_r(array_values($array));

$os = array("Mac", "NT", "com"=>"Irix", "Linux");
if (in_array("Irix", $os)) {
    //echo "Got Irix";
}
if (in_array("mac", $os)) {
   // echo "Got mac";
}

echo PHP_EOL;
//array_pop()
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
//print_r($stack);

echo PHP_EOL;
//array_push()

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry", "another");
//print_r($stack);

echo PHP_EOL;
//array_shift
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
//print_r($stack);
echo PHP_EOL;

$trans = array("a" => 1, "b" => 1, "c" => 2);
$trans = array_flip($trans);
//print_r($trans);
echo PHP_EOL;

$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

// print_r($input);
// print_r($reversed);
// print_r($preserved);
echo PHP_EOL;

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);



//Creating a nested associative array
$student = [
    'name' => 'Alice',
    'contact' => [
        'email' => 'alice@example.com',
        'phone' => '123-456-7890'
    ]
];

if(array_key_exists('age', $student)){
    echo "Age is: ". $student['age'];
}


$keys = array_keys($student);
$values = array_values($student);

print_r($keys);
print_r($values);

$table = [
    ['Name', 'Age', 'City'],
    ['Alice', 22, 'New York'],
    ['Bob', 30, 'San Francisco'],
    ['Charlie', 25, 'Los Angeles']
];

//Displaying the table

foreach ($table as $row) {
    echo implode("\t", $row) . "\n";
}

$organization = [
    "CEO" => "John",
    "CTO" => [
        "Enginerring Manager"=> "Alice",
        "Developers"=> "Bob, Charlie"
    ],
    "CFO" => "David"
];

print_r($organization);

echo $organization["CTO"]["Enginerring Manager"];


