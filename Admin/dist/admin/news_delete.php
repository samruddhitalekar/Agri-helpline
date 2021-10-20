<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Delete from news where News_id='".$_GET['news_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('बातमी हटवली गेली');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('बातमी हटवली गेली नाही');";
            echo "</script>";
             
             }

             ?>