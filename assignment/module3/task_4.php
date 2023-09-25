<?php
/* Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. */

$studentGrades = [    
    ["name"=>"Karim", "grades"=> ["Math"=> "A", "English"=>"A", "Science"=> "A" ] ],
    ["name"=>"Rahim", "grades"=> ["Math"=> "A", "English"=>"A", "Science"=> "A" ] ],
    ["name"=>"Hamid", "grades"=> ["Math"=> "A", "English"=>"A", "Science"=> "A" ] ]
];
print_r($studentGrades);