<?php
session_start();
if(!isset($_SESSION['officer_email']))
{
    header('location:index.php');   
    }
?>