<?php
   @include 'config.php';

   session_start();
   $query="SELECT * FROM shirt";
   $result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartStitch-Tailor-ShirtDatabase</title>
    
    <link rel="stylesheet" href="tailordatabase.css">
    
</head>
<body>
    <div class="details">
        <h3>Shirts database</h3>
        <table>
            <tr>
                <th>Shirt ID</th>
                <th>Client ID</th>
                <th>Collar</th>
                <th>Neck to shoulder</th>
                <th>Sleeve length</th>
                <th>Shoulder to shoulder</th>
                <th>Chest</th>
                <th>Front length</th>
                <th>Sleeve cuff</th>
                <th>Hem</th>
                
            </tr>
            <tr>
                <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['shirt_id'];?></td>
                <td><?php echo $row['client_id'];?></td>
                <td><?php echo $row['collar'];?> inches</td>
                <td><?php echo $row['neck_to_shoulder'];?> inches</td>
                <td><?php echo $row['sleeve_length'];?> inches</td>
                <td><?php echo $row['shoulder_to_shoulder'];?> inches</td>
                <td><?php echo $row['chest'];?> inches</td>
                <td><?php echo $row['front_length'];?> inches</td>
                <td><?php echo $row['sleeve_cuff'];?> inches</td>
                <td><?php echo $row['hem'];?> inches</td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        </div>
    </body>
</html>