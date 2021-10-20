<?php
include 'config.php';

if(isset($_GET['customer_id']))

{
extract ($_POST);

 
$update=mysqli_query($connect,"update customer set Customer_status = 'approved' where Customer_id='".$_GET['customer_id']."' ") or die(mysqli_error($connect));
if($update)
	{
		echo '<script type="text/javascript">';
		echo " alert('Customer approved');";
		echo 'window.location.href = "customer_approved.php";';
		echo '</script>';
	
	}
else
	{
		echo '<script type="text/javascript">';
		echo " alert('Error for Customer Approved');";
		echo '<script>';
	
	
	}	
	
}

?>