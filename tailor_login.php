<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-TailorLoginPassword</title>
    <link rel="stylesheet" href="tailor_login.css">
    <script>
        function verify()
        {
            var password=document.getElementById('pass').value;
            if(password=="tailorLogin")
            
        }
    </script>
</head>
<body>
    <div class="container">
       <h3>Enter password:</h3>
            <input type="password" id="pass" placeholder="Password">
            <a href="tailor_interface.php"><button onclick="verify()">Tailor Login</button></a>

    </div>
    
    
</body>
</html>