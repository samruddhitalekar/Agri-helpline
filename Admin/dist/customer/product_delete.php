<?php
include "config.php";
$sel=mysqli_query($connect,"select * from product where Product_id='".$_GET['product_id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
                   $img=$fetch["Product_photo"];
         }

          $isrc="../images/product/".$img;
          unlink($isrc);

          $delete1 = mysqli_query($connect,"Delete from product where Product_id='".$_GET['product_id']."' ")or die(mysqli_error($con));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Product Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Product Not Deleted');";
            echo "</script>";
             
             }

             ?>