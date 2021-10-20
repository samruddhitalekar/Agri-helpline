<?php
include "config.php";
$sel=mysqli_query($connect,"select * from crop where Crop_id='".$_GET['crop_id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
                   $photo=$fetch["Crop_photo"];
                   $file=$fetch["Crop_file"];
         }

          $crop_photo="../images/crop_photo/".$photo;
          unlink($crop_photo);

          $crop_file="../images/crop_file/".$file;
          unlink($crop_file);

          $delete1 = mysqli_query($connect,"Delete from crop where Crop_id='".$_GET['crop_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('पीक हटविले गेले');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('पीक हटविले गेले नाही');";
            echo "</script>";
             
             }

             ?>