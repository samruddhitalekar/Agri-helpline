<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist | Crops</title>
<?php
include "header.php";
include "config.php";
?>

	<!-- //banner --> 
<!-- portfolio -->
		<div class="banner-bottom">
			<div class="container">

				
			<div class="w3ls-heading">
				<h2 class="h-two">पिके</h2>
<p class="sub two"></p>
			</div>
<br><br>
			<form method="post">
					<div class="row">
						<div class="col-md-1 col-md-offset-3">
							<label style="padding-top: 10px">पीक प्रकार:</label>
						</div>
						<div class="col-md-5">
							<select name="crop_type" id="crop_type" class="form-control">
								<option value="">पीक प्रकार निवडा</option>
                              <option value="फळे">फळे</option>
                              <option value="भाज्या">भाज्या</option>
                              <option value="फुले">फुले</option>
                              <option value="तेलबिया">तेलबिया</option>
                              <option value="डाळी">डाळी</option>
                              <option value="मसाले">मसाले</option>
                              <option value="औषधी व सुगंधी वनस्पती">औषधी व सुगंधी वनस्पती</option>
								
							</select>
						</div>
						<div class="col-md-1"></div>
					</div>					
				</form>
				<div class="w3ls_portfolio_grids">

				<span id="result"></span>
	<div class="clearfix"> </div>
</div>
				
		</div>
	</div>
<!-- portfolio -->
	<?php
	include "footer.php";
	?>

	<script type="text/javascript">
    $(document).ready(function(){
      $("select#crop_type").change(function(){
            var o = $("#crop_type option:selected").val();
        
            $.ajax({
                type: "POST",
                url: "crop_information.php", 
                data: { crop_type : o  } 
            }).done(function(data){
                $("#result").html(data);
            });
        });
    });
  </script>

  <script>
$(document).ready(function(){
    load_data();
    function load_data(query)
    {
        // var query =$(this).val();
        $.ajax({
            url:"crop_information.php",
            method:"post",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
        });
    }
    
});
</script>