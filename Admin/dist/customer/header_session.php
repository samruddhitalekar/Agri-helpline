<?php
session_start();
if(!isset($_SESSION['customer_email']))
{
    header('location:index.php');   
    }
?>