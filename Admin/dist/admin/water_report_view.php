<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Water Report Details</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> Water Report Details</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> Water Report</li>
              <li class="active"><a href="#">Water Report Details</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select * from water_report") or die(mysqli_error($connect));

?>        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div style="overflow: scroll;">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Action</th>
                      <th>Parameters</th>
                      <th>Unit</th>
                      <th>Limit</th>    
                      <th>Limit1</th>    
                      <th>Remark</th>
                      <th>Remark1</th>    
                      <th>Remark2</th>
                      <th>Date</th>              
                      
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
                      <a href="water_report_edit.php?water_report_id=<?=$Water_report_id ?>" class="fa fa-pencil-square-o text-success fa-2x" type="submit" name="edit" ></a>          
                                                                          
                      <a href="water_report_delete.php?water_report_id=<?=$Water_report_id ?>"  onclick="return confirm('Are you sure you want to delete this item?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a></td>
                      <td><?php echo $fetch['Water_parameters'];?></td>                      
                      <td><?php echo $fetch['Water_unit'];?></td>
                      <td><?php echo $fetch['Water_limits'];?></td>
                      <td><?php echo $fetch['Water_limits1'];?></td>
                      <td><?php echo $fetch['Water_remark'];?></td>
                      <td><?php echo $fetch['Water_remark1'];?></td>
                      <td><?php echo $fetch['Water_remark2'];?></td>
                      <td><?php echo $fetch['Water_date'];?></td>
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