<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SmartSticth-Measurement</title>
    <link rel="stylesheet" href="measurements.css" />
  </head>
  <body>

    <form action="measurement.php" method="post">
      <div class="measurement">

        <div class="shirt">
          <h3>Shirt</h3>
          <ol>
            <li>
              <label for="">Collar : </label
              ><input type="number" placeholder="in inches" id="" name="collar" />
            </li>
            <li>
              <label for="">Neck to Shoulder : </label
              ><input
                type="number"
                placeholder="in inches"
                id=""
                name="neck_to_shoulder"
              />
            </li>
            <li>
              <label for="">Sleeve Length : </label
              ><input type="number" placeholder="in inches" id="" name="sleeve_length" />
            </li>
            <li>
              <label for="">Shoulder : </label
              ><input
                type="number"
                placeholder="in inches"
                id=""
                name="shoulder_to_shoulder"
              />
            </li>
            <li>
              <label for="">Chest : </label
              ><input type="number" placeholder="in inches" id="" name="chest" />
            </li>
            <li>
              <label for="">Front Length : </label
              ><input type="number" placeholder="in inches" id="" name="front_length" />
            </li>
            <li>
              <label for="">Sleeve cuff : </label
              ><input type="number" placeholder="in inches" id="" name="sleeve_cuff" />
            </li>
            <li>
              <label for="">Hem : </label
              ><input type="number" placeholder="in inches" id="" name="hem" />
            </li>
          </ol>
          <img class="measureimg" src="Images/shirtmeasure.png" height="300px" alt="" />
        </div>
  
        <div class="pant">
          <h3>Pant</h3>
          <ol>
            <li>
              <label for="">Waist : </label
              ><input type="number" placeholder="in inches" id="" name="waist" />
            </li>
            <li>
              <label for="">Front Rise : </label
              ><input type="number" placeholder="in inches" id="" name="front_rise" />
            </li>
            <li>
              <label for="">Hip : </label
              ><input type="number" placeholder="in inches" id="" name="hip" />
            </li>
            <li>
              <label for="">Thigh : </label
              ><input type="number" placeholder="in inches" id="" name="thigh" />
            </li>
            <li>
              <label for="">Length : </label
              ><input type="number" placeholder="in inches" id="" name="length" />
            </li>
            <li>
              <label for="">Knee : </label
              ><input type="number" placeholder="in inches" id="" name="knee" />
            </li>
            <li>
              <label for="">Inseam : </label
              ><input type="number" placeholder="in inches" id="" name="inseam" />
            </li>
            <li>
              <label for="">Leg Opening : </label
              ><input type="number" placeholder="in inches" id="" name="leg_opening" />
            </li>
          </ol>
          <img class="measureimg" src="Images/pantmeasure.png" height="300px" alt="" />
        </div>
      </div>


      <div class="submit">
        <a href="client_details.php"><button type="submit">Update</button></a>
      </div>
    </form>
  </body>
</html><?php
// Start the output buffering to capture any output before it's sent
ob_start();

// Your existing PHP code

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
                $cid=$_SESSION['client_id'];
                $shirt_insert="UPDATE shirt SET 
                collar='$collar',
                neck_to_shoulder='$neck_to_shoulder',
                sleeve_length='$sleeve_length',
                shoulder_to_shoulder='$shoulder_to_shoulder',
                chest='$chest',
                front_length='$front_length',
                sleeve_cuff='$sleeve_cuff',
                hem='$hem' 
                WHERE
                client_id='$cid'";

                $pant_insert="UPDATE pant SET
                waist='$waist',
                front_rise='$front_rise',
                hip='$hip',
                thigh='$thigh',
                length='$length',
                knee='$knee',
                inseam='$inseam',
                leg_opening='$leg_opening'
                WHERE
                client_id='$cid'";
                
                $stmt1 = mysqli_query($conn,$shirt_insert);
                $stmt2 = mysqli_query($conn,$pant_insert);
                /*if(!mysqli_stmt_prepare($stmt1, $shirt_insert))
                {
                    die(mysqli_error($conn));
                }
                if(!mysqli_stmt_prepare($stmt2, $pant_insert))
                {
                    die(mysqli_error($conn));
                }*/
                //mysqli_stmt_bind_param($stmt1,"dddddddd",$collar,$neck_to_shoulder,$sleeve_length,
                //$shoulder_to_shoulder,$chest,$front_length,$sleeve_cuff,$hem);
                //mysqli_stmt_execute($stmt1);
                //mysqli_stmt_bind_param($stmt2,"dddddddd",$waist,$front_rise,$hip,
                //$thigh,$length,$knee,$inseam,$leg_opening);
                //mysqli_stmt_execute($stmt2);
               //echo"Hello";
               //header('Location: client_details.php'); 
                
            
                
            }
            
           
    
// Redirect only if there's no output yet
if (ob_get_length() > 0) {
    ob_end_flush(); // Flush and send any captured output
} else {
    ob_end_clean(); // Clean and discard any captured output
    header('Location: client_details.php');
    error_reporting(0);
    exit; // Make sure to exit the script
}
?>