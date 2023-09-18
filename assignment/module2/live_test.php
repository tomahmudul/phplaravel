<?php
//Question
//1. Create a PHP script using a loop to print all even numbers between 1 and 10.

for ( $i = 2; $i <= 10; $i += 2 ) {
    echo $i . " ";
}
echo PHP_EOL;

//2. Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.

function greet( $name ) {
    echo "Hello, " . $name . "!";
}

greet( "John Doe" );
echo PHP_EOL;

//3. Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.

function factorial( $number ) {
    if ( $number == 0 ) {
        return 1;
    }
    return $number * factorial( $number - 1 );
}

$number = 5;
printf( "Factorial of %d is: %d", $number, factorial( $number ) );
echo PHP_EOL;

//4. Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.

function fibonacci( $number ) {

    $first = 0;
    $second = 1;

    echo "Fibonacci series up to 10 numbers are : ";
    echo $first . ' ' . $second . ' ';
    for ( $i = 2; $i < $number; $i++ ) {
        $third = $first + $second;
        echo $third . ' ';
        $first = $second;
        $second = $third;
    }
}
$number = 10;
fibonacci( $number );