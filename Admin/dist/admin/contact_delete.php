<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Delete from contact where Contact_id='".$_GET['contact_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('अभिप्राय हटविला गेला');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('अभिप्राय हटविला गेला नाही');";
            echo "</script>";
             
             }

             ?>