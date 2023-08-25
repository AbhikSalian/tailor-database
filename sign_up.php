<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-Sign Up</title>
    <!-- <link rel="stylesheet" href="SignUp.css"> -->
</head>
<body>
    <form action="sign_up.php" method="post">
        <div class="container">
            <span>Sign Up</span>
            <div class="name">Name: 
                <input type="text" placeholder="Enter your Name" name="client_name"  required>
            </div>
            <div class="age">Age: 
                <input type="number" placeholder="Enter your Age" min="0" max="150" name="age" value = " " required>
            </div>
            <div class="gender">Gender: 
                <input type="radio" name="gender"  value="male" >Male
                <input type="radio" name="gender"  value="female" >Female
            </div>
            <div class="address">Address: 
                <input type="text" placeholder="Enter your Address" name = "address"  required>
            </div>
            <div class="mobileNo">Mobile Number: 
                <input type="tel" name="mobile" pattern="[0-9]{10}" placeholder="Enter your mobile number"  required>
            </div>
            <div class="email">Email ID: 
                <input type="email" placeholder="Enter your Email ID" name = "email_id"  required>
            </div>
            <div class="password">Enter New Password:
                <input type="password" placeholder="Password" id="p1" name="p1" required><br>
                Re-Enter Password:
                <input type="password" placeholder="Password" id="p2" name="p2" required>
            </div>
            <a href="SignIn.html">
            <button type="submit" class="Signup">Sign Up</button></a>
        </div>
    </form>
    Already have an account?<a href="sign_in.php">Sign in</a>
    
</body>
</html>
<?php
    @include 'config.php';
    session_start();
   $client_name=$_POST["client_name"];
   $age=$_POST["age"];
   $gender=$_POST["gender"];
   $address=$_POST["address"];
   $ph_no=$_POST["mobile"];
   $email_id=$_POST["email_id"];
   $password1=$_POST["p1"];
   $password2=$_POST["p2"];
    //var_dump($name);
    if($password1 != $password2)
    {
        echo"<script type='text/javascript'>alert('Passwords don't match')</script>";
        echo" ";
        echo"Passwords don't match";
    }
    else
    {
        $password=$password2;
        if (!empty($client_name) And !empty($age) And !empty($gender) And !empty($address) And !empty($ph_no) And !empty($email_id))
        {
            
            if(mysqli_connect_errno())
            {
                die('Connect Error : '.mysqli_connect_error());
            }
            //echo "Successful";
        
            else
            {
                $sql="INSERT INTO client (client_name,age,gender,address,ph_no,email_id,password) VALUES (?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($stmt,"sississ",$client_name,$age,$gender,$address,$ph_no,$email_id,$password);
                mysqli_stmt_execute($stmt);
                echo"<script type='text/javascript'>alert('Record saved\nGo back to sign in page and enter your credentials')</script>";
                header('Location: sign_in.php');
                
            }
        }
    }

?>
