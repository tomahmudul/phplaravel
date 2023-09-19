<?php
/* Task 2: Skip Multiples of 5
Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
loop encounters a multiple of 5, it should skip that number using the continue statement and
continue to the next iteration. */

function printNumbers( $start = 1, $end = 50 ) {
    if ( $start < 0 || $end < 0 || $start > $end ) {
        echo "Invalid arguments passed to function!!!";
        return;
    } elseif ( $start == $end ) {
        echo "There is no number between {$start} to {$end}!!!";
        return;
    }

    $output = "All numbers from {$start} to {$end} skipping multiples of 5 are: " . PHP_EOL;

    for ( $i = $start; $i <= $end; $i++ ) {
        if ( $i % 5 == 0 ) {
            continue;
        }
        $output .= $i . " ";
    }
    echo $output;
}
//input
$start = 1;
$end = 50;
printNumbers( $start, $end );