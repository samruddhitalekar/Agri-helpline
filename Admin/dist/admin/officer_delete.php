<?php
if (isset($_GET['officer_id']))
    include 'config.php';

  $sel=mysqli_query($connect,"select * from agriculture_officer where Officer_id='".$_GET['officer_id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
                   $photo=$fetch["Officer_photo"];
         }

          $crop_photo="../images/officer/".$photo;
          unlink($crop_photo);

    $delete='Delete from agriculture_officer where Officer_id="'.$_GET['officer_id'].'"';
    $result = mysqli_query($connect,$delete);
    $back="javascript:history.back()";

  if($result)

          {
            echo '<script type="text/javascript">';
            echo "alert('Officer deleted');";
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
