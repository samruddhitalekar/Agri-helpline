<?php
include "config.php";


          $delete1 = mysqli_query($connect,"Delete from question_answer where Question_answer_id='".$_GET['question_answer_id']."' ")or die(mysqli_error($connect));

$back="javascript:history.back()";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('प्रश्नाचे उत्तर हटविले गेले');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('प्रश्नाचे उत्तर हटविले गेले');";
            echo "</script>";
             
             }

             ?>