<?php
   @include 'config.php';

   session_start();
   $query_client="SELECT * FROM client";
   $query_shirt="SELECT * FROM shirt";
   $query_pant="SELECT * FROM pant";
   $query_orders="SELECT * FROM orders";
   $result1=mysqli_query($conn,$query_client);
   $result2=mysqli_query($conn,$query_shirt);
   $result3=mysqli_query($conn,$query_pant);
   $result4=mysqli_query($conn,$query_orders);
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-TailorsDatabase</title>
    <link rel="stylesheet" href="tailordatabase.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="tailor_interface.php"><img src="SmartStitchLogo.png" alt="SmartStitch" height="40px"></a></div>
            </div>
            <p class="home">Tailor Interface</p>
            <span><a href="welcomePage.php"><button>Logout</button></a></span>
        </nav>
    </header>
    <main>

        <div class="button"><a href="client_table.php"><button>Client Database</button></a></div>
        <div class="details">

   
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
                    while($row=mysqli_fetch_assoc($result1))
                    {
                ?>
                <td><?php echo $row['client_id'];?></td>
                <td><?php echo $row['client_name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['ph_no'];?></td>
                <td><?php echo $row['email_id'];?></td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        </div>


        <div class="button"><a href="shirt_table.php"><button>Shirt Database</button></a></div>
        <div class="details">
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
                    while($row=mysqli_fetch_assoc($result2))
                    {
                ?>
                <td><?php echo $row['shirt_id'];?></td>
                <td><?php echo $row['client_id'];?></td>
                <td><?php echo $row['collar'];?> inches</td>
                <td><?php echo $row['neck_to_shoulder'];?> inches</td>
                <td><?php echo $row['sleeve_length'];?> inches</td>
                <td><?php echo $row['shoulder_to_shoulder'];?> inches</td>
                <td><?php echo $row['chest'];?> inches</td>
                <td><?php echo $row['front_length'];?> inches</td>
                <td><?php echo $row['sleeve_cuff'];?> inches</td>
                <td><?php echo $row['hem'];?> inches</td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        </div>



        <div class="button"><a href="pant_table.php"><button>Pant Database</button></a></div>
        <div class="details">
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
                    while($row=mysqli_fetch_assoc($result3))
                    {
                ?>
                <td><?php echo $row['pant_id'];?></td>
                <td><?php echo $row['client_id'];?></td>
                <td><?php echo $row['waist'];?> inches</td>
                <td><?php echo $row['front_rise'];?> inches</td>
                <td><?php echo $row['hip'];?> inches</td>
                <td><?php echo $row['thigh'];?> inches</td>
                <td><?php echo $row['length'];?> inches</td>
                <td><?php echo $row['knee'];?> inches</td>
                <td><?php echo $row['inseam'];?> inches</td>
                <td><?php echo $row['leg_opening'];?> inches</td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        </div>



        <div class="button"><a href="orders_table.php"><button>Orders Database</button></a></div><br>
        <div class="details">
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
                    while($row=mysqli_fetch_assoc($result4))
                    {
                ?>
                <td><?php echo $row['order_id'];?></td>
                <td><?php echo $row['client_id'];?></td>
                <td><?php echo $row['shirt_type'];?></td>
                <td><?php echo $row['pant_type'];?></td>
                <td><?php echo $row['order_date'];?></td>
                <td><?php echo $row['delivery_date'];?></td>
                <td><?php echo $row['order_total'];?></td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        </div>



    </main>
</body>

</html>