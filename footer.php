<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            color: #2b300d;
            box-sizing: border-box;
        }

        footer {
            height: max-content;
            background-color: #7e876d;
            width: 100%;
            position: relative;
            color: #2b300d;
            line-height: 20px;
            /* align-items: center; */
            border-top: 8px solid #2b300d;
        }

        .footer {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .footer-contact li,
        .footer-business li {
            text-align: left;
        }

        .footer-copyright {
            font-size: 13px;
            text-align: center;
            font-weight: lighter;
        }

        .fa-solid {
            font-size: 13px;
            color: #2b300d;
        }

        h4 {
            margin-bottom: 15px;
            text-align: center;
        }

        .welcomeimg {
            margin: 0px 0px -5px 0px;
            padding: 0%;
        }

        @media only screen and (max-width: 700px) {
            .footer {
                display: flex;
                flex-direction: column;
                height: fit-content;
                text-align: center;
            }

            .footer-logo {
                display: none;
            }

            .footer-contact,
            .footer-business {
                margin: 12px;
            }
        }
    </style>
</head>

<body>
    <footer>
        <div class="footer">
            <div class="footer-logo">
                <img src="SmartStitchLogo.png" alt="" height="40px">
            </div>
            <div class="footer-contact">
                <ul>
                    <h4>CONTACT</h4>

                    <li><i class="fa-solid fa-phone" style="color: #2b300d;"></i> 7760447896</li>
                    <li><a href="mailto: akashacharya2003@gmail.com"><i class="fa-solid fa-envelope" style="color: #2b300d;"></i> akashacharya2003@gmail.com</li></a>
                </ul>
            </div>
            <div class="footer-business">
                <ul>
                    <h4>BUSINESS HOURS</h4>
                    <li>Monday - Friday : 09:00 AM - 06:00 PM</li>
                    <li>Saturday : 09:00 AM - 04:00 PM</li>
                    <li>Sunday : Closed</li>
                </ul>
            </div>
        </div>
        <!-- <hr /> -->
        <p class="footer-copyright">
            @Copyright 2023 SmartStitch - All Rigths Reserved
        </p>
    </footer>
</body>

</html>