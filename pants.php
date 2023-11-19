<?php
@include 'config.php';
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartSticth-Pants</title>
  <link rel="stylesheet" href="pant-shirt.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <?php
  include('header.php');
  include('config.php');
  ?>

  <main>
    <!-- <div class="main-heading">
      <p>Pant Fabrics</p>
    </div> -->
    <?php

    define('SITEURL', 'your_site_url_here'); // Replace 'your_site_url_here' with the actual URL

    function generatePantsFabricItem($imgSrc, $description, $price, $pageUrl)
    {
      $html = '
    <div class="fabric-container">
    <div>
        <img class="fabric-img" src="' . $imgSrc . '" alt="" height="250px"></div>
        <div class="fabric-info">
        <p>' . $description . '</p>
        
        <div class="placeorder">
        <div>
        <p id="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(166, 50, 50);"></i>
        <Rs class="money"></Rs>' . $price . '
    </p></div>
    <div>
            <form action="' . SITEURL . $pageUrl . '" method="post">
                <a href="' . SITEURL . $pageUrl . '"><button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #2b300d;"></i></button></a>
            </form>
            </div>
        </div>
        </div>

    </div>';

      return $html;
    }

    // Example usage:
    echo '<div class="main-div"><div class="secondary-div">';
    echo generatePantsFabricItem("Images/pantsFabric1.jpg", "Colour Checks Pants Fabric Black Honey Day", "545.00", "p1.php");
    echo generatePantsFabricItem("Images/pantsFabric2.jpg", "Cotton Colour Checked Grey Suiting Fabric Fun", "655.00", "p2.php");
    echo generatePantsFabricItem("Images/pantsFabric3.jpg", "Colour Off White Checks Pants Fabric Honey Day", "545.00", "p3.php");
    echo generatePantsFabricItem("Images/pantsFabric4.jpg", "Cotton Colour Checked Pant Fabric Sandal Chronicle", "625.00", "p4.php");
    echo generatePantsFabricItem("Images/pantsFabric5.jpg", "Cotton Colour Plain Pants Fabric Navy Style Craft", "660.00", "p5.php");
    echo generatePantsFabricItem("Images/pantsFabric6.jpg", "Cotton Colour Checked Pants Fabric Grayish Blue", "670.00", "p6.php");
    echo generatePantsFabricItem("Images/pantsFabric7.jpg", "Wrinkle Free Cotton White Plain Pants Fabric Romantic", "695.00", "p7.php");
    echo generatePantsFabricItem("Images/pantsFabric8.jpg", "Cotton Colour Checked Pant Fabric Navy ICLE Stretch", "740.00", "p8.php");
    echo '</div></div>';

    ?>


  </main>

  <?php
  include('footer.php');
  ?>

</body>

</html>