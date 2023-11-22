<?php
include('config.php');
error_reporting(0);
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartStitch-Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      text-decoration: none;
      margin: 0;
    }

    body {
      background-color: #e0e3ce;
    }

    .homebutton input {
      width: 150px;
      padding: 15px;
      border: none;
      border-radius: 30px;
      margin-top: 20px;
      background-color: #2b300d;
      color: #e0e3ce;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .homebutton input:hover {
      box-shadow: 0px 0px 0px 1px #7e876d;
      opacity: 0.7;
    }

    .quote {
      position: absolute;
      right: 143px;
      top: 240px;
      font-size: larger;
      font-weight: bolder;
      width: 287px;
      font-size: 20px;
      text-transform: uppercase;
      text-align: center;
      color: #7e876d;
    }

    @media only screen and (max-width: 700px) {
      
    }
  </style>

</head>

<body>
  <?php
  include('header.php');
  
  ?>

  <main>
  <!-- <video autoplay muted loop id="myVideo" width="100%">
      <source src="Images/Cream and Green Modern Coming Soon Mobile Video.mp4" type="video/mp4">
      
    </video> -->
  <video class="welcomeing" autoplay muted width="100%">
      <source src="Images/Brown Simple Animated Massage & Spa Logo Intro Video.mp4" type="video/mp4">
      
    </video>
    
  </main>

  <?php
  include('footer.php');
  ?>
</body>

</html>