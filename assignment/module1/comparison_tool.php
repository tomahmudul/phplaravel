
<!-- Task 6: Comparison Tool
Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <h2>Comparison Tool</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>            
            <button type="submit" class="btn btn-primary">Compare</button>
        </form>
        <div id="result">
            <?php
            if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                //print_r($_POST);exit;
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                
                echo ($num1 > $num2)?"First number {$num1} is larger than second number {$num2}.":($num1 < $num2?" Second number {$num2} is larger than first number {$num1}.":"Both numbers are equal."); 
            }
            ?>
        </div>
        </div>
    </div>
</body>
</html>