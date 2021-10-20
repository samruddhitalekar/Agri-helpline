<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>NPK Details</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> NPK Details</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> NPK</li>
              <li class="active"><a href="#">NPK Details</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select * from npk") or die(mysqli_error($connect));

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
                      <th>Crop Name</th>
                      <th>PH</th>
                      <th>N Value</th>    
                      <th>N Urea</th>
                      <th>P Value</th>    
                      <th>P Urea</th>
                      <th>K Value</th>    
                      <th>K Urea</th>
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
                      <a href="npk_edit.php?npk_id=<?=$NPK_id ?>" class="fa fa-pencil-square-o text-success fa-2x" type="submit" name="edit" style="padding-left:10px;"></a>          
                                                                          
                      <a href="npk_delete.php?npk_id=<?=$NPK_id ?>"  onclick="return confirm('Are you sure you want to delete this item?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a></td>
                      <td><?php echo $fetch['NPK_crop_name'];?></td>                      
                      <td><?php echo $fetch['PH'];?></td>
                      <td><?php echo $fetch['N_value'];?></td>
                      <td><?php echo $fetch['N_urea'];?></td>
                      <td><?php echo $fetch['P_value'];?></td>
                      <td><?php echo $fetch['P_urea'];?></td>
                      <td><?php echo $fetch['K_value'];?></td>
                      <td><?php echo $fetch['K_urea'];?></td>
                      <td><?php echo $fetch['NPK_date'];?></td>

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