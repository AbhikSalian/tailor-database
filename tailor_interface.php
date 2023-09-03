<?php
@include 'config.php';

session_start();
$query_client = "SELECT * FROM client";
$query_shirt = "SELECT * FROM shirt";
$query_pant = "SELECT * FROM pant";
$query_orders = "SELECT * FROM orders";
$result1 = mysqli_query($conn, $query_client);
$result2 = mysqli_query($conn, $query_shirt);
$result3 = mysqli_query($conn, $query_pant);
$result4 = mysqli_query($conn, $query_orders);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-TailorsDatabase</title>
    <link rel="stylesheet" href="tailordatabase.css">

    <script>
        function clienthide() {

            let clientdata = document.getElementById('clientdata');
            let btn1 = document.getElementById('btn1');
            let btn2 = document.getElementById('btn2');
            let btn3 = document.getElementById('btn3');
            let btn4 = document.getElementById('btn4');
            if (clientdata.style.display != 'none') {

                clientdata.style.display = 'none';
                btn1.style.opacity = null;
            } else {
                clientdata.style.display = 'block';
                shirtdata.style.display = 'none';
                pantdata.style.display = 'none';
                orderdata.style.display = 'none';
                btn1.style.opacity = 0.7;
                btn2.style.opacity = null;
                btn3.style.opacity = null;
                btn4.style.opacity = null;
            }
        }

        function shirthide() {
            let shirtdata = document.getElementById('shirtdata');


            if (shirtdata.style.display != 'none') {

                shirtdata.style.display = 'none';
                btn2.style.opacity = null;


            } else {

                shirtdata.style.display = 'block';
                clientdata.style.display = 'none';
                pantdata.style.display = 'none';
                orderdata.style.display = 'none';

                btn1.style.opacity = null;
                btn2.style.opacity = 0.7;
                btn3.style.opacity = null;
                btn4.style.opacity = null;
            }
        }

        function panthide() {
            let pantdata = document.getElementById('pantdata');

            if (pantdata.style.display != 'none') {
                pantdata.style.display = 'none';
                btn3.style.opacity = null;

            } else {
                pantdata.style.display = 'block';
                orderdata.style.display = 'none';
                clientdata.style.display = 'none';
                shirtdata.style.display = 'none';

                btn1.style.opacity = null;
                btn2.style.opacity = null;
                btn3.style.opacity = 0.7;
                btn4.style.opacity = null;

            }
        }

        function orderhide() {

            let orderdata = document.getElementById('orderdata');
            if (orderdata.style.display != 'none') {
                orderdata.style.display = 'none';

                btn4.style.opacity = null;
            } else {
                orderdata.style.display = 'block';
                pantdata.style.display = 'none';
                clientdata.style.display = 'none';
                shirtdata.style.display = 'none';

                btn4.style.opacity = 0.7;
                btn1.style.opacity = null;  
                btn2.style.opacity = null;
                btn3.style.opacity = null;

            }

        }

        function hide() {
            let clientdata = document.getElementById('clientdata');


            clientdata.style.display = 'none';
            shirtdata.style.display = 'none';
            pantdata.style.display = 'none';

            orderdata.style.display = 'none';




        }
    </script>

</head>

<body onload="hide()">
    <header>
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="tailor_interface.php"><img src="SmartStitchLogo.png" alt="SmartStitch" height="40px"></a></div>
            </div>
            <p class="home">TAILOR DATABASE</p>
            <span><a href="welcomePage.php"><button>Logout</button></a></span>
        </nav>
    </header>
    <main>
        <div class="main">
            <div class="buttons">

                <div class="button"><button id="btn1" onclick="clienthide()">Client Database</button></div>

                <div class="button"><button id="btn2" onclick="shirthide()">Shirt Database</button></div>
                <div class="button"><button id="btn3" onclick="panthide()">Pant Database</button></div>

                <div class="button"><button id="btn4" onclick="orderhide()">Orders Database</button></div><br>
            </div>

            <div class="data">

                <div class="details" id="clientdata">
                    <h3>Clients database:</h3>
                    <table>
                        <tr>
                            <th>Client ID</th>
                            <th>Client Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Email ID</th>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result1)) {
                            ?>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><?php echo $row['client_name']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['ph_no']; ?></td>
                                <td><?php echo $row['email_id']; ?></td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>




                <div class="details" id="shirtdata">
                    <h3>Shirts database</h3>
                    <table>
                        <tr>
                            <th>Shirt ID</th>
                            <th>Client ID</th>
                            <th>Collar</th>
                            <th>Neck to shoulder</th>
                            <th>Sleeve length</th>
                            <th>Shoulder to shoulder</th>
                            <th>Chest</th>
                            <th>Front length</th>
                            <th>Sleeve cuff</th>
                            <th>Hem</th>

                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result2)) {
                            ?>
                                <td><?php echo $row['shirt_id']; ?></td>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><?php echo $row['collar']; ?> inches</td>
                                <td><?php echo $row['neck_to_shoulder']; ?> inches</td>
                                <td><?php echo $row['sleeve_length']; ?> inches</td>
                                <td><?php echo $row['shoulder_to_shoulder']; ?> inches</td>
                                <td><?php echo $row['chest']; ?> inches</td>
                                <td><?php echo $row['front_length']; ?> inches</td>
                                <td><?php echo $row['sleeve_cuff']; ?> inches</td>
                                <td><?php echo $row['hem']; ?> inches</td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>




                <div class="details" id="pantdata">
                    <h3>Pants database</h3>
                    <table>
                        <tr>
                            <th>Pant ID</th>
                            <th>Client ID</th>
                            <th>Waist</th>
                            <th>Front Rise</th>
                            <th>Hip</th>
                            <th>Thigh</th>
                            <th>Length</th>
                            <th>Knee</th>
                            <th>Inseam</th>
                            <th>Leg opening</th>

                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result3)) {
                            ?>
                                <td><?php echo $row['pant_id']; ?></td>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><?php echo $row['waist']; ?> inches</td>
                                <td><?php echo $row['front_rise']; ?> inches</td>
                                <td><?php echo $row['hip']; ?> inches</td>
                                <td><?php echo $row['thigh']; ?> inches</td>
                                <td><?php echo $row['length']; ?> inches</td>
                                <td><?php echo $row['knee']; ?> inches</td>
                                <td><?php echo $row['inseam']; ?> inches</td>
                                <td><?php echo $row['leg_opening']; ?> inches</td>
                        </tr>
                    <?php
                            }
                    ?>

                    </table>
                </div>




                <div class="details" id="orderdata">
                    <h3>Orders database:</h3>
                    <table>
                        <tr>
                            <th>Order ID</th>
                            <th>Client ID</th>
                            <th>Shirt type</th>
                            <th>Pant type</th>
                            <th>Order date</th>
                            <th>Delivery date</th>
                            <th>Order Total</th>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result4)) {
                            ?>
                                <td><?php echo $row['order_id']; ?></td>
                                <td><?php echo $row['client_id']; ?></td>
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

            </div>


        </div>

    </main>
</body>

</html>