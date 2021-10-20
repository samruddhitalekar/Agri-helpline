<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Agro Assist | बातम्या आणि  योजना </title>
<?php
include "header.php";
include "config.php";

?>



  <!-- //banner --> 

  <!-- crop_calender -->
    <div class="mail">
      <div class="container">
        <div class="w3ls-heading">
          <h2 class="h-two">बातम्या आणि  योजना </h2>
          <p class="sub two"></p>
        </div>

        <div class="ab-agile">
          <div class="col-md-6 ab-text">
            <div class="w3ls-heading">          
              <p class="sub two">योजना</p>
            </div>
            <br><br>
             <table class="table table-hover table-bordered" id="sampleTable">
                          <thead>
                            <tr>
                              <th>अनु. क्र.</th>
                              <th>नाव</th>         
                              <th>डाउनलोड</th>   
                            </tr>
                          </thead>
                          <tbody>
                      <?php
                          $count=0;
                          $disp=mysqli_query($connect,"select * from scheme order by Scheme_id Desc") or die(mysqli_error($connect));
                          while ($fetch=mysqli_fetch_array($disp))
                           {
                              extract($fetch);
                      ?>  
                            <tr>
                              <td><?php echo ++$count;?></td>                                         
                              <td><?php echo $fetch['Scheme_name'];?></td>
                              <td><a href="Admin/dist/images/scheme/<?php echo $fetch['Scheme_file'];?>" target="_Blank" /><button class="btn" style="background-color: #ffae00; color: white">Document</button></a></td>
                          </tr>
                      <?php } ?>
                            
                          </tbody>
                </table>

          </div>
          
          <div class="col-md-6 ab-text" style="">
            <div class="w3ls-heading">          
              <p class="sub two">बातम्या</p>
            </div>
            <br><br>
            <ul class="ab">
              <?php
                  $disp1=mysqli_query($connect,"select * from news order by News_id Desc") or die(mysqli_error($connect));
                  while ($fetch1=mysqli_fetch_array($disp1))
                   {
                      extract($fetch1);
              ?>
              <li><i class="fa fa-angle-right" aria-hidden="true" style="padding-right: 10px;"></i><?php echo $fetch1['News'];?></li>
              <?php } ?>              
              
            </ul>
          </div>
          <div class="clearfix"> </div>
        </div>
            
      </div>
    </div>
  <!-- //crop_calender -->
  <!-- footer start here --> 
<?php
include "footer.php";
?>