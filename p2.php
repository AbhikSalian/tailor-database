<?php error_reporting(0); ?><?php


@include 'config.php';

session_start();

$cid=$_SESSION['client_id'];
$pant_type="Cotton Colour Checked Grey Suiting Fabric Fun";
$order_total=655;
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
        //echo "<script type='text/javascript'>alert('Order placed successfully')</script>";
        header("Location: ".SITEURL."Hom.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-Orders</title>
    <link rel="stylesheet" href="s.css">
</head>

<body>
<header>
      <nav class="navbar">
        <div class="navdiv">
          <p class="home">PLACE ORDER</p>
        </div>
      </nav>
    </header>
    <main>
    <div class="order">

    <h3>ORDER DETAILS:</h3>
    <p>Client ID : <?php echo $_SESSION['client_id']; ?></p>
    <p>Client name : <?php echo $_SESSION['client_name']; ?></p>
    <p>Pant type : Cotton Colour Checked Grey Suiting Fabric Fun</p>
    <p>Order value : Rs. 655.00<br>
    <form action="" method="post">
                <label for="delivery_date">Expected delivery date:</label>
                <input class="date" type="date" id="delivery_date" name="delivery_date"><br>
                <p id="alertMessage">NOTE: Please select a date on or after today.</p>
                <div class="submit">
                    <button type="submit" onclick="message()">Place order</button>
                </div>
            </form>
    </div>
    </main>
    <script>
        function message() {
            if (delivery_date.value.length != 0)
                alert("Order placed Successfully");

            if (delivery_date.value.length == 0)
                alert("Please enter Date");
        }
        const delivery_date = document.getElementById('delivery_date');
        const alertMessage = document.getElementById('alertMessage');

        delivery_date.addEventListener('change', function () {
            const selectedDate = new Date(this.value);
            const today = new Date();

            if (selectedDate < today) {
                alertMessage.style.display = 'block';
            
            } else {
                alertMessage.style.display = 'none';
                
            }
        });
    </script>

</body>

</html>