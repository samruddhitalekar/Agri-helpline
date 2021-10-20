<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>पीक बघा</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> पीक तपशील </h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> पीक</li>
              <li class="active"><a href="#">पीक बघा</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select * from crop") or die(mysqli_error($connect));

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
                      <th>पीक प्रकार</th>
                      <th>नाव</th>
                      <th>फोटो</th>
                      <th>फाईल</th>                      
                      <th>माहिती</th>                      
                                   
                      
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
                      <a href="crop_edit.php?crop_id=<?=$Crop_id ?>" class="fa fa-pencil-square-o text-success fa-2x" type="submit" name="edit" style="padding-left:10px;"></a>          
                                                                          
                      <a href="crop_delete.php?crop_id=<?=$Crop_id ?>"  onclick="return confirm('आपली खात्री आहे की आपण हे पीक हटवू इच्छिता?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a></td>
                      <td><?php echo $fetch['Crop_type'];?></td>                      
                      <td><?php echo $fetch['Crop_name'];?></td>
                      <td><img src="../images/crop_photo/<?php echo $fetch['Crop_photo']?>" height="50" width="50" /></td>
                      <td><a href="../images/crop_file/<?php echo $fetch['Crop_file']?>" target="_Bank" style="font-size: 14px;color:black"/>बघा</a><br>
                          <!-- <a href="../images/crop_file/<?php echo $fetch['Crop_file']?>" class="fa fa-download" Download/></a> -->
                      </td>
                      <td><?php echo $fetch['Crop_description'];?>
                        
                        <!-- <?php 
                            $crop_desc=$fetch['Crop_description'];
                            $crop_description = substr($crop_desc,0,500);
                            echo $crop_description;
                        ?> -->
                      </td>
                      
                                           
                      
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