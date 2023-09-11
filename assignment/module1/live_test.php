<?php
/* Task 1: Variable
Declare a variable called $age and assign your age to it. */

$age = 39;

/* Task 2: Constant
Define a constant named PI and assign the value of Pi (3.14159) to it. */

define( "PI", 3.14159 );

/* Task 3: Printing Output
Print the following sentence using the echo statement:
Hello, welcome to the world of PHP programming! */

echo "Hello, welcome to the world of PHP programming!";

/* Task 4: Arithmetic Operations
Calculate and print the result of the expression: ((20 + 5) * 3) / 4. */

$expression = (  ( 20 + 5 ) * 3 ) / 4;
printf( "%.2f", $expression );

/* Task 5: Conditional Operators
Write a conditional statement that checks if a variable $marks is greater than or equal to 60 and less than 80. If the condition is true, print "Passed," otherwise print "Failed." */

$marks = 65;
if ( $marks >= 60 && $marks < 80 ) {
    print "Passed";
} else {
    print "Failed";
}


echo 10 + 5 -3*4;