<?php
session_start();
if(!isset($_SESSION["username"]) && !$_SESSION["username"]){
    header("Location:login.php");
}
if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"){
  header( 'Location: role_management.php' );
}
//print_r($_SESSION);
//exit;
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
    <h2 >Dashboard</h2>
    
    <div>Welcome <?=ucfirst($_SESSION["username"]) ?? ""; ?>, &nbsp;Your have logged in as <?=$_SESSION["role"] ?? ""; ?>.</div>    
    <p><a href="logout.php">Logout</a></p>    
    </div>

</div>
</body>
</html>