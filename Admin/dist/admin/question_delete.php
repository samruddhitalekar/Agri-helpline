<?php
include "config.php";


          $delete = mysqli_query($connect,"Delete from question where Question_id='".$_GET['question_id']."' ")or die(mysqli_error($connect));
          $delete1 = mysqli_query($connect,"Delete from question_answer where Question_id='".$_GET['question_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('प्रश्न व प्रश्नाचे उत्तरे हटविले गेले');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('प्रश्न व प्रश्नाचे उत्तरे हटविले गेले');";
            echo "</script>";
             
             }

             ?>