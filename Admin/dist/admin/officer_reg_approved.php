<?php
include 'config.php';

if(isset($_GET['officer_id']))

{
extract ($_POST);

 
$update=mysqli_query($connect,"update agriculture_officer set Officer_status = 'approved' where Officer_id='".$_GET['officer_id']."' ") or die(mysqli_error($connect));
if($update)
	{
		echo '<script type="text/javascript">';
		echo " alert('Officer approved');";
		echo 'window.location.href = "officer_approved.php";';
		echo '</script>';
	
	}
else
	{
		echo '<script type="text/javascript">';
		echo " alert('Error for Officer Approved');";
		echo '<script>';
	
	
	}	
	
}

?>