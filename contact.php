<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist | संपर्क </title>
<?php
include "header.php";
?>
	<!-- //banner --> 
<?php
        include "config.php";
        if(isset($_POST['submit']))
        {
            extract($_POST);
            $email=$_POST['email'];

        if(filter_var($email, FILTER_VALIDATE_EMAIL) )
    		{
                $query=mysqli_query($connect,"insert into contact (Contact_name, Contact_email, Contact_mobile, Contact_message) values('$name', '$email', '$mobile','$message')")or die (mysqli_error($connect));
                
                if($query)
                {
                    echo '<script type="text/javascript">;';
                    echo "alert('आम्हाला संपर्क केल्याबद्दल आभारी आहोत !');";
                    echo '</script>';
                }
                else
                {
                    echo '<script type="text/javascript">;';
                    echo "alert('संपर्क त्रुटी !');";
                    echo '</script>';
                }
            }
            else
    		{
    
    			 echo '<script type="text/javascript">';
                       echo "alert('ईमेल अवैध आहे.');";
                       echo '<script>';
    		}
     
    
        }
        
?>	
	<!-- contact -->
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">संपर्क</h2>
					<p class="sub two"></p>
				</div>
				<div class="agileits_mail_grids">
					<div class="col-md-6 agileits_mail_grid_left">
						<form  method="post">
							<h4>नाव</h4>
							<input type="text" name="name" placeholder="नाव" required >
							<h4>ईमेल आयडी</h4>
							<input type="email" name="email" placeholder="ईमेल आयडी" required pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$">
							<h4>मोबाइल नंबर </h4>
							<input type="text" name="mobile" placeholder="मोबाइल नंबर" required maxlength="10" pattern="[789]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
							<h4>संदेश</h4>
							<textarea placeholder="संदेश" name="message"></textarea>
							<div class="row">
								<div class="col-md-10">
									<input type="submit" value="संदेश पाठवा" name="submit">
								
									<!-- <input type="button" value="रीसेट करा" name="clear"> -->
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6 agileits_mail_grid_right">
						<div class="agile-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.043527141631!2d73.78554181445624!3d20.006687786560796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddebaead9a4d49%3A0xfd6c10f8929d7902!2sSUMAGO+INFOTECH!5e0!3m2!1sen!2sin!4v1511850890187" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="left-agileits">
							<h3>Address</h3>
								<ul>
									<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Off.n.h.8a(bamanhor-morvil),mesariya road,rangapar village,</li>
									<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
									<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>tal-wakaner,dist.rajkot,gujarat,india</li>
								</ul>
						</div>
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