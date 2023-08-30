<?php
@include 'config.php';

session_start();
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartSticth-Shirts</title>
  <link rel="stylesheet" href="shirts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="navdiv">
        <div class="logo"><a href="Hom.php"><img src="SmartStitchLogo.png" alt="SmartStitch" height="40px"></a></div>
        <ul class="list">
          <li><a href="Hom.php">Home</a></li>
          <li class="home"><a href="shirts.php">Shirts</a></li>
          <li><a href="pants.php">Pants</a></li>
          <li><a href="aboutUs.php">About</a></li>
          <li><a href="client_details.php">Profile</a></li>
          <a href="logout.php"><button class="signout">Sign Out</button></a>
        </ul>
      </div>
    </nav>
  </header>


  <main>
    <div class="fabric">
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric1.jpg" alt="" height="250px">
        <p>Cotton Colour Plain Shirt Fabric Green</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #fff6e5;"></i>
          <Rs class="money"></Rs>360.00
        </p>
        <div class="placeorder">
          <form action="s1.php" method="post">
          <a href="s1.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #062f3d;"></i> Place Order</button></a>
          </form>
        </div>


      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric2.jpg" alt="" height="250px">
        <p>Cotton Grey Colour Plain Shirt Fabric Candy Colour</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #fff6e5;"></i>
          <Rs class="money"></Rs>415.00
        </p>
        <div class="placeorder">
        <form action="s2.php" method="post">
          <a href="s2.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #062f3d;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric3.jpg" alt="" height="250px">
        <p>Cotton Striped Shirt Fabric Blue Candy Colour</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #fff6e5;"></i>
          <Rs class="money"></Rs>415.00
        </p>
        <div class="placeorder">
        <form action="s3.php" method="post">
          <a href="s3.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #062f3d;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric4.jpg" alt="" height="250px">
        <p>Cotton Mixed Plain Shirt Fabric Black Flat</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #fff6e5;"></i>
          <Rs class="money"></Rs>425.00
        </p>
        <div class="placeorder">
        <form action="s4.php" method="post">
          <a href="s4.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #062f3d;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric5.jpg" alt="" height="250px">
        <p>Cotton Colour Checked Shirt Fabric Sky Blue Galaxy Art</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #fff6e5;"></i>
          <Rs class="money"></Rs>445.00
        </p>
        <div class="placeorder">
        <form action="s5.php" method="post">
          <a href="s5.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #062f3d;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric6.jpg" alt="" height="250px">
        <p>Cotton Colour Plain Shirt Fabric Grey Galaxy Art</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #fff6e5;"></i>
          <Rs class="money"></Rs>445.00
        </p>
        <div class="placeorder">
        <form action="s6.php" method="post">
          <a href="s6.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #062f3d;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric7.jpg" alt="" height="250px">
        <p>Cotton Grey with White Checked Shirt Fabric Galaxy </p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #fff6e5;"></i>
          <Rs class="money"></Rs>445.00
        </p>
        <div class="placeorder">
        <form action="s7.php" method="post">
          <a href="s7.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #062f3d;"></i> Place Order</button></a>
          </form>
        </div>

      </div>
      <div class="shirt">
        <img class="shirtimg" src="Images/shirtFabric8.jpg" alt="" height="250px">
        <p>Cotton White Checked Shirt Fabric Galaxy Art</p>
        <p><i class="fa-solid fa-indian-rupee-sign" style="color: #fff6e5;"></i>
          <Rs class="money"></Rs>445.00
        </p>
        <div class="placeorder">
        <form action="s8.php" method="post">
          <a href="s8.php"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #062f3d;"></i> Place Order</button></a>
          </form>
        </div>

      </div>


    </div>
  </main>

  <footer>
    <div class="footer">
      <img src="logo bg.png" alt="" height="120px">
      <div class="contact">
        <ul>
          <h4>CONTACT</h4>

          <li><i class="fa-solid fa-phone" style="color: #42707f;"></i> 7760447896</li>
          <li><a href="mailto: akashacharya2003@gmail.com"><i class="fa-solid fa-envelope" style="color: #42707f;"></i> akashacharya2003@gmail.com</li></a>
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
    <h5 class="copyright">
      @copyright 2023 SmartStitch - All Rigths Reserved
    </h5>
  </footer>

</body>

</html>