<?php
session_start();
require("functions.php");

//define variables with empty values
$emailErr = $pwdErr = $rememberErr = $wrongErr = '';
$email = $pwd = $remember = '';

$succMsg = (isset($_GET["msg"]) && $_GET["msg"]) ? "User registered successfully, Please login here.": "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])){
    if (empty($_POST['email'])){
        $emailErr = 'Email is required!';
    }else{
        $email = validateInput($_POST['email']);
        //check if email address is well form
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr = 'Invalid email format!';
        }
    }

    if (empty($_POST['pwd'])){
        $pwdErr = 'Password is required!';
    }else{
        $pwd = validateInput($_POST['pwd']);
    }

    if (empty($_POST['remember'])) {
        $remember = '';
    }else{
        $remember = validateInput($_POST['remember']);
    }

    //login user
    if($email && $pwd){

        $usersFile = './db.json';

        $users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];

        if ( isset($users[$email])  && $users[$email]["password"] == $pwd) {   
            //userdata
            $_SESSION['email'] = $users[$email];
            $_SESSION['username'] = $users[$email]["username"];
            $_SESSION['role'] = $users[$email]["role"];
            header( 'Location: dashboard.php' );
        }else{
            $wrongErr = 'Wrong Username or Password!';
        }
        
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>    
    <?php include "bootstrap.php"; ?>
</head>
<body>
<div class="container">    

    <div class="col-lg-offset-2 col-lg-10">
        <!-- login form -->
    <form method="post" class="form-horizontal" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>User Login</h2>
        <p class="text-danger">* Required field</p>

        <?="<p class='text-danger'>$wrongErr</p>";?>
        <?="<h3 class='text-success'>$succMsg</h3>";?>
        <!-- email field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="email"><span class="text-danger">*</span> Email:</label>
            <div class="col-lg-4">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <?="<p class='text-danger'>$emailErr</p>";?>
        </div>

        <!-- password field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="pwd"><span class="text-danger">*</span> Password:</label>
            <div class="col-lg-4">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <?="<p class='text-danger'>$pwdErr</p>";?>
        </div>
        
        <!-- remember me checkbox field -->
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-4">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
            </div>
        </div>
        
        <!-- submit and reset button field -->
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-4">
                <button type="submit" name="login" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
        </div>
    </form>

        <!-- this part is to show what you have inputed -->
    <?="<h3>Your input:</h3><br>"?>
    <?="<h4>$email</h4><br>"?>
    <?="<h4>$pwd</h4><br>"?>
    <?="<h4>$remember</h4><br>"?>

    </div>
</div>
</body>
</html>