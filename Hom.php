<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartStitch-Home</title>
  <link rel="stylesheet" href="Hom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <?php
  include('header.php');
  ?>


  <main>
    <img class="welcomeimg" src="Images/Welcome.png" alt="" width="100%">
    <div class="quote">

      <div class="homebutton">
        <h1>We make clothes that suits you</h1>
        <a href="shirts.php"><input type="submit" value="SHIRTS"></a><br>
        <a href="pants.php"><input type="submit" value="PANTS"></a>

      </div>
    </div>

  </main>

  <?php
  include('footer.php');
  ?>

</body>

</html>