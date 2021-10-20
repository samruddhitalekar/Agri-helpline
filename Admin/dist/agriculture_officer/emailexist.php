<?php
error_reporting(0);
include ("config.php");
// $db_handle = new DBController();


if(!empty($_POST["email"])) {
  $result = mysqli_query($connect,"SELECT count(*) FROM agriculture_officer WHERE Officer_email='".$_POST["email"] . "'") or die (mysqli_error($connect));
  $row = mysqli_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'>Email Available</span>";
   }
   else{
      //echo "<span class='status-available'> Subject name available.</span>";
  }
}
?>