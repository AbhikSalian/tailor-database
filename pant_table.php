<?php
   @include 'config.php';

   session_start();
   $query="SELECT * FROM pant";
   $result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-tailor-PantDatabase</title>
    
    <link rel="stylesheet" href="tailordatabase.css">
</head>
<body>
    <div class="details">
        <h3>Pants database</h3>
        <table>
            <tr>
                <th>Pant ID</th>
                <th>Client ID</th>
                <th>Waist</th>
                <th>Front Rise</th>
                <th>Hip</th>
                <th>Thigh</th>
                <th>Length</th>
                <th>Knee</th>
                <th>Inseam</th>
                <th>Leg opening</th>
                
            </tr>
            <tr>
                <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['pant_id'];?></td>
                <td><?php echo $row['client_id'];?></td>
                <td><?php echo $row['waist'];?> inches</td>
                <td><?php echo $row['front_rise'];?> inches</td>
                <td><?php echo $row['hip'];?> inches</td>
                <td><?php echo $row['thigh'];?> inches</td>
                <td><?php echo $row['length'];?> inches</td>
                <td><?php echo $row['knee'];?> inches</td>
                <td><?php echo $row['inseam'];?> inches</td>
                <td><?php echo $row['leg_opening'];?> inches</td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        </div>
    </body>
</html>