<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Product Enquiry</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> Product Enquiry</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> Product Enquiry</li>
              <li class="active"><a href="#">Product Enquiry</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select p.*,e.* from product p, product_enquiry e where p.Product_id=e.Product_id and p.Customer_id='".$_SESSION['customer_id']."'") or die(mysqli_error($connect));

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
                      <!-- <th>Status Action</th> -->
                      <th>Product Name</th>
                      <th>Name</th>
                      <th>Mobile</th>                      
                      <th>Address</th>
                      <th>Duration</th>              
                      <th>No of Days</th>                      
                      <th>Rent</th>             
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
                      <a href="product_enquiry_details.php?enquiry_id=<?=$Enquiry_id ?>" class="fa fa-eye text-info fa-2x" type="submit" name="edit" ></a>          
                                                                          
                      <a href="product_enquiry_delete.php?enquiry_id=<?=$Enquiry_id ?>"  onclick="return confirm('Are you sure you want to delete this item?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a>
                      
                      <!-- <a href="product_enquiry_booked.php?enquiry_id=<?=$Enquiry_id ?> & product_id=<?=$Product_id ?>" class="fa fa-thumbs-o-up text-success fa-2x" type="submit" name="view" ></a> -->

                        <?php if ($fetch['En_product_status']!="Cancel"){?>
          
                      <a href="product_enquiry_cancel.php?enquiry_id=<?=$Enquiry_id ?> & product_id=<?=$Product_id ?>" class="fa fa-times text-danger fa-2x" type="submit" name="Cancel " style="padding-left:10px;" ></a>
                      <?php } ?>
                    </td>
                      
                      <td><a href="product_details.php?product_id=<?=$Product_id ?>"><?php echo $fetch['Product_name'];?></a></td>                      
                      <td><?php echo $fetch['En_customer_name'];?></td>
                      <td><?php echo $fetch['En_customer_mobile'];?></td>
                      <td><?php echo $fetch['En_customer_address'];?></td>
                      <td><?php echo $fetch['From_date'];?> To <?php echo $fetch['To_date'];?></td>
                      <td><?php echo $fetch['No_of_days'];?></td>
                      <td><?php echo $fetch['Total_rent'];?></td>                     
                      <td><?php echo $fetch['En_product_status'];?></td>                     
                      
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