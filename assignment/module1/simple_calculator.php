
<!-- Task 7: Simple Calculator
Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <h2>Simple Calculator</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>               
            </select>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                //print_r($_POST);
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];
                $text = "Result of the chosen operation: ";

                switch ( $operation ) {
                    case "add":
                    $result = $num1 + $num2;
                    echo $text.$result;
                    break;
                    case "subtract":
                    $result = $num1 - $num2;
                    echo $text.$result;
                    break;
                    case "multiply":
                    $result = $num1 * $num2;
                    echo $text.$result;
                    break;
                    case "divide":
                    if ( $num2 != 0 ) {
                        $result = $num1 / $num2;
                        echo $text.$result;
                    } else {
                        echo "Cannot divide by zero.";
                    }
                    break;                
                }
            }
            ?>
        </div>
        </div>
    </div>
</body>
</html>