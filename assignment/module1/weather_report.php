<!--  Task 5: Weather Report
Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm." -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Weather Report</h2>
            <form method="post">
                <input type="number" name="temperature" placeholder="Enter temperature" required>
                <button type="submit" class="btn btn-primary" value="Submit">Check</button>
            </form>
            <div id="result">
                <?php
                if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {                    
                    //print_r( $_POST );exit;
                    $temperature = $_POST['temperature'];
                    
                    if($temperature >= 20 ){
                        $output = "It's warm.";
                    }
                    elseif ($temperature >= 10 && $temperature < 20) {
                        $output = "It's cool.";
                    }
                    else{
                        $output = "It's freezing!";
                    }                                                          
                    
                    printf("Temperature is: %s °C|°F, {$output}",$temperature);
                }
                ?>
            </div>
        </div>
    </div>   
</body>
</html>