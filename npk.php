<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist | NPK Report </title>
<?php
include "header.php";
include "config.php";
?>
	<!-- //banner --> 
	
	<!-- contact -->
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">NPK Report</h2>
					<p class="sub two"></p>
				</div>
				<div class="agileits_mail_grids">
					<div class="col-md-2"></div>
					<div class="col-md-8 agileits_mail_grid_left">
						<form  method="post" class="from-horizontal">
							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">Crop Name:</label></h4>
								<div class="col-md-9">
									<select name="crop_name" id="crop_name" class="form-control" required ">
										<option value="">Select Crop Name</option>
										<?php
                                          
                                          $query=mysqli_query($connect,"select * from npk");
                                          while($row=mysqli_fetch_assoc($query)){
                                          extract($row);
                                          ?>
                                          <option value="<?php echo $row['NPK_id'];?>"><?php echo $row['NPK_crop_name'];?></option>
                                          <?php } ?>
									</select>
								</div>
							</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("select#crop_name").change(function(){
          var n = $("#crop_name option:selected").val();
      
          $.ajax({
              type: "POST",
              url: "ph.php", 
              data: { crop_name : n  } 
          }).done(function(data){
              $("#ph").html(data);
          });
      });
  });
</script>
							<div class="form-group">
								<h4><label class="col-md-3 control-label" style="padding-top: 10px">PH:</label></h4>
								<div class="col-md-9">
									<textarea name="ph" id="ph" placeholder="PH" readonly="" rows="1" style="min-height: 58px;"></textarea>
								</div>
							</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("select#crop_name").change(function(){
          var a = $("#crop_name option:selected").val();
      
          $.ajax({
              type: "POST",
              url: "n_urea.php", 
              data: { crop_name : a  } 
          }).done(function(data){
              $("#n_urea").html(data);
          });
      });
  });
</script>							

							<div class="form-group">
								<div class="col-md-3">
									<label class=" control-label" style="font-size: 1.2em"><b>N Value:</b></label><br>(Limits : <span id="n_urea">0</span>gm)
								</div>
								<div class="col-md-9">
									<input type="text" name="n_value" id="n_value" placeholder="N Value" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
								</div>
							</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("select#crop_name").change(function(){
          var b = $("#crop_name option:selected").val();
      
          $.ajax({
              type: "POST",
              url: "p_urea.php", 
              data: { crop_name : b  } 
          }).done(function(data){
              $("#p_urea").html(data);
          });
      });
  });
</script>							
							

							<div class="form-group">
								<div class="col-md-3">
									<label class=" control-label" style="font-size: 1.2em"><b>P Value:</b></label><br>(Limits : <span id="p_urea" >0</span>gm)
								</div>
								<div class="col-md-9">
									<input type="text" name="p_value" id="p_value" placeholder="P Value" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
								</div>
							</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("select#crop_name").change(function(){
          var c = $("#crop_name option:selected").val();
      
          $.ajax({
              type: "POST",
              url: "k_urea.php", 
              data: { crop_name : c  } 
          }).done(function(data){
              $("#k_urea").html(data);
          });
      });
  });
</script>							

							<div class="form-group">
								<div class="col-md-3">
									<label class=" control-label" style="font-size: 1.2em"><b>K Value:</b></label><br>(Limits : <span id="k_urea">0</span>gm)
								</div>
								<div class="col-md-9">
									<input type="text" name="k_value" id="k_value" placeholder="K Value" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
								</div>
							</div>


<script type="text/javascript">
  $(document).ready(function(){
    $("#show").click(function(){
          var n = $("#n_value").val();
          var p = $("#p_value").val();
          var k = $("#k_value").val();
          var a = $("#crop_name").val();
      
          $.ajax({
              type: "POST",
              url: "npk_result.php", 
              data: { n_value : n, p_value: p , k_value:k , crop_name:a  } 
          }).done(function(data){
              $("#result").html(data);
          });
      });
  });
</script>


							<div class="row">
								<div class="col-md-10 col-md-offset-3">
									<input type="button" class="col-md-5" value="Show" name="submit" id="show" style="background-color: #ffae00">
									<input type="reset" class="col-md-5" value="Clear" name="Clear" style="margin-left: 20px;">
								</div>
							</div>
						</form>
					</div>
					
						<div class="clearfix"></div>
				</div>
				<br><br><br><br>
				<div id="result"></div>
			</div>
		</div>
	<!-- //contact -->
	<!-- footer start here --> 
<?php
include "footer.php";
?>

