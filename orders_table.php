<?php
   @include 'config.php';

   session_start();
   $query="SELECT * FROM orders";
   $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-tailor-OrdersDatabase</title>
    
    <link rel="stylesheet" href="tailordatabase.css">
    
</head>
<body>
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
                    while($row=mysqli_fetch_assoc($result))
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
    </body>
</html>