<?php
/* Task 1: Personal Information Page
Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your name, age, country, and a brief introduction. */

$firstName = "Mahmudul";
$lastName = "Hassan";
$age = 39;
$country = "Bangladesh";
$briefIntro = sprintf( "Hi there, I am %s %s. I am %d years of age. I live in Rajshahi, %s. I am very much passionate to learn new technologies. Currently I am working in Janata Bank PLC., Principal Officer(IT), Divisional Office, Rajshahi. I am very much interested to learn Laravel from Ostad team. Thank you.", $firstName, $lastName, $age, $country );

echo $briefIntro;


