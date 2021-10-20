<?php
session_start();
session_destroy();
//header('location:index.php');
echo "<script>";
echo "alert('Logout successfull');";
echo 'window.location.href="index.php";';
echo "</script>";
?>