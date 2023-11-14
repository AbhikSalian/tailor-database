<?php
@include 'config.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartSticth-Shirts</title>
  <link rel="stylesheet" href="shirts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <?php
  include('header.php');
  ?>


  <main>
    <div class="fabric">
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric1.jpg" alt="" height="250px">
        <p>Cotton Colour Plain Shirt Fabric Green</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>360.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>s1.php" method="post">
            <a href="<?php echo SITEURL;?>s1.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>


      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric2.jpg" alt="" height="250px">
        <p>Cotton Grey Colour Plain Shirt Fabric Candy Colour</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>415.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>s2.php" method="post">
            <a href="<?php echo SITEURL;?>s2.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric3.jpg" alt="" height="250px">
        <p>Cotton Striped Shirt Fabric Blue Candy Colour</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>415.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>s3.php" method="post">
            <a href="<?php echo SITEURL;?>s3.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric4.jpg" alt="" height="250px">
        <p>Cotton Mixed Plain Shirt Fabric Black Flat</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>425.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>s4.php" method="post">
            <a href="<?php echo SITEURL;?>s4.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric5.jpg" alt="" height="250px">
        <p>Cotton Colour Checked Shirt Fabric Sky Blue Galaxy Art</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>445.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>s5.php" method="post">
            <a href="<?php echo SITEURL;?>s5.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric6.jpg" alt="" height="250px">
        <p>Cotton Colour Plain Shirt Fabric Grey Galaxy Art</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>445.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>s6.php" method="post">
            <a href="<?php echo SITEURL;?>s6.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric7.jpg" alt="" height="250px">
        <p>Cotton Grey with White Checked Shirt Fabric Galaxy </p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>445.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>s7.php" method="post">
            <a href="<?php echo SITEURL;?>s7.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric8.jpg" alt="" height="250px">
        <p>Cotton White Checked Shirt Fabric Galaxy Art</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #2b300d;"></i>
          <Rs class="money"></Rs>445.00
        </p>
        <div class="placeorder">
          <form action="<?php echo SITEURL;?>s8.php" method="post">
            <a href="<?php echo SITEURL;?>s8.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #e0e3ce;"></i> Place Order</button></a>
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