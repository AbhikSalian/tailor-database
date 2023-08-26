<?php
   //@include 'config.php';

   session_start();
   //echo $_SESSION['client_id'];
   if(!isset($_SESSION['client_name'])){
    header('location:sign_in.php');
   }
?>
<html>
    <body>
        <div>
            <h3>Personal Details:</h3>
            ID :  <span><?php echo $_SESSION['client_id']; ?></span><br>
            Name :  <span><?php echo $_SESSION['client_name'] ;?></span><br>
            Age :   <span><?php echo $_SESSION['age'] ;?></span><br>
            Gender : <span><?php echo $_SESSION['gender']; ?></span><br>
            Address : <span><?php echo $_SESSION['address']; ?></span><br>
            Mobile No. : <span><?php echo $_SESSION['ph_no']; ?></span><br>
            Email ID : <span><?php echo $_SESSION['email_id']; ?></span><br>
            <a href="logout.php"><button class="signout">Sign Out</button></a>
        </div>
        <div>
            <table>
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
            </table>
        </div>
    </body>

</html>
