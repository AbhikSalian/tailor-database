<?php

        //For local use
        define('SITEURL','');
    
        $dbname= "tailor"; 
        $host= "localhost";
        $user = "root";
        $psswd = "";
        
        //For online use
        /*define('SITEURL','https://smartstitchh.000webhostapp.com/');
   
        $dbname= "id21513501_smartstitch"; 
        $host= "localhost";
        $user = "id21513501_abhiksalian0728";
        $psswd = "khfbeivu97&^G";*/
       

    $conn = mysqli_connect($host,$user,$psswd,$dbname);
?>