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
include "config.php";

?>

	<!-- //banner --> 

	<!-- crop_calender -->
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">प्रश्नांची उत्तरे</h2>
					<p class="sub two"></p>
				</div>
				<br><br>
				<table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>अनु. क्र.</th>
                      <th>नाव</th>
                      <th>हंगाम</th>
                      <th>पिकाचा कालावधी</th>
                      <th>पद्धत</th>                      
                      <th>फोटो</th>                      
                                   
                      
                    </tr>
                  </thead>
                  <tbody>
              <?php
                  $count=0;
                  $disp=mysqli_query($connect,"select * from crop_calender order by Calender_id Desc") or die(mysqli_error($connect));
                  while ($fetch=mysqli_fetch_array($disp))
                   {
                      extract($fetch);
              ?>  
                    <tr>
                      <td><?php echo ++$count;?></td>                                         
                      <td><?php echo $fetch['Calender_crop_name'];?></td>                      
                      <td><?php echo $fetch['Crop_season'];?></td>   
                      <td><?php echo $fetch['Start_month'];?> - <?php echo $fetch['End_month'];?>
                        (<?php echo $fetch['Crop_duration'];?> महिने)
                      </td>
                      <td><?php echo $fetch['Crop_step'];?></td>   
                      <td><span data-toggle = "modal"  data-target="#model<?php echo $fetch['Calender_id'];?>" style="padding-left:10px"><a href="#model<?php echo $fetch['Calender_id'];?>" data-placement="bottom" title="edit" data-toggle="tooltip"><img src="Admin/dist/images/calender_crop_photo/<?php echo $fetch['Calender_crop_photo']?>" height="50" width="50" /></a></span></td>                      
                      
<div id = "model<?php echo $fetch['Calender_id'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                    	<button type="button" class="close" data-dismiss="modal">&times;</button>
                        <embed src="Admin/dist/images/calender_crop_photo/<?php echo $fetch['Calender_crop_photo']?>"
                               frameborder="0" width="100%" height="400px">                        
                    </div>

                </div>
            </div>
        </div>               
                                           
                      
                  </tr>
              <?php } ?>
                    
                  </tbody>
                </table>
			</div>
		</div>
	<!-- //crop_calender -->
	<!-- footer start here --> 
<?php
include "footer.php";
?>