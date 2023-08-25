<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-Sign In</title>
    <!-- <link rel="stylesheet" href="SignIn.css"> -->
</head>
<body>
    <form action="sign_in.php" method="post">
        <div class="conatiner">
            <span>Login</span>
            <div class="username">
                <input type="text" placeholder="Username" name="email_id" required>
            </div>
            <div class="password">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="Signin">Sign In</a></button>
            <div class="new">Don't have an account?<a href="sign_up.php">SignUp</a></div>
        </div>
    </form>
    
</body>
</html>
<?php
    @include 'config.php';
    session_start();
    $email_id=$_POST["email_id"];
    $password=$_POST["password"];
    
    if (!empty($email_id) And !empty($password))
    {
        
        //echo "Successful";
        $query="select * from client where email_id='$email_id' limit 1";
        $result = mysqli_query($conn,$query);
        if($result) 
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $client_data = mysqli_fetch_assoc($result);
                //$row=mysqli_fetch_array($result);
                if($client_data['password'] == $password)
                {
                    
                    $_SESSION['client_id'] = $client_data['client_id'];
                    $_SESSION['client_name'] = $client_data['client_name'];
                    $_SESSION['age'] = $client_data['age'];
                    $_SESSION['gender'] = $client_data['gender'];
                    $_SESSION['address'] = $client_data['address'];
                    $_SESSION['ph_no'] = $client_data['ph_no'];
                    $_SESSION['email_id'] = $client_data['email_id'];
                    header("Location: client_details.php");
                    echo"<script type='text/javascript'>alert('Login successful')</script>";
                    
                }
                else
                {
                    echo"<script type='text/javascript'>alert('Invalid password')</script>";
                    //header("Location : SignIn.html");
                }
            }
            else{
                echo"<script type='text/javascript'>alert('Invalid username')</script>";
                //header("Location : tailor_database/SignIn.html");
            }
        }
        
            
        
    }
?>
