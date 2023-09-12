<!-- Task 2: Temperature Converter
Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Temperature Converter</h2>
            <form method="post">
                <input type="number" step="0.001" name="temperature" placeholder="Enter temperature" required>
                <select id="units" name="units">
                    <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
                    <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
                </select>
                <button type="submit" class="btn btn-primary" value="Submit">Convert</button>
            </form>
            <div id="result">
                <?php
                if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                    //print_r($_POST);
                    $temperature = $_POST["temperature"];
                    $units = $_POST["units"];

                    switch ( $units ) {
                    case "celsiusToFahrenheit":
                        $fahrenheit = (float) (  ( $temperature * 9 / 5 ) + 32 );
                        printf( "Converted temperature: %.2f°F", $fahrenheit );
                        break;
                    case "fahrenheitToCelsius":
                        $celsius = (float) (  ( $temperature - 32 ) * 5 ) / 9;
                        printf( "Converted temperature: %.2f°C", $celsius );
                        break;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>