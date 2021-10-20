<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Delete from water_report where Water_report_id='".$_GET['water_report_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Water report delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Error for water report delete');";
            echo "</script>";
             
             }

             ?>