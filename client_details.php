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
$order_query = "select * from orders where client_id='$cid'";
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$order_result = mysqli_query($conn, $order_query);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script>
        function detailshide() {

            let detailsid = document.getElementById('detailsid');
            let btn1 = document.getElementById('btn1');
            let btn2 = document.getElementById('btn2');
            let btn3 = document.getElementById('btn3');
            let btn4 = document.getElementById('btn4');
            if (detailsid.style.display != 'none') {

                detailsid.style.display = 'none';
                btn1.style.opacity = null;
            } else {
                detailsid.style.display = 'block';
                measureid.style.display = 'none';
                orderid.style.display = 'none';
                btn1.style.opacity = 0.7;
                btn2.style.opacity = null;
                btn3.style.opacity = null;
                btn4.style.opacity = null;
            }
        }

        function measurehide() {
            let measureid = document.getElementById('measureid');


            if (measureid.style.display != 'none') {

                measureid.style.display = 'none';
                btn2.style.opacity = null;


            } else {

                measureid.style.display = 'block';
                detailsid.style.display = 'none';
                orderid.style.display = 'none';

                btn1.style.opacity = null;
                btn2.style.opacity = 0.7;
                btn3.style.opacity = null;
                btn4.style.opacity = null;
            }
        }

        function orderhide() {
            let orderid = document.getElementById('orderid');

            if (orderid.style.display != 'none') {
                orderid.style.display = 'none';
                btn3.style.opacity = null;

            } else {
                orderid.style.display = 'block';
                detailsid.style.display = 'none';
                measureid.style.display = 'none';

                btn1.style.opacity = null;
                btn2.style.opacity = null;
                btn3.style.opacity = 0.7;
                btn4.style.opacity = null;

            }
        }

        

        function hide() {
            let detailsid = document.getElementById('detailsid');


            detailsid.style.display = 'none';
            measureid.style.display = 'none';
            orderid.style.display = 'none';





        }
    </script>
</head>

<body onload="hide()">
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
        <div class="buttons">

            <div class="button"><button id="btn1" onclick="detailshide()">Personal Details</button></div>

            <div class="button"><button id="btn2" onclick="measurehide()">My Measurements</button></div>
            <div class="button"><button id="btn3" onclick="orderhide()">My Orders</button></div>

        </div>

        <div class="details" id="detailsid">
            <h3>Personal Details</h3>
            <p><b>Client ID : </b><span><?php echo $_SESSION['client_id']; ?></span></p>
            <p><b>Name : </b><span><?php echo $_SESSION['client_name']; ?></span></p>
            <p><b>Age : </b><span><?php echo $_SESSION['age']; ?></span></p>
            <p><b>Gender : </b><span><?php echo $_SESSION['gender']; ?></span></p>
            <p><b>Address : </b><span><?php echo $_SESSION['address']; ?></span></p>
            <p><b>Mobile No. : </b><span><?php echo $_SESSION['ph_no']; ?></span></p>
            <p><b>Email ID : </b><span><?php echo $_SESSION['email_id']; ?></span></p>

        </div>
        <!-- <script>
    function load()
    { -->

        <div class="measure" id="measureid">
            <h3>My Measurements</h3>
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
            <div class="edit">
                <a href="measurement.php"><button>Edit Measurements</button></a>
            </div>
        </div>
        <div class="order" id="orderid" >
            <h3>My Orders</h3>
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Shirt type</th>
                    <th>Pant type</th>
                    <th>Order date</th>
                    <th>Delivery date</th>
                    <th>Order Total</th>
                </tr>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($order_result)) {
                    ?>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['shirt_type']; ?></td>
                        <td><?php echo $row['pant_type']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['delivery_date']; ?></td>
                        <td><?php echo $row['order_total']; ?></td>
                </tr>
            <?php
                    }
            ?>

            </table>
        </div>
        <!-- }

</script> -->

    </main>

    <footer>
        <div class="footer">

            <div class="flogo">
                <img class="fimg" src="SmartStitchLogo.png" alt="" height="40px">
            </div>
            <div class="contact">
                <ul>
                    <h4>CONTACT</h4>

                    <li><i class="fa-solid fa-phone" style="color: #2b300d;"></i> 7760447896</li>
                    <li><a href="mailto: akashacharya2003@gmail.com"><i class="fa-solid fa-envelope" style="color: #2b300d;"></i> akashacharya2003@gmail.com</li></a>
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
        <h5 class="Copyright">
            @Copyright 2023 SmartStitch - All Rigths Reserved
        </h5>
    </footer>
</body>

</html>