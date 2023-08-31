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
            if(password==1234)
            window.open("tailor_interface.php")
        else
    alert ("Incorrect Password");

           

        }
    </script>
</head>
<body>
    <div class="container">
       <h3>Tailor Login</h3>
            <input type="password" id="pass" placeholder="Password">
            <button onclick="verify()" >Login</button>

    </div>
    
    
</body>
</html>