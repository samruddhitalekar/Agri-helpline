<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist | Equipment Enquiry </title>
<?php
include "header.php";
include "config.php";
?>
	<!-- //banner --> 
<?php

    $select1="select * from product where Product_id ='".$_GET['product_id']."'" ;

     $view=mysqli_query($connect,$select1) or die(mysqli_error($connect));
     $fetch=mysqli_fetch_array($view);
     $product_rent=$fetch['Product_rent'];
     $labour_rent=$fetch['Product_labour_charges'];
     
?>	
	<!-- contact -->
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">Equipment Enquiry</h2>
					<p class="sub two"></p>
				</div>
				<div class="agileits_mail_grids">
					<div class="col-md-2"></div>
					<div class="col-md-8 agileits_mail_grid_left">
						<form  method="post" class="from-horizontal">
							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Product Name:</label></h4>
								<div class="col-md-9">
									<input type="text" name="name" placeholder="Name" value="<?php echo $fetch['Product_name']; ?>" readonly>
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Product Rent:</label></h4>
								<div class="col-md-9">
									<input type="text" name="product_rent" id="product_rent" placeholder="Name" value="<?php echo $fetch['Product_rent']; ?>" readonly>
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Labour charge:</label></h4>
								<div class="col-md-9">
									<input type="text" name="labour_charges" id="labour_charges" placeholder="labour_charges" value="<?php echo $fetch['Product_labour_charges']; ?>" readonly>
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Name:</label></h4>
								<div class="col-md-9">
									<input type="text" name="en_customer_name" placeholder="Name" required >
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Email ID:</label></h4>
								<div class="col-md-9">
									<input type="email" name="en_customer_email" placeholder="Email Id" required pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$">
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Mobile No: </label></h4>
								<div class="col-md-9">
									<input type="text" name="en_customer_mobile" placeholder="Mobile No" required maxlength="10" pattern="[789]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Address:</label></h4>
								<div class="col-md-9">
									<textarea placeholder="Address" name="en_customer_address"></textarea>
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">From Date:</label></h4>
								<div class="col-md-9">
									<input type="text" name="from_date" id="from_date" placeholder="From Date" required >
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">To Date:</label></h4>
								<div class="col-md-9">
									<input type="text" name="to_date"  id="to_date" placeholder="To Date" required  >
								</div>
							</div>
<script>
 $("#from_date").datepicker({
      dateFormat: "yy-mm-dd",
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); // Get selected date
        min.setDate(min.getDate() + 1);
//       $("#TextBox2").datepicker('setDate', min);
        $("#to_date").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});

$("#to_date").datepicker({
     dateFormat: "yy-mm-dd",
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); // Get selected date
         //max.setDate(max.getDate() + 1);
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
        var start = $("#from_date").datepicker("getDate");
        var end = $("#to_date").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        var no_of_days= days +1;
        $("#no_of_days").val(no_of_days);

        
        

    }
});
</script>
							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">No of Days:</label></h4>
								<div class="col-md-9">
									<input type="text" class="no_of_days" name="no_of_days" id="no_of_days" placeholder="No of Days"  required  readonly>
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Labour Option:</label></h4>
								<div class="col-md-9">
									<select name="labour_option" id="labour_option" class="form-control" required ">
										<option value="">Select Labour Option</option>
										<option value="yes">With Labour</option>
										<option value="no">Without Labour</option>
									</select>
								</div>
							</div>

<script type="text/javascript">
    $(document).ready(function(){
      $("select#labour_option").change(function(){
            var o = $("#labour_option option:selected").val();
        	var a=$("#no_of_days").val();
        	var labour_charges=$("#labour_charges").val();
        	var product_rent=$("#product_rent").val();
        	// var rent=$("#rentv").val();
        	var rent= product_rent * a;
        	$("#rent").val(rent);

        	if(o=="yes")
        	{
        		var labour_rent= a*labour_charges;
        	}
        	else
        	{
        		var labour_rent= 0;
        	}
        	
        	 $("#labour_rent").val(labour_rent);

        	 var total_rent= rent + labour_rent;

        	 $("#total_rent").val(total_rent);
        });
    });
  </script>						

							

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Labour Rent (&#8377;):</label></h4>
								<div class="col-md-9">
									<input type="text" name="labour_rent" id="labour_rent" placeholder="Labour Rent" required readonly>
								</div>
							</div>


							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Product Rent (&#8377;):</label></h4>
								<div class="col-md-9">
									<input type="text" name="rent" id="rent"  placeholder="Rent" required readonly>
								</div>
							</div>

							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Total Rent (&#8377;):</label></h4>
								<div class="col-md-9">
									<input type="text" name="total_rent" id="total_rent" placeholder="Total Rent" required readonly>
								</div>
							</div>

							<div class="row">
								<div class="col-md-10 col-md-offset-3">
									<input type="submit" class="col-md-5" value="Submit" name="submit">
									<a href="equipment.php"><input type="button" class="col-md-5" value="Cancel" name="cancel" style="margin-left: 20px;"></a>
								</div>
							</div>
						</form>
					</div>
					
						<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- //contact -->
	<!-- footer start here --> 
<?php
include "footer.php";
?>



<?php
        
        if(isset($_POST['submit']))
        {
            extract($_POST);
                $query=mysqli_query($connect,"insert into product_enquiry (Product_id, Customer_id,En_customer_name, En_customer_email, En_customer_mobile, En_customer_address, From_date, To_date, No_of_days, Rent, Labour_rent, Total_rent) values('".$_GET['product_id']."','$customer_id', '$en_customer_name', '$en_customer_email','$en_customer_mobile','$en_customer_address','$from_date','$to_date','$no_of_days','$rent','$labour_rent','$total_rent')")or die (mysqli_error($connect));

                $query1=mysqli_query($connect,"Update product set Product_status='Unavailable' where Product_id='".$_GET['product_id']."'")or die (mysqli_error($connect));
                
                if($query && $query1)
                {
                    echo '<script type="text/javascript">;';
                    echo "alert('Equipment Booked !');";
                    echo 'window.location.href="equipment.php";';
                    echo '</script>';
                }
                else
                {
                    echo '<script type="text/javascript">;';
                    echo "alert('Equipment not booked !');";
                    echo '</script>';
                }
            
    
        }
        
?>