<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Delete from npk where NPK_id='".$_GET['npk_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('NPK delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Error for npk delete');";
            echo "</script>";
             
             }

             ?>