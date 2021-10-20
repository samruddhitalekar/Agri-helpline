<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Registered Officer</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> Registered Officer</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> Officer</li>
              <li class="active"><a href="#">Registered Officer</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    $disp=mysqli_query($connect,"select * from agriculture_officer where Officer_status ='Not_approved' ") or die(mysqli_error($connect));

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
                      <th>Status <br> Action</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Password</th>
                      <th>Status</th>
                      
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
          
                      <a href="officer_view.php?officer_id=<?=$Officer_id ?>" class="fa fa-eye text-info fa-2x" type="submit" name="view"   style="padding-left:10px;"></a>
          
                                                                          
                      <a href="officer_delete.php?officer_id=<?=$Officer_id ?>"  onclick="return confirm('Are you sure you want to delete this item?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a></td>
                      <td><a href="officer_reg_approved.php?officer_id=<?=$Officer_id ?>" class="fa fa-thumbs-o-up text-success fa-2x" type="submit" name="view" ></a>
          
                      <a href="officer_reg_disapproved.php?officer_id=<?=$Officer_id ?>" class="fa fa-thumbs-o-down text-danger fa-2x" type="submit" name="view"   style="padding-left:10px;" ></a></td>
                      <td><?php echo $fetch['Officer_name'];?></td>                      
                      <td><?php echo $fetch['Officer_email'];?></td>
                      <td><?php echo $fetch['Officer_mobile'];?></td>
                      <td><?php echo $fetch['Officer_password'];?></td>
                      <td><?php echo $fetch['Officer_status'];?></td>
                      
                      
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