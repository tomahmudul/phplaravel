<?php
/* Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.*/
function fibonacciSeries( $counter ) {
    if ( $counter == 0 ) {
        return 0;
    } else if ( $counter == 1 ) {
        return 1;
    } else {
        return ( fibonacciSeries( $counter - 1 ) + fibonacciSeries( $counter - 2 ) );
    }
}
//input
$number = 15;

echo "Fibonacci series up to {$number} numbers are: " . PHP_EOL;
for ( $counter = 0; $counter < $number; $counter++ ) {
    echo fibonacciSeries( $counter ), ' ';
}
