<?php
include "config.php";
$sel=mysqli_query($connect,"select * from crop_calender where Calender_id='".$_GET['calender_id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
                   $photo=$fetch["Calender_crop_photo"];                   
         }

          $scheme_file="../images/calender_crop_photo/".$photo;
          unlink($scheme_file);

          $delete1 = mysqli_query($connect,"Delete from crop_calender where Calender_id='".$_GET['calender_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('पीक दिनदर्शिका हटवली गेली');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('पीक दिनदर्शिका हटवली गेली नाही');";
            echo "</script>";
             
             }

             ?>