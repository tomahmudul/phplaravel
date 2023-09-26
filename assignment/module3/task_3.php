<?php
/* Task 3: Array Sorting

Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array. */

//using callback function
$grades = [85, 92, 78, 88, 95];
function sortArrayDescending( $x, $y ) {
    if ( $x === $y ) {
        return 0;
    }
    return $x < $y ? 1 : -1;
}
usort( $grades, "sortArrayDescending" );
print_r( $grades );

//using normal function
$ggradesrade = [85, 92, 78, 88, 95];
function sortByDescendingOrder( $grade ) {
    rsort( $grade );
    print_r( $grade );
}
sortByDescendingOrder( $grades );
