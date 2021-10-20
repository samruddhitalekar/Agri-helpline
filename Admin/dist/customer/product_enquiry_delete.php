<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Delete from product_enquiry where Enquiry_id='".$_GET['enquiry_id']."' ")or die(mysqli_error($con));
$back="javascript:history.back()";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Product Enquiry Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Product Enquiry Not Deleted');";
            echo "</script>";
             
             }

             ?>