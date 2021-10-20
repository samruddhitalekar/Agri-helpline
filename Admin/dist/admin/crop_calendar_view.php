<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>पीक दिनदर्शिका बघा</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> पीक दिनदर्शिका तपशील </h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> पीक दिनदर्शिका</li>
              <li class="active"><a href="#">पीक दिनदर्शिका बघा</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select * from crop_calender order by Calender_id Desc") or die(mysqli_error($connect));

?>        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div style="overflow: scroll;">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>अनु. क्र.</th>
                      <th>कृती</th>
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
                  while ($fetch=mysqli_fetch_array($disp))
                   {
                      extract($fetch);
              ?>  
                    <tr>
                      <td><?php echo ++$count;?></td>
                      <td>          
                      <a href="crop_calendar_edit.php?calender_id=<?=$Calender_id ?>" class="fa fa-pencil-square-o text-success fa-2x" type="submit" name="edit" style="padding-left:10px;"></a>          
                                                                          
                      <a href="crop_calendar_delete.php?calender_id=<?=$Calender_id ?>"  onclick="return confirm('आपली खात्री आहे की आपण हे पीक दिनदर्शिका हटवू इच्छिता?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a></td>                   
                      <td><?php echo $fetch['Calender_crop_name'];?></td>                      
                      <td><?php echo $fetch['Crop_season'];?></td>   
                      <td><?php echo $fetch['Start_month'];?> - <?php echo $fetch['End_month'];?>
                        (<?php echo $fetch['Crop_duration'];?> महिने)
                      </td>
                      <td><?php echo $fetch['Crop_step'];?></td>   
                      <td><img src="../images/calender_crop_photo/<?php echo $fetch['Calender_crop_photo']?>" height="50" width="50" /></td>                      
                      
                      
                                           
                      
                  </tr>
              <?php } ?>
                    
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include "footer.php" ?>