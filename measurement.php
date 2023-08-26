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
            ><input type="number" placeholder="" id="" name="collar"/>
            </li>
            <li>
            <label for="">Neck to Shoulder: </label
            ><input type="number" placeholder="" id="" name="neck_to_shoulder"/>
            </li>
            <li>
            <label for="">Sleeve Length: </label
            ><input type="number" placeholder="" id="" name="sleeve_length"/>
            </li>
            <li>
            <label for="">Shoulder to Shoulder: </label
            ><input type="number" placeholder="" id="" name="shoulder_to_shoulder"/>
            </li>
            <li>
            <label for="">Chest: </label
            ><input type="number" placeholder="" id="" name="chest"/>
            </li>
            <li>
            <label for="">Front Length: </label
            ><input type="number" placeholder="" id="" name="front_length"/>
            </li>
            <li>
            <label for="">Sleeve cuff: </label
            ><input type="number" placeholder="" id="" name="sleeve_cuff"/>
            </li>
            <li>
            <label for="">Hem: </label
            ><input type="number" placeholder="" id="" name="hem"/>
            </li>
        </ol>
        <img src="Images/Shirt.png" height="200px" alt=""/>
        </div>
    
      <div class="pant">
        <h4>Pant</h4>
        <ol>
          <li><input type="number" placeholder="Waist" id="" name="waist"/></li>
          <li><input type="number" placeholder="Front Rise" id="" name="front_rise"/></li>
          <li><input type="number" placeholder="Hip" id="" name="hip"/></li>
          <li><input type="number" placeholder="Thigh" id="" name="thigh"/></li>
          <li><input type="number" placeholder="Length" id="" name="length"/></li>
          <li><input type="number" placeholder="Knee" id="" name="knee"/></li>
          <li><input type="number" placeholder="Inseam" id="" name="inseam"/></li>
          <li><input type="number" placeholder="Leg Opening" id="" name="leg_opening"/></li>
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
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
<?php
    @include 'config.php';
    session_start();
   $collar=$_POST["collar"];
   $neck_to_shoulder=$_POST["neck_to_shoulder"];
   $sleeve_length=$_POST["sleeve_length"];
   $shoulder_to_shoulder=$_POST["shoulder_to_shoulder"];
   $chest=$_POST["chest"];
   $front_length=$_POST["front_length"];
   $sleeve_cuff=$_POST["sleeve_cuff"];
   $hem=$_POST["hem"];
   $waist=$_POST["waist"];
   $front_rise=$_POST["front_rise"];
   $hip=$_POST["hip"];
   $thigh=$_POST["thigh"];
   $length=$_POST["length"];
   $knee=$_POST["knee"];
   $inseam=$_POST["inseam"];
   $leg_opening=$_POST["leg_opening"];
    //var_dump($name);
            
            if(mysqli_connect_errno())
            {
                die('Connect Error : '.mysqli_connect_error());
            }
            //echo "Successful";
        
            else
            {
                $shirt_insert="INSERT INTO shirt (collar,neck_to_shoulder,sleeve_length,shoulder_to_shoulder,
                chest,front_length,sleeve_cuff,hem) VALUES (?,?,?,?,?,?,?,?)";
                $pant_insert="INSERT INTO pant (waist,front_rise,hip,thigh,length,knee,inseam,leg_opening)
                 VALUES (?,?,?,?,?,?,?,?)";
                $stmt1 = mysqli_stmt_init($conn);
                $stmt2 = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt1, $shirt_insert))
                {
                    die(mysqli_error($conn));
                }
                if(!mysqli_stmt_prepare($stmt2, $pant_insert))
                {
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($stmt1,"dddddddd",$client_name,$age,$gender,$address,$ph_no,$email_id,$password);
                mysqli_stmt_execute($stmt);
                echo"<script type='text/javascript'>alert('Record saved\nGo back to sign in page and enter your credentials')</script>";
                header('Location: sign_in.php');
                
            }
        
    

?>
