<?php
@include 'config.php';

session_start();
//echo $_SESSION['client_id'];
if (!isset($_SESSION['client_name'])) {
    header('location: ' . SITEURL . 'Hom.php');
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

        $_SESSION['collar'] = $client_shirt_data['collar'];
        $_SESSION['neck_to_shoulder'] = $client_shirt_data['neck_to_shoulder'];
        $_SESSION['sleeve_length'] = $client_shirt_data['sleeve_length'];
        $_SESSION['shoulder_to_shoulder'] = $client_shirt_data['shoulder_to_shoulder'];
        $_SESSION['chest'] = $client_shirt_data['chest'];
        $_SESSION['front_length'] = $client_shirt_data['front_length'];
        $_SESSION['sleeve_cuff'] = $client_shirt_data['sleeve_cuff'];
        $_SESSION['hem'] = $client_shirt_data['hem'];
        $_SESSION['shirt_id'] = $client_shirt_data['shirt_id'];
    }
}
if ($result2) {
    if ($result2 && mysqli_num_rows($result2) > 0) {
        $client_pant_data = mysqli_fetch_assoc($result2);
        $_SESSION['pant_id'] = $client_pant_data['pant_id'];
        $_SESSION['waist'] = $client_pant_data['waist'];
        $_SESSION['front_rise'] = $client_pant_data['front_rise'];
        $_SESSION['hip'] = $client_pant_data['hip'];
        $_SESSION['thigh'] = $client_pant_data['thigh'];
        $_SESSION['length'] = $client_pant_data['length'];
        $_SESSION['inseam'] = $client_pant_data['inseam'];
        $_SESSION['leg_opening'] = $client_pant_data['leg_opening'];
        $_SESSION['knee'] = $client_pant_data['knee'];
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
        function hideElement(element, activeButton) {
            const elements = ['detailsid', 'measureid', 'orderid'];
            const buttons = ['btn1', 'btn2', 'btn3', 'btn4'];

            elements.forEach(el => {
                const currentElement = document.getElementById(el);
                if (el === element) {
                    currentElement.style.display = 'block';
                } else {
                    currentElement.style.display = 'none';
                }
            });

            buttons.forEach(btn => {
                const currentButton = document.getElementById(btn);
                if (btn === activeButton) {
                    currentButton.style.borderBottom = '2px solid #2b300d';
                } else {
                    currentButton.style.borderBottom = null;
                }
            });
        }

        function detailshide() {
            hideElement('detailsid', 'btn1');
        }

        function measurehide() {
            hideElement('measureid', 'btn2');
        }

        function orderhide() {
            hideElement('orderid', 'btn3');
        }

        function hide() {
            btn1.style.borderBottom = '2px solid #2b300d';
            measureid.style.display = 'none';
            orderid.style.display = 'none';
        }
    </script>
</head>

<body onload="hide()">
    <?php
    include('header.php');
    ?>
    <main>
        <div class="main">

            <div class="main-nav">
                <div class="nav-items">
                    <p id="btn1" onclick="detailshide()">Personal Details</p>
                    <p id="btn2" onclick="measurehide()">Measurements</p>
                    <p id="btn3" onclick="orderhide()">Orders</p>
                </div>
            </div>

            <div class="main-info">
                <div class="details" id="detailsid">
                    <h3>Personal Details</h3>
                    <table>
                        <tr>
                            <th>Client ID</th>
                            <th>:</th>
                            <td><?php echo $_SESSION['client_id']; ?></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>:</th>
                            <td><?php echo $_SESSION['client_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <th>:</th>
                            <td><?php echo $_SESSION['age']; ?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <th>:</th>
                            <td><?php echo $_SESSION['gender']; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <th>:</th>
                            <td><?php echo $_SESSION['address']; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile No.</th>
                            <th>:</th>
                            <td><?php echo $_SESSION['ph_no']; ?></td>
                        </tr>
                        <tr>
                            <th>Email ID</th>
                            <th>:</th>
                            <td><?php echo $_SESSION['email_id']; ?></td>
                        </tr>
                    </table>

                    <div class="edit-icon">
                        <a href="<?php echo SITEURL; ?>client_edit.php?id=<?php echo $cid; ?>"><button><i class="fa-solid fa-pen-to-square" style="color: #e0e3ce;"></i></button></a>
                    </div>
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
                </div>

                <div class="measurement" id="measureid">
                    <h3>Measurements</h3>
                    <div class="measurement-details">

                        <div class="measure-shirts">

                            <table>
                                <?php
                                $client_shirt_data = mysqli_fetch_assoc($result1);

                                ?>
                                <tr>
                                    <th>Shirt ID</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['shirt_id']; ?></td>

                                </tr>
                                <tr>
                                    <th>Collar</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['collar']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Neck to shoulder</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['neck_to_shoulder']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Sleeve length</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['sleeve_length']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Shoulder</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['shoulder_to_shoulder']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Chest</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['chest']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Front length</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['front_length']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Sleeve cuff</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['sleeve_cuff']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Hem</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['hem']; ?> inches</td>
                                </tr>
                            </table>
                        </div>
                        <div class="measure-pants">

                            <table>
                                <?php
                                $client_pant_data = mysqli_fetch_assoc($result2);

                                ?>
                                <tr>
                                    <th>Pant ID</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['pant_id']; ?></td>

                                </tr>
                                <tr>
                                    <th>Waist</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['waist']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Front rise</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['front_rise']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Hip</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['hip']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Thigh</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['thigh']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Length</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['length']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Knee</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['knee']; ?> inches</td>

                                </tr>
                                <tr>
                                    <th>Inseam</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['inseam']; ?> inches</td>
                                </tr>
                                <tr>
                                    <th>Leg opening</th>
                                    <th>:</th>
                                    <td><?php echo $_SESSION['leg_opening']; ?> inches</td>

                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="edit-icon">
                        <a href="<?php echo SITEURL; ?>measurement.php?id=<?php echo $cid; ?>"><button><i class="fa-solid fa-pen-to-square" style="color: #e0e3ce;"></i></button></a>
                    </div>
                </div>
                <div class="order" id="orderid">
                    <h3>Orders</h3>
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
            </div>

        </div>
    </main>

    <?php
    include('footer.php');
    ?>
</body>

</html>