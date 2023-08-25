<?php
   //@include 'config.php';

   session_start();
   echo $_SESSION['client_id'];
   if(!isset($_SESSION['client_name'])){
    header('location:sign_in.php');
   }
?>
<html>
    <body>
        ID :  <span><?php echo $_SESSION['client_id']; ?></span><br>
        Name :  <span><?php echo $_SESSION['client_name'] ;?></span><br>
        Age :   <span><?php echo $_SESSION['age'] ;?></span><br>
        Gender : <span><?php echo $_SESSION['gender']; ?></span><br>
        Address : <span><?php echo $_SESSION['address']; ?></span><br>
        Mobile No. : <span><?php echo $_SESSION['ph_no']; ?></span><br>
        Email ID : <span><?php echo $_SESSION['email_id']; ?></span><br>
    </body>
</html>
