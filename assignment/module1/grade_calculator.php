<!--  Task 3: Grade Calculator
Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Grade Calculator</h2>
            <form method="post">
                <input type="number" step="0.01" max="100" name="scoreOne" placeholder="Enter first test score" min="0" max="100" required>
                <input type="number" step="0.01" name="scoreTwo" placeholder="Enter second test score" min="0" max="100" required>
                <input type="number" step="0.01" name="scoreThree" placeholder="Enter third test score" min="0" max="100" required>                
                <button type="submit" class="btn btn-primary" value="Submit">Calculate</button>
            </form>
            <div id="result">
                <?php
                if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                    //print_r($_POST);exit;
                    $scoreOne = $_POST['scoreOne'];
                    $scoreTwo = $_POST['scoreTwo'];
                    $scoreThree = $_POST['scoreThree'];
                    $averageScore = ($_POST['scoreOne'] + $_POST['scoreTwo'] + $_POST['scoreThree'])/3;                    

                    if($averageScore >= 80 && $averageScore <= 100){
                        $grade = 'A - Outstanding';
                    }
                    elseif ($averageScore >= 70 && $averageScore < 80) {
                        $grade = 'B - Excellent';
                    }
                    elseif ($averageScore >= 60 && $averageScore < 70) {
                        $grade = 'C - Very Good';
                    }
                    elseif ($averageScore >= 50 && $averageScore < 60) {
                        $grade = 'D - Good';
                    }
                    else{
                        $grade = 'F - Fail';
                    }

                    if(is_integer($averageScore)){
                        $placeholder = "%d";
                    }else {
                        $placeholder = "%0.2f";
                    }

                    $output  = "First test score: {$scoreOne} <br />";
                    $output .= "Second test score: {$scoreTwo} <br />";
                    $output .= "Third test score: {$scoreThree} <br />";
                    $output .= sprintf("Average score: {$placeholder} <br /> Corresponding grade is: %s", $averageScore, $grade);                    
                    
                    echo $output;                    
                }
                ?>
            </div>
        </div>
    </div>   
</body>
</html>