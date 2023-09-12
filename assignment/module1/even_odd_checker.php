<!--  Task 4: Even or Odd Checker
Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Even or Odd Checker</h2>
            <form method="post">
                <input type="number" name="number" placeholder="Enter a number" min="1" required>
                <button type="submit" class="btn btn-primary" value="Submit">Check</button>
            </form>
            <div id="result">
                <?php
                if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {                    
                    //print_r( $_POST );exit;
                    $number = $_POST['number'];

                    if(isset($number) && $number % 2 == 0){
                        $output = "Even"; 
                    }
                    else{
                        $output = "Odd"; 
                    }

                    printf("Number {$number} is : %s", $output);
                }
                ?>
            </div>
        </div>
    </div>   
</body>
</html>