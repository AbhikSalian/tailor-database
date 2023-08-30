<?php
@include 'config.php';

session_start();
//echo $_SESSION['client_id'];
if (!isset($_SESSION['client_name'])) {
    header('location:Hom.php');
}
$cid = $_SESSION['client_id'];
$query1 = "select * from shirt where shirt_id in(select shirt_id from link where client_id='$cid')";
$query2 = "select * from pant where pant_id in(select pant_id from link where client_id='$cid')";
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
if ($result1) {
    if ($result1 && mysqli_num_rows($result1) > 0) {
        $client_shirt_data = mysqli_fetch_assoc($result1);
        //$row=mysqli_fetch_array($result);


        $_SESSION['collar'] = $client_shirt_data['collar'];
        $_SESSION['neck_to_shoulder'] = $client_shirt_data['neck_to_shoulder'];
        $_SESSION['sleeve_length'] = $client_shirt_data['sleeve_length'];
        $_SESSION['shoulder_to_shoulder'] = $client_shirt_data['shoulder_to_shoulder'];
        $_SESSION['chest'] = $client_shirt_data['chest'];
        $_SESSION['front_length'] = $client_shirt_data['front_length'];
        $_SESSION['sleeve_cuff'] = $client_shirt_data['sleeve_cuff'];
        $_SESSION['hem'] = $client_shirt_data['hem'];
        $_SESSION['shirt_id'] = $client_shirt_data['shirt_id'];


        //header("Location: client_details.php");
        //echo"<script type='text/javascript'>alert('Login successful')</script>";  
    }
}
if ($result2) {
    if ($result2 && mysqli_num_rows($result2) > 0) {
        $client_pant_data = mysqli_fetch_assoc($result2);
        //$row=mysqli_fetch_array($result);


        $_SESSION['pant_id'] = $client_pant_data['pant_id'];
        $_SESSION['waist'] = $client_pant_data['waist'];
        $_SESSION['front_rise'] = $client_pant_data['front_rise'];
        $_SESSION['hip'] = $client_pant_data['hip'];
        $_SESSION['thigh'] = $client_pant_data['thigh'];
        $_SESSION['length'] = $client_pant_data['length'];
        $_SESSION['inseam'] = $client_pant_data['inseam'];
        $_SESSION['leg_opening'] = $client_pant_data['leg_opening'];
        $_SESSION['knee'] = $client_pant_data['knee'];


        //header("Location: client_details.php");
        //echo"<script type='text/javascript'>alert('Login successful')</script>";  
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-Profile</title>
    <link rel="stylesheet" href="client_details.css">
</head>
<!-- <script>
    function check()
    {
        if(collar||neck_to_shoulder||sleeve_length||shoulder_to_shoulder||chest||front_length||sleeve_cuff||hem == 0)
        laod();
    }

</script> -->

<body onload="check()">
    <header>
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="Home.html"><img src="SmartStitchLogo.png" alt="SmartStitch" height="40px"></a></div>
                <ul class="list">
                    <li><a href="Hom.php">Home</a></li>
                    <li><a href="shirts.php">Shirts</a></li>
                    <li><a href="pants.php">Pants</a></li>
                    <li><a href="aboutUs.php">About</a></li>
                    <li class="home"><a href="client_details.php">Profile</a></li>
                    <a href="logout.php"><button class="signout">Sign Out</button></a>
                </ul>
            </div>
        </nav>
    </header>

    <main>

        <div class="details">
            <h3>Personal Details:</h3>
            <p>ID : <span><?php echo $_SESSION['client_id']; ?></span></p>
            <p>Name : <span><?php echo $_SESSION['client_name']; ?></span></p>
            <p>Age : <span><?php echo $_SESSION['age']; ?></span></p>
            <p>Gender : <span><?php echo $_SESSION['gender']; ?></span></p>
            <p>Address : <span><?php echo $_SESSION['address']; ?></span></p>
            <p>Mobile No. : <span><?php echo $_SESSION['ph_no']; ?></span></p>
            <p>Email ID : <span><?php echo $_SESSION['email_id']; ?></span></p>

        </div>
<!-- <script>
    function load()
    { -->

        <div class="measure">
            <h4>Shirt measurements :</h4>
            <table>
                <tr>
                    <th>Shirt ID</th>
                    <th>Collar</th>
                    <th>Neck to shoulder</th>
                    <th>Sleeve length</th>
                    <th>Shoulder</th>
                    <th>Chest</th>
                    <th>Front length</th>
                    <th>Sleeve cuff</th>
                    <th>Hem</th>
                </tr>
                <tr>
                    <?php
                    $client_shirt_data = mysqli_fetch_assoc($result1);

                    ?>
                    <td><?php echo $_SESSION['shirt_id']; ?></td>
                    <td><?php echo $_SESSION['collar']; ?> inches</td>
                    <td><?php echo $_SESSION['neck_to_shoulder']; ?> inches</td>
                    <td><?php echo $_SESSION['sleeve_length']; ?> inches</td>
                    <td><?php echo $_SESSION['shoulder_to_shoulder']; ?> inches</td>
                    <td><?php echo $_SESSION['chest']; ?> inches</td>
                    <td><?php echo $_SESSION['front_length']; ?> inches</td>
                    <td><?php echo $_SESSION['sleeve_cuff']; ?> inches</td>
                    <td><?php echo $_SESSION['hem']; ?> inches</td>

                </tr>
            </table>

            <h4>Pant measurements:</h4>
            <table>
                <tr>
                    <th>Pant ID</th>
                    <th>Waist</th>
                    <th>Front rise</th>
                    <th>Hip</th>
                    <th>Thigh</th>
                    <th>Length</th>
                    <th>Knee</th>
                    <th>Inseam</th>
                    <th>Leg opening</th>
                </tr>
                <tr>
                    <?php
                    $client_pant_data = mysqli_fetch_assoc($result2);

                    ?>
                    <td><?php echo $_SESSION['pant_id']; ?></td>
                    <td><?php echo $_SESSION['waist']; ?> inches</td>
                    <td><?php echo $_SESSION['front_rise']; ?> inches</td>
                    <td><?php echo $_SESSION['hip']; ?> inches</td>
                    <td><?php echo $_SESSION['thigh']; ?> inches</td>
                    <td><?php echo $_SESSION['length']; ?> inches</td>
                    <td><?php echo $_SESSION['knee']; ?> inches</td>
                    <td><?php echo $_SESSION['inseam']; ?> inches</td>
                    <td><?php echo $_SESSION['leg_opening']; ?> inches</td>

                    <?php

                    ?>
                </tr>
            </table>
        </div>
    <!-- }

</script> -->
        <div class="edit">
            <a href="measurement.php"><button>Edit Measurements</button></a>
        </div>
    </main>

    <footer>
        <div class="footer">
            <img src="logo bg.png" alt="" height="120px">
            <div class="contact">
                <ul>
                    <h4>CONTACT</h4>

                    <li><i class="fa-solid fa-phone" style="color: #42707f;"></i> 7411328238</li>
                    <li><a href="mailto: abhiksalian0728@gmail.com"><i class="fa-solid fa-envelope" style="color: #42707f;"></i> akashacharya2003@gmail.com</li></a>
                </ul>
            </div>
            <div class="business">
                <ul>
                    <h4>BUSINESS HOURS</h4>
                    <li>Monday - Friday : 09:00 AM - 06:00 PM</li>
                    <li>Saturday : 09:00 AM - 04:00 PM</li>
                    <li>Sunday : Closed</li>
                </ul>
            </div>
        </div>
        <!-- <hr /> -->
        <h5 class="copyright">
            @copyright 2023 SmartStitch - All Rigths Reserved
        </h5>
    </footer>
</body>

</html>