<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist | प्रश्न/उत्तर </title>
<?php
include "header.php";
?>
	<!-- //banner --> 
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
	<!-- question -->
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">प्रश्न/उत्तर</h2>
					<p class="sub two">येथे तुमच्या शंका विचारा</p>
				</div>
				<div class="agileits_mail_grids">
					
					<div class="col-md-2"></div>
					<div class="col-md-10 agileits_mail_grid_left">
						<form method="post">
							<div class="row">
								<div class="col-md-1">
									<h4>प्रश्न:</h4>
								</div>
								<div class="col-md-7">
									<textarea placeholder="तुमचा प्रश्न" name="question" rows="3"></textarea>
								</div>
								<div class="col-md-4">
									<input type="submit" value="सबमिट करा" name="submit">
								</div>
							</div>
						</form>
							
						</form>
					</div>
					
					
					<div class="clearfix"></div>
					
				</div>
			</div>
		</div>
	<!-- //question -->

	<!-- question-answer -->
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">प्रश्नांची उत्तरे</h2>
					<p class="sub two"></p>
				</div>
				<div class="ab-agile">
					<div class="col-md-12 ab-text">				
<?php
	$disp=mysqli_query($connect,"select distinct a.Question_id, q.* from question q, question_answer a where q.Question_id=a.Question_id order by q.Question_id desc") or die(mysqli_error($connect));

	$count=0;
	while ($fetch=mysqli_fetch_array($disp))
	{
      	extract($fetch);
      	$question_id=$fetch['Question_id'];
?>  
			<p align="justify" style="font-size:19px"><?php echo ++$count;?>. <u><?php echo $fetch['Question'];?></u></p>
    	<?php /*echo ++$count;?> . <u><b><?php echo $fetch['Question'];?></b></u><?php */?>

			<ul class="ab">                  
<?php 

		$view=mysqli_query($connect,"select * from question_answer where Question_id='$question_id' order by Question_answer_id desc") or die(mysqli_error($connect));
		while ($fetch1=mysqli_fetch_array($view))
		{
	      	extract($fetch1);
?>
			<li style="padding-left: 30px;"><i class="fa fa-angle-right" aria-hidden="true"></i><span style="margin-left: 10px;"></span><?php echo $fetch1['Answer'];?></li>
<?php	      	
	    }
?>
		</ul>
<?php

	} 
?>
                    
                    </div>
				</div>
			</div>
		</div>
	<!-- //question-answer -->
	<!-- footer start here --> 
<?php
include "footer.php";
?>