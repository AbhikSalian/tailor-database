<?php
// Your existing PHP code
//error_reporting(E_ALL);
include ('config.php');
    session_start();
    $cl_id=$_GET['id'];
    $client_display="SELECT * FROM client WHERE client_id='$cl_id'";
     $res_client=mysqli_query($conn,$client_display);
     if($res_client)
     {
         $row_client=mysqli_fetch_assoc($res_client);
         $disp_name=$row_client['client_name'];
         $disp_age=$row_client['age'];
         $disp_gender=$row_client['gender'];
         $disp_addr=$row_client['address'];
         $disp_phno=$row_client['ph_no'];
         $disp_email=$row_client['email_id'];
     }
     else
     {
         echo "No data";
     }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
     $cid=$_SESSION['client_id'];
     
        $client_name=$_POST["client_name"];
        $age=$_POST["age"];
        $gender=$_POST["gender"];
        $address=$_POST["address"];
        $ph_no=$_POST["ph_no"];
        $email_id=$_POST["email_id"];
     
          $client_update="UPDATE client SET 
          client_name='$client_name',
          age='$age',
          gender='$gender',
          address='$address',
          ph_no='$ph_no',
          email_id='$email_id'
          WHERE
          client_id='$cid'";
          $res_client=mysqli_query($conn,$client_update) or die(mysqli_error($conn));
          $_SESSION['client_name']=$client_name;
          $_SESSION['age']=$age;
          $_SESSION['gender']=$gender;
          $_SESSION['address']=$address;
          $_SESSION['ph_no']=$ph_no;
          $_SESSION['email_id']=$email_id;
          if ($res_client) {
              
          header('Location: '.SITEURL.'client_details.php');
            exit;
          } 
          else 
          {
            
            echo "Data not inserted";
        }
    
}

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartStitch-Edit personal details</title>
  <link rel="stylesheet" href="SignUp.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <form action="" method="post">
    <div class="container">
      <span>EDIT PERSONAL DETAILS</span>
      <div class="Credential">
        <input type="text" placeholder="Enter your Name" name="client_name" value="<?php echo $disp_name;?>" required />

        <input type="number" placeholder="Enter your Age" min="0" max="150" name="age" value="<?php echo $disp_age;?>" required />
        <div class="gender">
          <input type="radio" name="gender" value="Male" 
          
          <?php
          if($disp_gender=="Male")
          {
            echo "checked";
          }
          ?>
          
          />Male <input type="radio" name="gender" value="Female" 
          
          <?php
          if($disp_gender=="Female")
          {
            echo "checked";
          }
          ?>
          
          />Female
        </div>

        <input type="text" placeholder="Enter your Address" name="address" value="<?php echo $disp_addr;?>" required />

        <input type="tel" name="ph_no" pattern="[0-9]{10}" placeholder="Enter your Mobile Number" value="<?php echo $disp_phno;?>" required />

        <input type="email" placeholder="Enter your Email ID" name="email_id" value="<?php echo $disp_email;?>" required />

        
        <div class="button">
          <a href="<?php echo SITEURL;?>client_details.php"><button type="submit" value="Submit">Update</button></a>
        </div>

        
      </div>
    </div>
  </form>
</body>

</html>