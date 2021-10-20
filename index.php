<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist | Home </title>
<?php
include "index_header.php";
include "config.php";
?>
<!-- //header -->	
		   
	</div>
	<!-- //banner --> 
<!-- welcome -->
	<div class="features">
		<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">बातम्या आणि  योजना</h2>
				<p class="sub two"></p>
			</div>
		<div class="w3-agile-top-info">	
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5>बातम्या</h5>
					<ul class="ab">
		              <?php
		                  $disp1=mysqli_query($connect,"select * from news order by News_id Desc limit 2") or die(mysqli_error($connect));
		                  while ($fetch1=mysqli_fetch_array($disp1))
		                   {
		                      extract($fetch1);
		              ?>
		              <li style="text-align: justify; font-size: 20px;"><a href="news_schemes.php"><i class="fa fa-angle-right" aria-hidden="true" style="padding-right: 10px;"></i><?php echo $fetch1['News'];?></a></li>
		              <?php } ?>              
		              
		            </ul>
					<a href="news_schemes.php"/><button class="btn" style="background-color: #ffae00; color: white">अधिक वाचा</button></a>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/news.jpg" alt="" style="margin-top: 64px;" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/agro_schemes.jpg" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>योजना</h5>
					<ul class="ab">
		              <?php
		                  $disp=mysqli_query($connect,"select * from scheme order by Scheme_id Desc limit 4") or die(mysqli_error($connect));
		                  while ($fetch=mysqli_fetch_array($disp))
		                   {
		                      extract($fetch);
		              ?>
		              <li style="text-align: justify; font-size: 20px;"><a href="news_schemes.php"><i class="fa fa-angle-right" aria-hidden="true" style="padding-right: 10px;"></i><?php echo $fetch['Scheme_name'];?></a></li>
		              <?php } ?>              
		              
		            </ul>
					<a href="news_schemes.php"/><button class="btn" style="background-color: #ffae00; color: white">अधिक वाचा</button></a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
        
        
        
	</div>
</div>


	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">पिके</h3>
				<p class="sub two"></p>
			</div>
			<div class="w3-agileits-services-grids"> 
				<div class="col-md-6 w3-agileits-services-right">
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
                        
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-anchor" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>फळे व भाज्या</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>फुले</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>तेलबिया</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-ship" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>डाळी</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
							<i class="fa fa-truck" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>मसाले</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-pagelines" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>औषधी व सुगंधी वनस्पती</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div><br>
					
				</div>
				<div class="col-md-6 w3-agileits-services-left">
					<!-- <img src="images/vegetables_rice_still_life.jpg" style="height: 500px; padding: 5em 3em;width: 100%"> -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">प्रश्न </h3>
				<p class="sub two">येथे आपला प्रश्न विचारा</p>
			</div>
			<form method="post"> 
				<input type="text" name="question" placeholder="येथे आपला प्रश्न टाका" required>
				<input type="submit" name="submit" value="सबमिट">
				<div class="clearfix"> </div> 
			</form> 
		</div> 
	</div>
	<!-- //newsletter -->
	
<?php
include "footer.php";
?>
<?php
        include "config.php";
        if(isset($_POST['submit']))
        {
            extract($_POST);
            
                $query=mysqli_query($connect,"insert into question (Question) values('$question')")or die (mysqli_error($connect));
                
                if($query)
                {
                    echo '<script type="text/javascript">;';
                    echo "alert('प्रश्न सबमिट केला !');";
                    echo '</script>';
                }
                else
                {
                    echo '<script type="text/javascript">;';
                    echo "alert('प्रश्न सबमिट केला नाही !');";
                    echo '</script>';
                }
            
    
        }
        
?>