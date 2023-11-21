<?php
include('config.php');


if(!isset($_SESSION['client_id']))
{
    header('location:'.SITEURL.'index.php');
}
?>