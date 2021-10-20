<?php
include 'config.php';

if(isset($_GET['enquiry_id']) && isset($_GET['product_id']))

{
extract ($_POST);

 
$update=mysqli_query($connect,"update product_enquiry set En_product_status = 'Booked' where Enquiry_id='".$_GET['enquiry_id']."' ") or die(mysqli_error($connect));

$update1=mysqli_query($connect,"update product set Product_status = 'Unavailable' where Product_id='".$_GET['product_id']."' ") or die(mysqli_error($connect));
$back="javascript:history.back()";
if($update && $update1)
	{
		echo '<script type="text/javascript">';
		echo " alert('Product Enquiry Booked');";
		echo 'window.location.href = "'.$back.'"';
		echo '</script>';
	
	}
else
	{
		echo '<script type="text/javascript">';
		echo " alert('Error in booking the Product Enquiry');";
		echo '<script>';
	
	
	}	
	
}

?>