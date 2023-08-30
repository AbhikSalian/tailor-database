<?php
   @include 'config.php';

   session_start();
   $query="SELECT * FROM shirt";
   $result=mysqli_query($conn,$query);
?>
<html>
<style>
            table, th, td {
                border: 1px solid black;
            }
    </style>
    <body>
        <h4>Shirts database:</h4>
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
                <td><?php echo $row['collar'];?></td>
                <td><?php echo $row['neck_to_shoulder'];?></td>
                <td><?php echo $row['sleeve_length'];?></td>
                <td><?php echo $row['shoulder_to_shoulder'];?></td>
                <td><?php echo $row['chest'];?></td>
                <td><?php echo $row['front_length'];?></td>
                <td><?php echo $row['sleeve_cuff'];?></td>
                <td><?php echo $row['hem'];?></td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        <a href="tailor_interface.php"><button>Home</button></a>
    </body>
</html>