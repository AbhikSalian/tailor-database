<?php
include ('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $psswd=$_POST['tailor_password'];
    if($psswd==1234)
    {
        $_SESSION['tailor_login']="Logged in";
        header('location:'.SITEURL.'tailor_interface.php');
    }
    else
    {
        echo "<script type='text/javascript'>alert('Incorrect password')</script>";
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-TailorLoginPassword</title>
    <link rel="stylesheet" href="tailor_login.css">
</head>
<body>
    <form action="" method="post">
    <div class="container">
       <h3>TAILOR LOGIN</h3>
            <input type="password" id="pass" placeholder="Password" name="tailor_password" required/>
            <button type="submit">Login</button>

    </div>
    </form>
    
</body>
</html>