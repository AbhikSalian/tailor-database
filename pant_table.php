<?php
   @include 'config.php';

   session_start();
   $query="SELECT * FROM pant";
   $result=mysqli_query($conn,$query);
?>
<html>
<style>
            table, th, td {
                border: 1px solid black;
            }
    </style>
    <body>
        <h4>Pants database:</h4>
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
                <td><?php echo $row['waist'];?></td>
                <td><?php echo $row['front_rise'];?></td>
                <td><?php echo $row['hip'];?></td>
                <td><?php echo $row['thigh'];?></td>
                <td><?php echo $row['length'];?></td>
                <td><?php echo $row['knee'];?></td>
                <td><?php echo $row['inseam'];?></td>
                <td><?php echo $row['leg_opening'];?></td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        <a href="tailor_interface.php"><button>Home</button></a>
    </body>
</html>