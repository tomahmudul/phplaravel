<?php
/* Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array. */

//using callback function
$numbers = range( 1, 10 );
function removeEven( $number ) {
    return $number % 2 !== 0;
}

$result = array_filter( $numbers, "removeEven" );
print_r( $result );

//using normal function
$numbers = range( 1, 10 );
function removeEvenNumbers( $number ) {
    $result = [];
    foreach ( $number as $key => $value ) {
        if ( $value % 2 !== 0 ) {
            $result[$key] = $value;
        }
    }
    return $result;
}

$output = removeEvenNumbers( $numbers );
print_r( $output );