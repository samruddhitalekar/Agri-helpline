<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Product </title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> Product </h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <!-- <li> Product</li> -->
              <li class="active"><a href="#">Product</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select p.*,c.* from product p, customer c where p.Customer_id=c.Customer_id group by p.Customer_id") or die(mysqli_error($connect));

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
                      <th>Customer </th>
                      <th>Customer ID</th>
                      <th>Customer Name</th>
                      <th>Product List</th>
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
                      <td><a href="customer_view.php?customer_id=<?=$Customer_id ?>" class="fa fa-eye text-info fa-2x" type="submit" name="view" style="padding-left:10px;"></a></td>
                      <td><?php echo $fetch['Customer_id'];?></td>
                      <td><?php echo $fetch['Customer_name'];?></td>
                      <td><a href="product_view.php?customer_id=<?=$Customer_id ?>&customer_name=<?=$Customer_name ?>" class="fa fa-th-list text-info fa-2x" type="submit" name="view" style="padding-left:10px;"></a></td>
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