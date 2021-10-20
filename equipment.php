<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist | Equipments</title>
<?php
include "header.php";
include "config.php";
?>

	<!-- //banner --> 
<!-- portfolio -->
		<div class="banner-bottom">
			<div class="container">

				
			<div class="w3ls-heading">
				<h2 class="h-two">Equipments</h2>
<p class="sub two"></p>
			</div>
<br><br>
			
				<div class="w3ls_portfolio_grids">

<?php

    $select1="select c.*,p.* from customer c, product p where c.Customer_id=p.Customer_id and p.Product_status='Available' order by p.Product_id desc" ;

     $view=mysqli_query($connect,$select1) or die(mysqli_error($connect));
     $record=mysqli_num_rows($view);

     if($record>0)
     {
     while($fetch=mysqli_fetch_array($view))
     {
?>


  <div class="col-md-4 agileinfo_portfolio_grid">
    <div class="w3_agile_portfolio_grid1">
    <span data-toggle = "modal"  data-target="#model<?php echo $fetch['Product_id'];?>" style="padding-left:10px">
      <a href="#model<?php echo $fetch['Product_id'];?>" class="showcase" data-rel="lightcase:myCollection:slideshow" title="<?php echo $fetch['Product_name'];?>">
        <div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">  
          <div class="w3layouts_port_head">
            <h3><?php echo $fetch['Product_name'];?></h3>
          </div>
          <img src="Admin/dist/images/product/<?php echo $fetch['Product_photo'];?>" style="width:350px;height:232px; " alt=" " class="img-responsive" />
        </div>
      </a>
    </span>
    </div>            
  </div>

  <div id = "model<?php echo $fetch['Product_id'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h2 class="modal-title"><?php echo $fetch['Product_name'];?></h2>

                    </div>
                    <hr>
                    
                    <div class="modal-body">
                      
                      <center>
                        <embed src="Admin/dist/images/product/<?php echo $fetch['Product_photo']?>"
                               frameborder="0" width="150px" height="150px">
                      </center>
                      <br>

                          <div class="row">
                            <div class="col-md-3"><b>Information:</b></div>
                            <div class="col-md-9"><?php echo $fetch['Product_information']?></div>
                          </div>
                          <br>

                          <div class="row">
                            <div class="col-md-3"><b>Rent of one Day:</b></div>
                            <div class="col-md-9">&#8377; <?php echo $fetch['Product_rent']?></div>
                          </div>
                          <br>

                          <div class="row">
                            <div class="col-md-3"><b>Labour Charges:</b></div>
                            <div class="col-md-9">&#8377; <?php echo $fetch['Product_labour_charges']?></div>
                          </div>

                    </div>
                    <div class="modal-footer">
                      <form method="post">
                      <a href="equipments_booked.php?product_id=<?php echo $fetch['Product_id'];?>"><button type="button" class="btn btn-default" style="background-color: #ffae00">Enquiry</button></a>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>

<?php }
}
else
{

  echo "<h3>No Equipment.</h3>";
}
 ?>
	<div class="clearfix"> </div>
</div>
				
		</div>
	</div>
<!-- portfolio -->
	<?php
	include "footer.php";
	?>

	