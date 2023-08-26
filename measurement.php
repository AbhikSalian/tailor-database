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
                mysqli_stmt_bind_param($stmt1,"dddddddd",$collar,$neck_to_shoulder,$sleeve_length,
                $shoulder_to_shoulder,$chest,$front_length,$sleeve_cuff,$hem);
                mysqli_stmt_execute($stmt1);
                mysqli_stmt_bind_param($stmt2,"dddddddd",$waist,$front_rise,$hip,
                $thigh,$length,$knee,$inseam,$leg_opening);
                mysqli_stmt_execute($stmt2);
                echo"<script type='text/javascript'>alert('Record saved')</script>";
                header('Location: Hom.php'); 
                
            }
            $cid=$_SESSION['client_id'];
            $query1="select * from shirt where shirt_id in(select shirt_id from link where client_id='$cid')";
            $query2="select * from pant where pant_id in(select pant_id from link where client_id='$cid')";
            $result1 = mysqli_query($conn,$query1);
            if($result1)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $client_shirt_data = mysqli_fetch_assoc($result);
                    //$row=mysqli_fetch_array($result);
                    if($client_data['password'] == $password)
                    {
                        
                        $_SESSION['client_id'] = $client_data['client_id'];
                        $_SESSION['client_name'] = $client_data['client_name'];
                        $_SESSION['age'] = $client_data['age'];
                        $_SESSION['gender'] = $client_data['gender'];
                        $_SESSION['address'] = $client_data['address'];
                        $_SESSION['ph_no'] = $client_data['ph_no'];
                        $_SESSION['email_id'] = $client_data['email_id'];
                        header("Location: client_details.php");
                        echo"<script type='text/javascript'>alert('Login successful')</script>";
                        
                    }
                }
            }
        
    

?>
