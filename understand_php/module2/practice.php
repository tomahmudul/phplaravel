<?php
<<<<<<< HEAD

//string reverse
$str =  "I love PHP";
for($i = strlen($str) -1; $i>=0; $i--) {
   echo  $str[$i];
}

echo PHP_EOL;

for($i = 0 ; $i <= 10; $i++ ) {

   for($j = 0 ; $j<$i; $j++){
       echo "*";
   }
   echo "*".PHP_EOL;
   
}


function myFunc(){
   
}

//0, 1, 1, 2, 3, 5, 8, 13, 21, 34


/* function printFibonancy($terms){
   $first = 0;
   $second = 1;

   if($terms <= 0 ){
     echo "Invalid no";
     return;
   }
   echo $first. " ".$second. " ";

   for ($i=0; $i < 10; $i++) { 
      # code...
      $new = $first + $second;
      echo $new." ";

      $first = $second;
      $second = $new;
   }
}


printFibonancy(10); */


/* Creating pattern of stars in ten rows.
 *
 **
 ***
 ****
 *****
 ******
 *******
 ********
 *********
 ********** */


/*  for($i = 0 ; $i <= 10; $i++ ) {

    for($j = 0 ; $j<$i; $j++){
        echo "*";
    }
    echo "*".PHP_EOL;
    
 }

 */
=======
//call back function

$cars = array(
    array('name' => 'Ferrari', 'rate' => 5),
    array('name' => 'Benz', 'rate' => 5),
    array('name' => 'BMW', 'rate' => 4),
    array('name' => 'Volvo', 'rate' => 4)
);


array_filter($cars, function($car) { return $car['rate'] > 4; });

print_r($cars);


















>>>>>>> 4ad267c (module 2)



/* Creating Patterns (Demo) using for loop
PHP
All Loops
For Loop
Pattern #1 :
Creating pattern of stars in ten rows.
 *
 **
 ***
 ****
 *****
 ******
 *******
 ********
 *********
 **********
Source code is here
for($i=1; $i<=10; $i++){
for($j=1;$j<=$i;$j++){
echo "*";
}
echo "<br>";
}
Pattern #2
 *---------
 **--------
 ***-------
 ****------
 *****-----
 ******----
 *******---
 ********--
 *********-
 **********
Source code is here
for($i=1; $i<=10; $i++){
for($j=1;$j<=$i;$j++){
echo "*";
}
for($k=$j;$k<=10;$k++){
echo "-";
}
echo "<br>";
}
Pattern #3
 *********
 ********
 *******
 ******
 *****
 ****
 ***
 **
 *

for($i=1;$i<=10;$i++){
for($j=1;$j<=(10-$i);$j++){
echo '*';
}
echo ('<br>');
}
Pattern #4
 *
 ***
 *****
 *******
 *********
 ***********
 *************
 ***************
 *****************
 *******************
Use &nbsp; inside first echo to add empty space.
for($i=1;$i<=10;$i++){
for($j=$i;$j<=10;$j++){
echo '&nbsp;';
}
for($k=1;$k<=(2*$i-1);$k++){
echo '*';
}
echo ('<br>');
}
Pattern #5
 *******************
 *****************
 ***************
 *************
 ***********
 *********
 *******
 *****
 ***
 *

for($i=10;$i>=0;$i--){
for($j=$i;$j<=10;$j++){
echo '&nbsp;';
}
for($k=1;$k<=(2*$i-1);$k++){
echo '*';
}
echo ('<br>');
}
Pattern #6
 ************************
 ***********  ***********
 **********    **********
 *********      *********
 ********        ********
 *******          *******
 ******            ******
 *****              *****
 ****                ****
 ***                  ***
 **                    **
 *                      *

for($i=0;$i<=12;$i++){
for($j=$i;$j<=11;$j++){
echo '*';
}
for($k=1;$k<=(2*$i);$k++){
echo '&nbsp;';
}
for($j=$i;$j<=11;$j++){
echo '*';
}
echo ('<br>');
}

Multiplication table up to 10
1 x 1 = 1, 1 x 2 = 2, 1 x 3 = 3, 1 x 4 = 4, 1 x 5 = 5, 1 x 6 = 6, 1 x 7 = 7, 1 x 8 = 8, 1 x 9 = 9, 1 x 10 = 10,
2 x 1 = 2, 2 x 2 = 4, 2 x 3 = 6, 2 x 4 = 8, 2 x 5 = 10, 2 x 6 = 12, 2 x 7 = 14, 2 x 8 = 16, 2 x 9 = 18, 2 x 10 = 20,
3 x 1 = 3, 3 x 2 = 6, 3 x 3 = 9, 3 x 4 = 12, 3 x 5 = 15, 3 x 6 = 18, 3 x 7 = 21, 3 x 8 = 24, 3 x 9 = 27, 3 x 10 = 30,
4 x 1 = 4, 4 x 2 = 8, 4 x 3 = 12, 4 x 4 = 16, 4 x 5 = 20, 4 x 6 = 24, 4 x 7 = 28, 4 x 8 = 32, 4 x 9 = 36, 4 x 10 = 40,
5 x 1 = 5, 5 x 2 = 10, 5 x 3 = 15, 5 x 4 = 20, 5 x 5 = 25, 5 x 6 = 30, 5 x 7 = 35, 5 x 8 = 40, 5 x 9 = 45, 5 x 10 = 50,
6 x 1 = 6, 6 x 2 = 12, 6 x 3 = 18, 6 x 4 = 24, 6 x 5 = 30, 6 x 6 = 36, 6 x 7 = 42, 6 x 8 = 48, 6 x 9 = 54, 6 x 10 = 60,
7 x 1 = 7, 7 x 2 = 14, 7 x 3 = 21, 7 x 4 = 28, 7 x 5 = 35, 7 x 6 = 42, 7 x 7 = 49, 7 x 8 = 56, 7 x 9 = 63, 7 x 10 = 70,
8 x 1 = 8, 8 x 2 = 16, 8 x 3 = 24, 8 x 4 = 32, 8 x 5 = 40, 8 x 6 = 48, 8 x 7 = 56, 8 x 8 = 64, 8 x 9 = 72, 8 x 10 = 80,
9 x 1 = 9, 9 x 2 = 18, 9 x 3 = 27, 9 x 4 = 36, 9 x 5 = 45, 9 x 6 = 54, 9 x 7 = 63, 9 x 8 = 72, 9 x 9 = 81, 9 x 10 = 90,
10 x 1 = 10, 10 x 2 = 20, 10 x 3 = 30, 10 x 4 = 40, 10 x 5 = 50, 10 x 6 = 60, 10 x 7 = 70, 10 x 8 = 80, 10 x 9 = 90, 10 x 10 = 100,

for($v1=1;$v1<=10;$v1++){
for($i=1;$i<11;$i++){
echo "$v1 x $i = ".$v1*$i;
echo ', ';
}
echo PHP_EOL;
}

 */