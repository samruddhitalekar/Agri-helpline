<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Approved Customer</title>
    
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-check-square-o"></i> Approved Customer</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> Customer</li>
              <li class="active"><a href="#">Approved Customer</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    $disp=mysqli_query($connect,"select * from customer where Customer_status ='approved' ") or die(mysqli_error($connect));

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
                      <td><a href="customer_view.php?customer_id=<?=$Customer_id ?>" class="fa fa-eye text-info fa-2x" type="submit" name="view"   style="padding-left:10px;"></a>          
                                                                          
                      <a href="customer_delete.php?customer_id=<?=$Customer_id ?>"  onclick="return confirm('Are you sure you want to delete this item?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a></td>
                      <td><a href="customer_reg_disapproved.php?customer_id=<?=$Customer_id ?>" class="fa fa-thumbs-o-down text-danger fa-2x" type="submit" name="view" ></a></td>
                      <td><?php echo $fetch['Customer_name'];?></td>                      
                      <td><?php echo $fetch['Customer_email'];?></td>
                      <td><?php echo $fetch['Customer_mobile'];?></td>
                      <td><?php echo $fetch['Customer_password'];?></td>
                      <td><?php echo $fetch['Customer_status'];?></td>
                      
                      
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