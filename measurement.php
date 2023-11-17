<?php
// Your existing PHP code
error_reporting(0);
@include 'config.php';
    session_start();
    
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $cid=$_SESSION['client_id'];
     
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
          
          $res_shirt=mysqli_query($conn,$shirt_insert) or die(mysqli_error($conn));
          $res_pant=mysqli_query($conn,$pant_insert) or die(mysqli_error($conn));
          if ($res_shirt && $res_pant) {
            
            header('Location: '.SITEURL.'client_details.php');
            exit;
          } 
          else 
          {
            echo "Data not inserted";
        }
    
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SmartSticth-Measurement</title>
    <link rel="stylesheet" href="measurements.css" />
  </head>
  <body>
    
  <header>
        <nav class="navbar">
            <div class="navdiv">
                <p class="home">UPDATE MEASUREMENTS</p>
            </div>
        </nav>
    </header>

    <form action="" method="post">
      <div class="measurement">

        <div class="shirt">
          <h4>SHIRT</h4>
          <ol>
            <li>
                
              <label for="">Collar : </label
              ><input type="number" id="" placeholder="in inches" name="collar" value="<?php echo $disp_collar;?>"/>
            </li>
            <li>
              <label for="">Neck to Shoulder : </label
              ><input
                type="number"
                placeholder="in inches"
                id=""
                name="neck_to_shoulder"
                value="<?php echo $disp_nts;?>"
              />
            </li>
            <li>
              <label for="">Sleeve Length : </label
              ><input type="number" placeholder="in inches" id="" name="sleeve_length" value="<?php echo $disp_sl;?>"/>
            </li>
            <li>
              <label for="">Shoulder : </label
              ><input
                type="number"
                placeholder="in inches"
                id=""
                name="shoulder_to_shoulder"
                value="<?php echo $disp_sts;?>"
              />
            </li>
            <li>
              <label for="">Chest : </label
              ><input type="number" placeholder="in inches" id="" name="chest" value="<?php echo $disp_chest;?>"/>
            </li>
            <li>
              <label for="">Front Length : </label
              ><input type="number" placeholder="in inches" id="" name="front_length" value="<?php echo $disp_fl;?>"/>
            </li>
            <li>
              <label for="">Sleeve cuff : </label
              ><input type="number" placeholder="in inches" id="" name="sleeve_cuff" value="<?php echo $disp_sc;?>"/>
            </li>
            <li>
              <label for="">Hem : </label
              ><input type="number" placeholder="in inches" id="" name="hem" value="<?php echo $disp_hem;?>"/>
            </li>
          </ol>
          <img class="measureimg" src="Images/shirtmeasure.png" height="300px" alt="" />
        </div>
  
        <div class="pant">
          <h4>PANT</h4>
          <ol>
            <li>
              <label for="">Waist : </label
              ><input type="number" placeholder="in inches" id="" name="waist" value="<?php echo $disp_waist;?>"/>
            </li>
            <li>
              <label for="">Front Rise : </label
              ><input type="number" placeholder="in inches" id="" name="front_rise" value="<?php echo $disp_fr;?>"/>
            </li>
            <li>
              <label for="">Hip : </label
              ><input type="number" placeholder="in inches" id="" name="hip" value="<?php echo $disp_hip;?>"/>
            </li>
            <li>
              <label for="">Thigh : </label
              ><input type="number" placeholder="in inches" id="" name="thigh" value="<?php echo $disp_thigh;?>"/>
            </li>
            <li>
              <label for="">Length : </label
              ><input type="number" placeholder="in inches" id="" name="length" value="<?php echo $disp_length;?>"/>
            </li>
            <li>
              <label for="">Knee : </label
              ><input type="number" placeholder="in inches" id="" name="knee" value="<?php echo $disp_knee;?>"/>
            </li>
            <li>
              <label for="">Inseam : </label
              ><input type="number" placeholder="in inches" id="" name="inseam" value="<?php echo $disp_inseam;?>"/>
            </li>
            <li>
              <label for="">Leg Opening : </label
              ><input type="number" placeholder="in inches" id="" name="leg_opening" value="<?php echo $disp_lo;?>"/>
            </li>
          </ol>
          <img class="measureimg" src="Images/pantmeasure.png" height="300px" alt="" />
        </div>
      </div>


      <div class="submit">
        <a href="<?php echo SITEURL;?>client_details.php"><button type="submit">Update</button></a>
      </div>
    </form>
  </body>
</html>