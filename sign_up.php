<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-Sign Up</title>
    <link rel="stylesheet" href="SignUp.css">
</head>
<body>
    <form onSubmit="return checkPassword(this)" action="sign_up.php" method="post">
      <div class="container">
        <span>SIGN UP</span>
        <div class="Credential">
          <input
            type="text"
            placeholder="Enter your Name"
            name="client_name"
            required
          />

          <input
            type="number"
            placeholder="Enter your Age"
            min="0"
            max="150"
            name="age"
            required
          />
          <div class="gender">
            <input
              type="radio"
              name="gender"
              value="male"
            />Male <input type="radio" name="gender" value="female" />Female
          </div>
          
          <input
            type="text"
            placeholder="Enter your Address"
            name="address"
            required
          />

          <input
            type="tel"
            name="mobile"
            pattern="[0-9]{10}"
            placeholder="Enter your mobile number"
            required
          />

          <input
            type="email"
            placeholder="Enter your Email ID"
            name="email_id"
            required
          />

          <input
            type="password"
            placeholder="New Password"
            id="p1"
            name="p1"
            required
          />
          <input
            type="password"
            placeholder="Re-Enter Password"
            id="p2"
            name="p2"
            required
          />

          <div class="button">
          <a href="sign_in.php"><button type="submit" value="Submit">Sign Up</button></a></div>

          <div class="Noac">
            Already have an account?<a href="sign_in.php"> Sign in</a>
          </div>
        </div>
      </div>
    </form>
    <script>
      function checkPassword(form) {
        const p1 = form.p1.value;
        const p2 = form.p2.value;

        if (p1 != p2) {
          alert("Error! Passwords do not match.");
          return false;
        } else {
          return true;
        }
      }
    </script>
  </body>
</html>

<?php
@include 'config.php';
session_start();
$client_name = $_POST["client_name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$ph_no = $_POST["mobile"];
$email_id = $_POST["email_id"];
$password1 = $_POST["p1"];
$password2 = $_POST["p2"];
$exist_email="select * from client where email_id='$email_id'";
  $result = mysqli_query($conn,$exist_email);
  
  if (mysqli_num_rows($result) > 0)
  {
    echo "<script type='text/javascript'>alert('Email already exists')</script>";
  }
else
{
  if ($password1 != $password2) 
  {
      echo "<script type='text/javascript'>alert('Passwords don't match')</script>";
      echo " ";
      echo "Passwords don't match";
  } else {
    
      $password = $password2;
      if (!empty($client_name) and !empty($age) and !empty($gender) and !empty($address) and !empty($ph_no) and !empty($email_id)) {

          if (mysqli_connect_errno()) {
              die('Connect Error : ' . mysqli_connect_error());
          }
          //echo "Successful";

          else {
              $sql = "INSERT INTO client (client_name,age,gender,address,ph_no,email_id,password) VALUES (?,?,?,?,?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                  die(mysqli_error($conn));
              }
              mysqli_stmt_bind_param($stmt, "sississ", $client_name, $age, $gender, $address, $ph_no, $email_id, $password);
              mysqli_stmt_execute($stmt);
              echo "<script type='text/javascript'>alert('Record saved\nGo back to sign in page and enter your credentials')</script>";
              header('Location: sign_in.php');
          }
      }
  }
}

?>