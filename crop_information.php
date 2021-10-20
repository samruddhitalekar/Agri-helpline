<?php
 include "config.php"; 
if(isset($_POST["crop_type"])){
	 $str = $_POST['crop_type'];
	 
	   $select1="select * from crop where Crop_type='".$str."' order by Crop_id desc" ;
	}
	else
	{
		$select1="select * from crop order by Crop_id desc Limit 9" ;
	}
	   

	   $view=mysqli_query($connect,$select1) or die(mysqli_error($connect));
	   while($fetch=mysqli_fetch_array($view))
	   {
?>




	<div class="col-md-4 agileinfo_portfolio_grid">
		<div class="w3_agile_portfolio_grid1">
			<a href="crop_details.php?crop_id=<?php echo $fetch['Crop_id'];?>" class="showcase" data-rel="lightcase:myCollection:slideshow" title="<?php echo $fetch['Crop_name'];?>">
				<div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
					<div class="w3layouts_port_head">
						<h3><?php echo $fetch['Crop_name'];?></h3>
					</div>
					<img src="Admin/dist/images/crop_photo/<?php echo $fetch['Crop_photo'];?>" style="width:350px;height:232px; " alt=" " class="img-responsive" />
				</div>
			</a>
		</div>						
	</div>

<?php } ?>