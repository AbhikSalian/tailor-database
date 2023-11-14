<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width= , initial-scale=1.0" />
  <title>SmartStitch-Welcome</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="navdiv">
        <div class="logo">
          <a href="index.php"><img src="SmartStitchLogo.png" alt="SmartStitch" height="40px" /></a>
        </div>
        <div class="sign">
          <a href="tailor_login.php"><button class="b1">Tailor Login</button></a>
          <a href="sign_up.php"><button class="b1">Sign Up</button></a>
          <a href="sign_in.php"><button class="b2">Sign In</button></a>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <img class="welcomeimg" src="welcome.jpg" alt="" width="100%">
    <div class="quote">
      <h1>We Visit you instead of making you Travel</h1>
    </div>

  </main>
  <?php
  include('footer.php');
  ?>

</body>

</html>