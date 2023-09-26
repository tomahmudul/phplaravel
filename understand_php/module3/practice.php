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
//print_r($result);


//concatenate arrays

// $myArr1 = [1, "tv" => "ac", 2, "washing machine", 3];
// $myArr2 = ["word", "abc", "vegetable" => "tomato", "state" => "washington dc"];

// $output = array_merge($myArr1, $myArr2);

// print_r($output);

//sorting

$random_data = [32508, 98134, "234984", "3249832", "38", 123, "Apple"];

sort($random_data, SORT_STRING);

foreach ($random_data as $key => $value) {
    # code...
    //echo "[".str_pad($value, 9)."]\n";
}

//print_r($random_data);





// 14. Searching in Indexed and Associated Arrays
$numbers = [1,11,"b"=>'25',35,56,78,11,85,11,195];
// if(in_array(25, $numbers, true)) {
//     echo "25 is found";
// }else{
//     echo "not found";
// }

// $offset = array_search(11, $numbers, true);
// print_r($offset);

// if(key_exists('b', $numbers)) {
//     echo "found";
// }
// else
// echo "not found";

//15. Difference and intersection of two indexed and associated arrays
$number1 = [1,4,3,2,8,16,25,30];
$number2 = [88,3,21,44,3,28,1,2,7];

$common = array_intersect($number1, $number2);
// print_r($common);

function square($num1){
    printf("Square of %d is %d \n",  $num1, $num1 * $num1);    
}   

function cube($num1){
    //printf("cube of %d is %d \n",  $num1, $num1 * $num1 * $num1);    
    return $num1 * $num1 * $num1;
}  


//$newArray = array_walk($number1,'square');
//print_r($newArray);
// $newArray = array_map('cube', $number1);
// print_r($newArray);

function even(){
    
}

$newArray = array_filter($number1, 'even');
print_r($newArray);



$numbers = [10,20,30];

$total  = array_reduce($numbers, function ($previous, $current) {
    return $previous + $current;
}, 0);

echo $total; // 60


//get total price
$carts = [
    ['item' => 'A', 'qty' => 2, 'price' => 10],
    ['item' => 'B', 'qty' => 3, 'price' => 20],
    ['item' => 'C', 'qty' => 5, 'price' => 30]
];

$total = array_reduce($carts, function ($previous, $current) {  
    return $previous + $current['qty'] * $current['price'];
}, 0);
echo $total.PHP_EOL;


$color = ['hassan',265,355];

list($red, $green, $blue) = $color;

echo $red.PHP_EOL;
echo $green.PHP_EOL;
echo $blue.PHP_EOL;

$numbers = range(1,10, 2);
print_r($numbers);