<?php
include('config.php');
error_reporting(0);
?>
<?php
 if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $addr=$_POST['address'];
    $phno=$_POST['ph_no'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $sql="INSERT INTO client (client_name,age,gender,address,ph_no,email_id,password)VALUES('$name','$age','$gender','$addr','$phno','$email','$pwd')";
    mysqli_query($conn,$sql);
    header('Location: https://smartstitchh.000webhostapp.com/sign_in.php');
    exit;
 }
?>
<html>
    <form action="" method="post">
        Name <input type = "text" name="name"><br>
        Age <input type = "text" name="age"><br>
        Gender <input type = "text" name="gender"><br>
        Address <input type = "text" name="address"><br>
        Ph No <input type = "text" name="ph_no"><br>
        Email <input type = "text" name="email"><br>
        Password <input type = "password" name="password"><br>
        <input type="submit" name="submit">
    </form>
</html>
