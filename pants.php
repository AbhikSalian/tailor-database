<?php
@include 'config.php';
error_reporting(0);
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartSticth-Pants</title>
  <link rel="stylesheet" href="pants.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <?php
  include('header.php');
  include('config.php');
  ?>


  <main>
    <div class="fabric">
      <div class="shirt">
        <img class="shirtimg" src="Images/pantsFabric1.jpg" alt="" height="250px">
        <p>Colour Checks Pants Fabric Black Honey Day</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>545.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>p1.php" method="post">
            <a href="<?php echo SITEURL;?>p1.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>


      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/pantsFabric2.jpg" alt="" height="250px">
        <p>Cotton Colour Checked Grey Suiting Fabric Fun</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>655.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>p2.php" method="post">
            <a href="<?php echo SITEURL;?>p2.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/pantsFabric3.jpg" alt="" height="250px">
        <p>Colour Off White Checks Pants Fabric Honey Day</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>545.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>p3.php" method="post">
            <a href="<?php echo SITEURL;?>p3.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/pantsFabric4.jpg" alt="" height="250px">
        <p>Cotton Colour Checked Pant Fabric Sandal Chronicle</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>625.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>p4.php" method="post">
            <a href="<?php echo SITEURL;?>p4.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/pantsFabric5.jpg" alt="" height="250px">
        <p>Cotton Colour Plain Pants Fabric Navy Style Craft</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>660.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>p5.php" method="post">
            <a href="<?php echo SITEURL;?>p5.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/pantsFabric6.jpg" alt="" height="250px">
        <p>Cotton Colour Checked Pants Fabric Grayish Blue</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>670.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>p6.php" method="post">
            <a href="<?php echo SITEURL;?>p6.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/pantsFabric7.jpg" alt="" height="250px">
        <p>Wrinkle Free Cotton White Plain Pants Fabric Romantic</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>695.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>p7.php" method="post">
            <a href="<?php echo SITEURL;?>p7.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/pantsFabric8.jpg" alt="" height="250px">
        <p>Cotton Colour Checked Pant Fabric Navy ICLE Stretch</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>740.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>p8.php" method="post">
            <a href="<?php echo SITEURL;?>p8.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>


    </div>
  </main>

  <?php
  include('footer.php');
  ?>

</body>

</html>