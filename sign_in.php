<?php error_reporting(0); ?>
<?php
@include 'config.php';
session_start();
$email_id = $_POST["email_id"];
$password = $_POST["password"];

if (!empty($email_id) and !empty($password)) {

  //echo "Successful";
  $query = "select * from client where email_id='$email_id' limit 1";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $client_data = mysqli_fetch_assoc($result);
    //$row=mysqli_fetch_array($result);
    if ($client_data['password'] == $password) {

      $_SESSION['client_id'] = $client_data['client_id'];
      $_SESSION['client_name'] = $client_data['client_name'];
      $_SESSION['age'] = $client_data['age'];
      $_SESSION['gender'] = $client_data['gender'];
      $_SESSION['address'] = $client_data['address'];
      $_SESSION['ph_no'] = $client_data['ph_no'];
      $_SESSION['email_id'] = $client_data['email_id'];
      $cid = $_SESSION['client_id'];
      $query_shirt = "SELECT shirt_id FROM shirt WHERE client_id='$cid' LIMIT 1";
      $result1 = mysqli_query($conn, $query_shirt);

      if ($result1 && mysqli_num_rows($result1) > 0) {
        $client_shirt_data = mysqli_fetch_assoc($result1);
        $_SESSION['shirt_id'] = $client_shirt_data['shirt_id'];
      }
      $query_pant = "SELECT pant_id FROM pant WHERE client_id='$cid' LIMIT 1";
      $result2 = mysqli_query($conn, $query_pant);

      if ($result2 && mysqli_num_rows($result2) > 0) {
        $client_pant_data = mysqli_fetch_assoc($result2);
        $_SESSION['pant_id'] = $client_pant_data['pant_id'];
      }


      $sid = $_SESSION['shirt_id'];
      $pid = $_SESSION['pant_id'];
      //echo "$pid";

      $link_insert = "INSERT INTO link(client_id,shirt_id,pant_id)VALUES(?,?,?)";
      $stmt3 = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt3, $link_insert)) {
        die(mysqli_error($conn));
      }
      mysqli_stmt_bind_param($stmt3, "iii", $cid, $sid, $pid);

      //mysqli_stmt_execute($stmt3);


      header("Location: ".SITEURL."Hom.php");
      //echo"<script type='text/javascript'>alert('Login successful')</script>";

    } else {
      echo "<script type='text/javascript'>alert('Invalid password')</script>";
      //header("Location : SignIn.html");
    }
  } else {
    echo "<script type='text/javascript'>alert('Invalid email ID')</script>";
    //header("Location : tailor_database/SignIn.html");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SmartStitch-SignIn</title>
  <link rel="stylesheet" href="SignIn.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <form action="<?php echo SITEURL;?>sign_in.php" method="post">
    <div class="container">
      <span>SIGN IN</span>
      <div class="Credential">
        <input type="text" placeholder="Email ID" name="email_id" required />
        <input type="password" placeholder="Password" name="password" required />
        <div class="button">
          <a href="<?php echo SITEURL;?>Hom.php"><button type="submit">Sign In</button></a>
        </div>
        <div class="Noac">
          Don't have an account?/ <a href="<?php echo SITEURL;?>sign_up.php"> Sign up</a>
        </div>
      </div>
    </div>
  </form>
</body>

</html>