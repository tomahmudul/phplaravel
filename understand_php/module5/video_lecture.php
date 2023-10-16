<?php
$filename = "../phplaravel/understand_php/module5/data/data.txt";

$students = [
    [
        "fname" => "Sheikh",
        "lname" => "Hasan",
        "age"   => "10",
    ],
    [
        "fname" => "Zahid",
        "lname" => "Hasan",
        "age"   => "15",
    ],
    [
        "fname" => "Kamal",
        "lname" => "Ahmed",
        "age"   => "12",
    ],
];

//print_r($students);
/* $fp = fopen($filename,"w");
foreach ($students as $student) {
    fputcsv($fp, $student);
}
fclose( $fp ); */

// $fp = fopen($filename,"r");

// $data = file($filename);
// foreach ($data as $item) {
//     $student[]= fgetcsv($fp);
// }

$data = json_encode($students);
file_put_contents($filename, $data);

$alldata = file_get_contents($filename);
$allStudents = json_decode($alldata);
echo $allStudents[0]->fname;

//fclose($fp);

