<?php
/* Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also. */

//solution using for loop
function useForLoop( $start, $end, $step ) {
    $output = "";
    for ( $i = $start; $i <= $end; $i += $step ) {
        $output .= $i . " ";
    }

    return $output;
}

//solution using while loop
function useWhileLoop( $start, $end, $step ) {
    $result = "";
    while ( $start <= $end ) {
        if ( $start % 2 == 0 ) {
            $result .= $start . " ";
        }
        $start += $step;
    }

    return $result;
}

//solution using do-while loop
function useDoWhileLoopLoop( $start, $end, $step ) {
    $result = "";
    do {
        if ( $start % 2 == 0 ) {
            $result .= $start . " ";
        }
        $start += $step;
    } while ( $start <= $end );

    return $result;
}

function getEvenNumbers( $start = 1, $end = 20, $step = 2, $modeOfOperation = "forLoop" ) {
    if ( $start < 0 || $end < 0 || $start > $end || $step < 1 ) {
        echo "Invalid arguments passed to function!!!";
        return;
    } elseif ( $start == $end && ( $start % 2 != 0 || $end % 2 != 0 ) ) {
        echo "There is no even number between {$start} to {$end}!!!";
        return;
    }

    if ( $step <= 1 ) {
        $step = 2;
    }

    $output = "All even numbers from {$start} to {$end} using {$modeOfOperation} are: ".PHP_EOL;

    if ( $start <= 1 ) {
        $start = 2;
    } elseif ( $start % 2 != 0 ) {
        $start = $start + 1;
    }

    switch ( $modeOfOperation ) {
    case "whileLoop":
        $output .= useWhileLoop( $start, $end, $step );
        break;
    case "dowhileLoop":
        $output .= useDoWhileLoopLoop( $start, $end, $step );
        break;
    case "forLoop":
        $output .= useDoWhileLoopLoop( $start, $end, $step );
        break;
        // default:
        //     $output .= useForLoop( $start, $end, $step );
    }

    echo $output;
}

//input
$start = 1;
$end = 20;
$step = 1;
$modeOfOperation = "forLoop"; // forLoop, whileLoop, dowhileLoop
getEvenNumbers( $start, $end, $step, $modeOfOperation );
echo PHP_EOL;

$modeOfOperation = "whileLoop"; // forLoop, whileLoop, dowhileLoop
getEvenNumbers( $start, $end, $step, $modeOfOperation );
echo PHP_EOL;

$modeOfOperation = "dowhileLoop"; // forLoop, whileLoop, dowhileLoop
getEvenNumbers( $start, $end, $step, $modeOfOperation );
echo PHP_EOL;
