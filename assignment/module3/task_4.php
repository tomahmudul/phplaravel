<?php
/* Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. */

$studentGrades = [
    ["name" => "Karim", "grades" => ["Math" => "100", "English" => "85", "Science" => "80"]],
    ["name" => "Rahim", "grades" => ["Math" => "90", "English" => "90", "Science" => "80"]],
    ["name" => "Hamid", "grades" => ["Math" => "95", "English" => "85", "Science" => "80"]],
];

function calculateAverageGrades( $student ) {
    foreach ( $student as $key => $value ) {
        $average = array_sum( $value["grades"] ) / count( $value["grades"] );
        $student[$key]['averageGrade'] = number_format( $average, 2 );
    }
    return $student;
}

$averageGrade = calculateAverageGrades( $studentGrades );
print_r( $averageGrade );