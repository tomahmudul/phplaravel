<?php
/* Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement. */

//input
$number = 20;
if ( $number == 0 ) {
    echo "0";
} else if ( $number == 1 ) {
    echo "1";
} else {
    $first = 0;
    $second = 1;
    echo "Fibonacci series up to {$number} numbers are (break out of the loop if number is greater than 100) : " . PHP_EOL;
    echo $first . ' ' . $second . ' ';
    for ( $i = 2; $i < $number; $i++ ) {
        $third = $first + $second;
        if ( $third > 100 ) {
            break;
        }
        echo $third . ' ';
        $first = $second;
        $second = $third;
    }
}