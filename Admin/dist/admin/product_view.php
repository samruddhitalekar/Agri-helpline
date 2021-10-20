<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Product List</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> Product List</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> Product</li>
              <li class="active"><a href="#">Product List</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select * from product where Customer_id='".$_GET['customer_id']."'") or die(mysqli_error($connect));

?>        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <u><span style="font-size: 18px"><b>Customer name : </b> <?php echo $_GET['customer_name'];?></span><u><br><br>
                <div style="overflow: scroll;">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Product Details</th>
                      <th>Product Enquiry</th>
                      <th>Product Name</th>
                      <th>Information</th>                      
                      <th>Photo</th>
                      <th>Rent</th>
                      <th>Labour Charges</th>              
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
                      <td><a href="product_details.php?product_id=<?=$Product_id ?>" class="fa fa-eye text-info fa-2x" type="submit" name="view" style="padding-left:10px;"></a></td>
                      <td><a href="product_enquiry.php?product_id=<?=$Product_id ?>&product_name=<?=$Product_name ?>" class="fa fa-th-list text-info fa-2x" type="submit" name="view" style="padding-left:10px;"></a></td>
                      <td><?php echo $fetch['Product_name'];?></td>                      
                      <td><?php echo $fetch['Product_information'];?></td>
                      <td><img src="../images/product/<?php echo $fetch['Product_photo']?>" height="50" width="50" /></td>
                      <td><?php echo $fetch['Product_rent'];?></td>
                      <td><?php echo $fetch['Product_labour_charges'];?></td>                     
                      <td><?php echo $fetch['Product_status'];?></td>                     
                      
                  </tr>
              <?php } ?>
                    
                  </tbody>
                </table>
              </div>
              <br>
              <center>
                <a href="javascript:history.back()"><button class="btn btn-danger" type="button">मागे</button></a>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include "footer.php" ?>