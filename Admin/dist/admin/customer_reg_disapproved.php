<?php
include 'config.php';

if(isset($_GET['customer_id']))

{
extract ($_POST);

 
$update=mysqli_query($connect,"update customer set Customer_status = 'disapproved' where Customer_id='".$_GET['customer_id']."' ") or die(mysqli_error($connect));
if($update)
	{
		echo '<script type="text/javascript">';
		echo " alert('Customer disapproved');";
		echo 'window.location.href = "customer_disapproved.php";';
		echo '</script>';
	
	}
else
	{
		echo '<script type="text/javascript">';
		echo " alert('Error for Customer Disapproved');";
		echo '<script>';
	
	
	}	
	
}

?>