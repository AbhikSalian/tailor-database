<?php
   @include 'config.php';

   session_start();
   $query="SELECT * FROM client";
   $result=mysqli_query($conn,$query);
?>
<html>
<style>
            table, th, td {
                border: 1px solid black;
            }
    </style>
    <body>
        <h4>Clients database:</h4>
        <table>
            <tr>
                <th>Client ID</th>
                <th>Client Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Email ID</th>
            </tr>
            <tr>
                <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['client_id'];?></td>
                <td><?php echo $row['client_name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['ph_no'];?></td>
                <td><?php echo $row['email_id'];?></td>
            </tr>
                <?php
                    }
                ?>
            
        </table>
        <a href="tailor_interface.php"><button>Home</button></a>
    </body>
</html>