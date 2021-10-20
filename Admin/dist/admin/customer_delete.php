<?php
if (isset($_GET['customer_id']))
    include 'config.php';

  $sel=mysqli_query($connect,"select * from customer where Customer_id='".$_GET['customer_id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
                   $photo=$fetch["Customer_photo"];
         }

          $crop_photo="../images/customer/".$photo;
          unlink($crop_photo);

    $delete='Delete from customer where Customer_id="'.$_GET['customer_id'].'"';
    $result = mysqli_query($connect,$delete);
    $back="javascript:history.back()";

  if($result)

          {
            echo '<script type="text/javascript">';
            echo "alert('Customer deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Error for record delete');";
            echo "</script>";
             
             }

?>
