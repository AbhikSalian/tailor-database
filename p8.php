<?php error_reporting(0); ?><?php


@include 'config.php';

session_start();

$cid=$_SESSION['client_id'];
$pant_type="Cotton Colour Checked Pant Fabric Navy ICLE Stretch";
$order_total=740;
$delivery_date=$_POST['delivery_date'];
if(!empty($cid) and !empty($delivery_date))
{
    if(mysqli_connect_errno())
                {
                    die('Connect Error : '.mysqli_connect_error());
                }
    else
    {  
        $order_insert="INSERT INTO orders(client_id,pant_type,delivery_date,order_total)
        VALUES('$cid','$pant_type','$delivery_date','$order_total')";
        $stmt=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $order_insert)) {
          die(mysqli_error($conn));
        }
        mysqli_stmt_execute($stmt);
        echo "<script type='text/javascript'>alert('Order placed successfully')</script>";
        header("Location: Hom.php");
    }
}
?>
<html>
    <h4>Order Details:</h4>
    Client ID: <?php echo $_SESSION['client_id']; ?><br>
    Client name: <?php echo $_SESSION['client_name']; ?><br>
    Pant type : Cotton Colour Checked Pant Fabric Navy ICLE Stretch<br>
    Order value : Rs. 740.00<br>
    <form action="" method="post">
    <label for="delivery_date">Expected delivery date:</label>
<input type="date" id="delivery_date" name="delivery_date">
        <button type="submit">Place order</button>
    </form>
</html>