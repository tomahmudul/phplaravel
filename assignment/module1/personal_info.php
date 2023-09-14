<?php
/* Task 1: Personal Information Page
Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your name, age, country, and a brief introduction. */

$firstName = "Mahmudul";
$lastName = "Hassan";
$age = 39;
$country = "Bangladesh";
$briefIntro = sprintf( "Hi there, I am %s %s. I am %d years old. I live in Rajshahi, %s. I am very much passionate to learn PHP & Laravel. Thank you.", $firstName, $lastName, $age, $country );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>   
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Personal Information</h2> 
            <ul>
                <li>Name: <?php echo $firstName." ".$lastName; ?></li>
                <li>Age: <?php echo $age; ?></li>
                <li>Country: <?php echo $country; ?></li>
                <li>Brief Information: <?php echo $briefIntro; ?></li>
            </ul>            
        </div>
    </div>   
</body>
</html>