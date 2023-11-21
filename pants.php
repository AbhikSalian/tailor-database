<?php
@include 'config.php';
error_reporting(0);
session_start();
echo $pant_type[2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartSticth-Pants</title>
  <link rel="stylesheet" href="pant-shirt.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <script>

  </script>
</head>

<body>
  <?php
  include('header.php');

  ?>

  <main>
    <?php
    // Function to generate HTML for each pant fabric item
    function generatePantsFabricItem($imgSrc, $description, $price, $pageUrl, $index)
    {
      $html = '
    <div class="fabric-container">
        <div>
            <img class="fabric-img" src="' . $imgSrc . '" alt="" height="250px">
        </div>
        <div class="fabric-info">
            <p>' . $description . '</p>
            <div class="placeorder">
                <div>
                    <p id="price"><i class="fa-solid fa-indian-rupee-sign" style="color: rgb(205, 35, 35);"></i>
                        <Rs class="money"></Rs>' . $price . '
                    </p>
                </div>
                <div>
                    <form action="' . SITEURL . $pageUrl . '" method="post">
                        <a onclick="buttonclick(' . $index . ')" href="' . SITEURL . $pageUrl . '">
                            <button type="submit"><i class="fa-solid fa-cart-shopping" style="color: #2b300d;"></i></button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>';
      // Output HTML for the current fabric item
      echo $html;
    }

    // Example usage:
    echo '<div class="main-div"><div class="secondary-div">';

    // Call the function for each pant fabric item
    generatePantsFabricItem("Images/pantsFabric1.jpg", "Colour Checks Pants Fabric Black Honey Day", "545.00", "p.php", 0);
    generatePantsFabricItem("Images/pantsFabric2.jpg", "Cotton Colour Checked Grey Suiting Fabric Fun", "655.00", "p.php", 1);
    generatePantsFabricItem("Images/pantsFabric3.jpg", "Colour Off White Checks Pants Fabric Honey Day", "545.00", "p.php", 2);
    generatePantsFabricItem("Images/pantsFabric4.jpg", "Cotton Colour Checked Pant Fabric Sandal Chronicle", "625.00", "p.php", 3);
    generatePantsFabricItem("Images/pantsFabric5.jpg", "Cotton Colour Plain Pants Fabric Navy Style Craft", "660.00", "p.php", 4);
    generatePantsFabricItem("Images/pantsFabric6.jpg", "Cotton Colour Checked Pants Fabric Grayish Blue", "670.00", "p.php", 5);
    generatePantsFabricItem("Images/pantsFabric7.jpg", "Wrinkle Free Cotton White Plain Pants Fabric Romantic", "695.00", "p.php", 6);
    generatePantsFabricItem("Images/pantsFabric8.jpg", "Cotton Colour Checked Pant Fabric Navy ICLE Stretch", "740.00", "p.php", 7);
    // Add more calls to generatePantsFabricItem as needed for each fabric item

    echo '</div></div>';
    ?>

    <script>
      function buttonclick(index) {
        alert(index);
        // Additional logic for button click handling
      }
    </script>

  </main>
  <?php
  include('footer.php');
  ?>

</body>

</html>