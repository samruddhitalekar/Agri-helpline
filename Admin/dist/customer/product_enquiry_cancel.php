<?php
include 'config.php';

if(isset($_GET['enquiry_id']) && isset($_GET['product_id']))

{
extract ($_POST);

 
$update=mysqli_query($connect,"update product_enquiry set En_product_status = 'Cancel' where Enquiry_id='".$_GET['enquiry_id']."' ") or die(mysqli_error($connect));

$update1=mysqli_query($connect,"update product set Product_status = 'Available' where Product_id='".$_GET['product_id']."' ") or die(mysqli_error($connect));

$back="javascript:history.back()";
if($update && $update1)
	{
		echo '<script type="text/javascript">';
		echo " alert('Product Enquiry Canceled');";
		echo 'window.location.href = "'.$back.'"';
		echo '</script>';
	
	}
else
	{
		echo '<script type="text/javascript">';
		echo " alert('Error in Cancel the Product Enquiry');";
		echo '<script>';
	
	
	}	
	
}

?>