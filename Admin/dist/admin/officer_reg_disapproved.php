<?php
include 'config.php';

if(isset($_GET['officer_id']))

{
extract ($_POST);

 
$update=mysqli_query($connect,"update agriculture_officer set Officer_status = 'disapproved' where Officer_id='".$_GET['officer_id']."' ") or die(mysqli_error($connect));
if($update)
	{
		echo '<script type="text/javascript">';
		echo " alert('Officer disapproved');";
		echo 'window.location.href = "officer_disapproved.php";';
		echo '</script>';
	
	}
else
	{
		echo '<script type="text/javascript">';
		echo " alert('Error for Officer Disapproved');";
		echo '<script>';
	
	
	}	
	
}

?>