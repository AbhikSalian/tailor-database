<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SmartSticth-Measurement</title>
  </head>
  <body>
    <form action=" " method="post">
        <div class="shirt">
        <h4>Shirt</h4>
        <ol>
            <li>
            <label for="">Collar: </label
            ><input type="number" placeholder="" id="" />
            </li>
            <li>
            <label for="">Neck to Shoulder: </label
            ><input type="number" placeholder="" id="" />
            </li>
            <li>
            <label for="">Sleeve Length: </label
            ><input type="number" placeholder="" id="" />
            </li>
            <li>
            <label for="">Shoulder to Shoulder: </label
            ><input type="number" placeholder="" id="" />
            </li>
            <li>
            <label for="">Chest: </label
            ><input type="number" placeholder="" id="" />
            </li>
            <li>
            <label for="">Front Length: </label
            ><input type="number" placeholder="" id="" />
            </li>
            <li>
            <label for="">Sleeve cuff: </label
            ><input type="number" placeholder="" id="" />
            </li>
            <li>
            <label for="">Hem: </label
            ><input type="number" placeholder="" id="" />
            </li>
        </ol>
        <img src="Images/Shirt.png" height="200px" alt="" />
        </div>
    
      <div class="pant">
        <h4>Pant</h4>
        <ol>
          <li><input type="number" placeholder="Waist" id="" /></li>
          <li><input type="number" placeholder="Front Rise" id="" /></li>
          <li><input type="number" placeholder="Hip" id="" /></li>
          <li><input type="number" placeholder="Thigh" id="" /></li>
          <li><input type="number" placeholder="Length" id="" /></li>
          <li><input type="number" placeholder="Knee" id="" /></li>
          <li><input type="number" placeholder="Inseam" id="" /></li>
          <li><input type="number" placeholder="Leg Opening" id="" /></li>
        </ol>
        <img src="Images/Pant.png" height="200px" alt="" />
      </div>
      <div class="blazer">
        <h4>Blazer Jacket</h4>
        <ol>
          <li><input type="number" placeholder="Collar to shoulder" id="" /></li>
          <li><input type="number" placeholder="Shoulder to sleeve" id="" /></li>
          <li>
            <input type="number" placeholder="Shoulder to shoulder" id="" />
          </li>
          <li><input type="number" placeholder="Upper arm width" id="" /></li>
          <li><input type="number" placeholder="Forearm width" id="" /></li>
          <li><input type="number" placeholder="Chest width" id="" /></li>
          <li><input type="number" placeholder="Waist width" id="" /></li>
          <li><input type="number" placeholder="Front length" id="" /></li>
          <li><input type="number" placeholder="Hip width" id="" /></li>
          <li><input type="number" placeholder="Sleeve hole width" id="" /></li>
        </ol>
        <img src="Images/Blazer.png" height="200px" alt="" />
      </div>
      <div>
        <button type="submit" class="Signup">Sign Up</button>
      </div>
    </form>
  </body>
</html>
<?php
    @include 'config.php';
    session_start();
   $client_name=$_POST["client_name"];
   $age=$_POST["age"];
   $gender=$_POST["gender"];
   $address=$_POST["address"];
   $ph_no=$_POST["mobile"];
   $email_id=$_POST["email_id"];
   $password1=$_POST["p1"];
   $password2=$_POST["p2"];
    //var_dump($name);
    if($password1 != $password2)
    {
        echo"<script type='text/javascript'>alert('Passwords don't match')</script>";
        echo" ";
        echo"Passwords don't match";
    }
    else
    {
        $password=$password2;
        if (!empty($client_name) And !empty($age) And !empty($gender) And !empty($address) And !empty($ph_no) And !empty($email_id))
        {
            
            if(mysqli_connect_errno())
            {
                die('Connect Error : '.mysqli_connect_error());
            }
            //echo "Successful";
        
            else
            {
                $sql="INSERT INTO client (client_name,age,gender,address,ph_no,email_id,password) VALUES (?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($stmt,"sississ",$client_name,$age,$gender,$address,$ph_no,$email_id,$password);
                mysqli_stmt_execute($stmt);
                echo"<script type='text/javascript'>alert('Record saved\nGo back to sign in page and enter your credentials')</script>";
                header('Location: sign_in.php');
                
            }
        }
    }

?>
