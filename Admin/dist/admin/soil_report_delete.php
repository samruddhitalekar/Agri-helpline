<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Delete from soil_report where Soil_report_id='".$_GET['soil_report_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Soil report delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Error for soil report delete');";
            echo "</script>";
             
             }

             ?>