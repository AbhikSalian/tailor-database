<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            box-sizing: border-box;
            list-style: none;

        }

        .nav-div {
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #7e876d;
            border-bottom: 8px solid #2b300d;
        }

        .nav-logo {

            display: flex;
            justify-content: center;
            width: 30%;
            transition: 0.3s;
        }

        .nav-list {
            width: 40%;
        }

        .list-ul {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .list-ul li a {
            transition: 0.3s;
            font-size: 18px;
            color: #2b300d;
        }

        .signout {
            padding: 8px 15px 8px 15px;

            border-radius: 20px;
            border: none;
            background-color: #2b300d;
            color: #e0e3ce;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .signout:hover {
            box-shadow: 0px 0px 0px 1px #2b300d;
            opacity: 0.7;
        }

        .list-ul li a:hover {
            opacity: 0.7;
        }

        .nav-logo:hover {
            opacity: 0.5;
        }
        .nav-menu{
            display: none;
        }

        @media only screen and (max-width: 700px) {
            header{
                width: 100%;
            }
            .nav-div {
                width: 100%;
                display: flex;
                justify-content: space-between;
            }

            .nav-logo {
            }

            .nav-list {
                display: none;
            }
            .nav-menu{
                display: flex;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="nav-div">
            <div class="nav-logo">
                <a href="Home.html">
                    <img src="SmartStitchLogo.png" alt="SmartStitch" height="40px">
                </a>
            </div>
            <div class="nav-menu">
                <i class="fa-solid fa-bars" style="color: #4d3e3e;"></i>
            </div>
            <div class="nav-list">
                <ul class="list-ul">
                    <li><a href="Hom.php">Home</a></li>
                    <li><a href="shirts.php">Shirts</a></li>
                    <li><a href="pants.php">Pants</a></li>
                    <li><a href="aboutUs.php">About</a></li>
                    <li><a href="client_details.php">Profile</a></li>
                    <li> <a href="logout.php"><button class="signout">Sign Out</button></a></li>
                </ul>
            </div>
        </div>
    </header>

</body>

</html>