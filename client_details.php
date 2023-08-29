<?php
   @include 'config.php';

   session_start();
   //echo $_SESSION['client_id'];
   if(!isset($_SESSION['client_name'])){
    header('location:Hom.php');
   }
   $cid=$_SESSION['client_id'];
            $query1="select * from shirt where shirt_id in(select shirt_id from link where client_id='$cid')";
            $query2="select * from pant where pant_id in(select pant_id from link where client_id='$cid')";
            $result1 = mysqli_query($conn,$query1);
            $result2 = mysqli_query($conn,$query2);
            if($result1)
            {
                if($result1 && mysqli_num_rows($result1) > 0)
                {
                        $client_shirt_data = mysqli_fetch_assoc($result1);
                    //$row=mysqli_fetch_array($result);
                    
                        
                       $_SESSION['collar'] = $client_shirt_data['collar'];
                        $_SESSION['neck_to_shoulder'] = $client_shirt_data['neck_to_shoulder'];
                        $_SESSION['sleeve_length'] = $client_shirt_data['sleeve_length'];
                        $_SESSION['shoulder_to_shoulder'] = $client_shirt_data['shoulder_to_shoulder'];
                        $_SESSION['chest'] = $client_shirt_data['chest'];
                        $_SESSION['front_length'] = $client_shirt_data['front_length'];
                        $_SESSION['sleeve_cuff'] = $client_shirt_data['sleeve_cuff'];
                        $_SESSION['hem'] = $client_shirt_data['hem'];
                        $_SESSION['shirt_id'] = $client_shirt_data['shirt_id'];
                        
                        
                        //header("Location: client_details.php");
                        //echo"<script type='text/javascript'>alert('Login successful')</script>";  
                }
            }
            if($result2)
            {
                if($result2 && mysqli_num_rows($result2) > 0)
                {
                        $client_pant_data = mysqli_fetch_assoc($result2);
                    //$row=mysqli_fetch_array($result);
                    
                        
                       $_SESSION['pant_id'] = $client_pant_data['pant_id'];
                        $_SESSION['waist'] = $client_pant_data['waist'];
                        $_SESSION['front_rise'] = $client_pant_data['front_rise'];
                        $_SESSION['hip'] = $client_pant_data['hip'];
                        $_SESSION['thigh'] = $client_pant_data['thigh'];
                        $_SESSION['length'] = $client_pant_data['length'];
                        $_SESSION['inseam'] = $client_pant_data['inseam'];
                        $_SESSION['leg_opening'] = $client_pant_data['leg_opening'];
                        $_SESSION['knee'] = $client_pant_data['knee'];
                        
                        
                        //header("Location: client_details.php");
                        //echo"<script type='text/javascript'>alert('Login successful')</script>";  
                }
            }
?>
<html>
    <body>
        <div>
            <h3>Personal Details:</h3>
            ID :  <span><?php echo $_SESSION['client_id']; ?></span><br>
            Name :  <span><?php echo $_SESSION['client_name'] ;?></span><br>
            Age :   <span><?php echo $_SESSION['age'] ;?></span><br>
            Gender : <span><?php echo $_SESSION['gender']; ?></span><br>
            Address : <span><?php echo $_SESSION['address']; ?></span><br>
            Mobile No. : <span><?php echo $_SESSION['ph_no']; ?></span><br>
            Email ID : <span><?php echo $_SESSION['email_id']; ?></span><br>
            
        </div>
        <div><h4>Shirt measurements:</h4>
            <table>
                <tr>
                    <th>Shirt ID</th>
                    <th>Collar</th>
                    <th>Neck to shoulder</th>
                    <th>Sleeve_length</th>
                    <th>Shoulder to shoulder</th>
                    <th>Chest</th>
                    <th>Front length</th>
                    <th>Sleeve cuff</th>
                    <th>Hem</th>
                </tr>
                <tr>
                    <?php
                        $client_shirt_data = mysqli_fetch_assoc($result1);
                        
                    ?>
                    <td><?php echo $_SESSION['shirt_id'];?></td>
                    <td><?php echo $_SESSION['collar'];?></td>
                    <td><?php echo $_SESSION['neck_to_shoulder'];?></td>
                    <td><?php echo $_SESSION['sleeve_length'];?></td>
                    <td><?php echo $_SESSION['shoulder_to_shoulder'];?></td>
                    <td><?php echo $_SESSION['chest'];?></td>
                    <td><?php echo $_SESSION['front_length'];?></td>
                    <td><?php echo $_SESSION['sleeve_cuff'];?></td>
                    <td><?php echo $_SESSION['hem'];?></td>
                    
                </tr>
            </table>
        </div>
        <div><h4>Pant measurements:</h4>
            <table>
                <tr>
                    <th>Pant ID</th>
                    <th>Waist</th>
                    <th>Front rise</th>
                    <th>Hip</th>
                    <th>Thigh</th>
                    <th>Length</th>
                    <th>Knee</th>
                    <th>Inseam</th>
                    <th>Leg opening</th>
                </tr>
                <tr>
                    <?php
                        $client_pant_data = mysqli_fetch_assoc($result2);
                        
                    ?>
                    <td><?php echo $_SESSION['pant_id'];?></td>
                    <td><?php echo $_SESSION['waist'];?></td>
                    <td><?php echo $_SESSION['front_rise'];?></td>
                    <td><?php echo $_SESSION['hip'];?></td>
                    <td><?php echo $_SESSION['thigh'];?></td>
                    <td><?php echo $_SESSION['length'];?></td>
                    <td><?php echo $_SESSION['knee'];?></td>
                    <td><?php echo $_SESSION['inseam'];?></td>
                    <td><?php echo $_SESSION['leg_opening'];?></td>
                    
                    <?php
                        
                    ?>
                </tr>
            </table>
        </div>
        <a href="measurement.php"><button>Edit measurements</button></a>
        <a href="Hom.php"><button>Home</button></a>
    </body>

</html>
