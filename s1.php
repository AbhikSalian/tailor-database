<?php

@include 'config.php';

session_start();
?><html>
    <h4>Order Details:</h4>
    Client ID: <?php echo $_SESSION['client_id']; ?><br>
    Client name: <?php echo $_SESSION['client_name']; ?><br>
    Shirt type : Cotton Colour Plain Shirt Fabric Green<br>
    Order value : Rs. 360<br>
    <form action="" method="post">
    <label for="delivery_date">Expected delivery date:</label>
<input type="date" id="delivery_date" name="delivery_date">
        <button type="submit">Place order</button>
    </form>
</html><?php
$cid=$_SESSION['client_id'];
$shirt_type="Cotton Colour Plain Shirt Fabric Green";
$order_total=360;
$delivery_date=$_POST['delivery_date'];
$order_insert="INSERT INTO orders(client_id,shirt_type,delivery_date,order_total)
VALUES('$cid','$shirt_type','$delivery_date','$order_total'
?>