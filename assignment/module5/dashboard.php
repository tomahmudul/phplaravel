<?php
session_start();
require("functions.php");

//define variables and set value empty
$usernameErr = $emailErr = $pwdErr = $pwdcErr = $errorMsg = '';
$username = $email = $pwd = $pwdc = '';

if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST['register'] ) ) {
    extract( $_POST );
    if ( empty( $username ) ) {
        $usernameErr = 'name is required!';
    } else {
        $username = validateInput( $_POST['username'] );
        //check if username format is correct
        if ( !preg_match( "/^[0-9a-zA-Z_]*$/", $username ) ) {
            $usernameErr = 'only numbers and letters with underscore allowed!';
        }
    }

    if ( empty( $email ) ) {
        $emailErr = 'email is required!';
    } else {
        $email = validateInput( $_POST['email'] );
        //check if the email format is correct
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $emailErr = 'email format is not correct!';
        }
    }

    if ( empty( $pwd ) ) {
        $pwdErr = 'password is required!';
    } else {
        $pwd = validateInput( $_POST['pwd'] );
        //check if the password format is correct
    }

    if ( empty( $pwdc ) ) {
        $pwdcErr = 'password is not confirmed!';
    } else {
        $pwdc = validateInput( $_POST['pwdc'] );
        //check if the password is matched or not
    }

    if($pwd != $pwdc) {
        $pwdcErr = 'password mismatched!';
    }

    //save userdata to file DB
    if($username && $email && $pwd){

        $usersFile = './db.json';

        $users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];

        if ( isset( $users[$email] ) ) {
            $errorMsg = "Email already exists.";
        } else {
            $users[$email] = [
                'username' => $username,
                'password' => $pwd,
                'role'     => 'user',
            ];
    
            saveUsers($users, $usersFile);
            header( 'Location: login.php?msg=userSuccess' );
        }
        
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <?php include "bootstrap.php"; ?>
</head>
<body>
<div class="container">

    <div class="col-lg-offset-2 col-lg-10">
    <h2 >Registration form</h2>
    <p class="text-danger">* Required field</p>
      <!-- registration form -->
    <form method="post" class="form-horizontal" action="<?=htmlspecialchars( $_SERVER['PHP_SELF'] );?>">
        <?="<p class='text-danger'>$errorMsg</p>";?>
      <!-- name field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="username"><span class="text-danger">*</span> Username:</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?=$username;?>">
            </div>
            <?="<p class='text-danger'>$usernameErr</p>";?>
        </div>

      <!-- email field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="email"><span class="text-danger">*</span> Email:</label>
            <div class="col-lg-4">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?=$email;?>">
            </div>
            <?="<div class='text-danger'>$emailErr</div>";?>
        </div>

      <!-- password field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="pwd"><span class="text-danger">*</span> Password:</label>
            <div class="col-lg-4">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?=$pwd;?>">
            </div>
            <?="<p class='text-danger'>$pwdErr</p>";?>
        </div>

      <!-- password confirm field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="confm-pwd"><span class="text-danger">*</span> Confirm Password:</label>
            <div class="col-lg-4">
                <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="pwdc" value="<?=$pwdc;?>">
            </div>
            <?="<p class='text-danger'>$pwdcErr</p>";?>
        </div>

      <!-- submit and reset button field -->
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-4">
                <button type="submit" name="register" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>