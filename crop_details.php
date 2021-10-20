<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist| Crop Details</title>
<?php
include "header.php";
?>
	<!-- //banner --> 
	<!-- about -->
	<!-- main-textgrids -->
<?php
include "config.php";
$select1=mysqli_query($connect,"select * from crop where Crop_id='".$_GET['crop_id']."'") or die(mysqli_error($connect)) ;
$fetch=mysqli_fetch_array($select1);
?>	
	<div class="main-textgrids">
		<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two"><?php echo $fetch['Crop_name'];?></h2>
				<p class="sub two"></p>
			</div>
			<div class="ab-agile">
				<div class="col-md-5 ab-pic">
					 <a href="Admin/dist/images/crop_photo/<?php echo $fetch['Crop_photo'];?>" target="_Blank"><img src="Admin/dist/images/crop_photo/<?php echo $fetch['Crop_photo'];?>" alt=" " /></a>

				</div>
				<div class="col-md-7 ab-text">
					<p align="justify" style="font-size:14px"><?php echo $fetch['Crop_description'];?></p>
					<ul class="ab">
						<li style="font-size: 20px;"><a href="Admin/dist/images/crop_file/<?php echo $fetch['Crop_file'];?>" target="_Blank"><i class="fa fa-angle-right" aria-hidden="true"></i> <b>अधिक माहिती बघा</b> </a></li>
						<li style="font-size: 20px;"><a href="Admin/dist/images/crop_file/<?php echo $fetch['Crop_file'];?>" Download><i class="fa fa-angle-right" aria-hidden="true" ></i> <b> डाउनलोड PDF</b></a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-5"></div>
				<center>
					<a href="javascript:history.back()"><button class="btn col-md-1" type="button" name="cancel" style="background-color: #ffae00;color: white">मागे</button></a>
				</center>
			</div>
			
		</div>
	</div>
	<!-- //main-textgrids -->
	
	
	<?php
	  include "footer.php";
	?>