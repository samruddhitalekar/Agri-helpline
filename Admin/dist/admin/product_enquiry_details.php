<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Product Enquiry Details</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Product enquiry Details</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> Product</li>
              <li> Product List</li>
              <li>Product Enquiry</li>
              <li><a href="#">Product Enquiry Details</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

$sel=mysqli_query($connect,"select p.*,e.* from product p, product_enquiry e where p.Product_id=e.Product_id and Enquiry_id='".$_GET['enquiry_id']."'")or die(mysqli_error($connect));
$fetch=mysqli_fetch_array($sel);
 
 ?>       
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                      <fieldset>
                        <legend>Product Enquiry Details</legend>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Product Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Product name" name="product_name"   disabled  value="<?php echo $fetch['Product_name']; ?>">
                          </div>
                        </div>
                        

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Product Photo:</label>
                            <div class="col-lg-6">                              
                                  <img id="preview_img" src="../images/product/<?php echo $fetch['Product_photo']?>" height="100" width="100" />
                            </div>            
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Customer Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Customer name" name="customer_name"   disabled  value="<?php echo $fetch['En_customer_name']; ?>">
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="col-lg-3 control-label" >Customer Email:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Customer email" name="customer_email"   disabled  value="<?php echo $fetch['En_customer_email']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Customer Mobile:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Customer mobile" name="customer_mobile"   disabled  value="<?php echo $fetch['En_customer_mobile']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                        <label class="col-lg-3 control-label" >Address:</label>
                        <div class="col-lg-6">
                          <textarea class="form-control" type="text" placeholder="Address" name="address" disabled><?php echo $fetch['En_customer_address']; ?></textarea>
                        </div>
                      </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Duration:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Duration" name="duration" disabled  value="<?php echo $fetch['From_date']; ?> To <?php echo $fetch['To_date']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >No of Days:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="No of Days" name="no_of_days" disabled  value="<?php echo $fetch['No_of_days']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Rent:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Rent" name="rent" disabled  value="<?php echo $fetch['Rent']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Labour Rent:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Labour Rent" name="labour_rent" disabled  value="<?php echo $fetch['Labour_rent']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Total Rent:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Total Rent" name="total_rent" disabled  value="<?php echo $fetch['Total_rent']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Status:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Status" name="en_product_status" disabled  value="<?php echo $fetch['En_product_status']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Enquiry Date:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Enquiry Date" name="En_date" disabled  value="<?php echo $fetch['En_date']; ?>">
                          </div>
                        </div>
                      
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            <!-- <button class="btn btn-default" type="reset">Cancel</button> -->
                            <!-- <button class="btn btn-primary" type="submit" name="update">Update</button> -->
                            <a href="javascript:history.back()"><button class="btn btn-danger" type="button">मागे</button></a>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
     
   <?php include "footer.php" ?>

    

