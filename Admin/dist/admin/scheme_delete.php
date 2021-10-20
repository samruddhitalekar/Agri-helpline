<?php
include "config.php";
$sel=mysqli_query($connect,"select * from scheme where Scheme_id='".$_GET['scheme_id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
                   $photo=$fetch["Scheme_file"];                   
         }

          $scheme_file="../images/scheme/".$photo;
          unlink($scheme_file);

          $delete1 = mysqli_query($connect,"Delete from scheme where Scheme_id='".$_GET['scheme_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('योजना हटवली गेली');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('योजना हटवली गेली नाही');";
            echo "</script>";
             
             }

             ?>