<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Product details</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Product details</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Product</li>
              <li>Product List</li>
              <li><a href="#">Product details</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

$sel=mysqli_query($connect,"select p.*,c.* from product p, customer c where p.Customer_id=c.Customer_id and p.Product_id='".$_GET['product_id']."' ")or die(mysqli_error($connect));
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
                        <legend>Product details</legend>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Customer Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Product name" name="product_name" id="product"  disabled  value="<?php echo $fetch['Customer_name']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Product Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Product name" name="product_name" id="product"  disabled  value="<?php echo $fetch['Product_name']; ?>">
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Product Information:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="Product Information" name="product_information" disabled><?php echo $fetch['Product_information']; ?></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Product Photo:</label>
                            <div class="col-lg-6">                              
                                  <img id="preview_img" src="../images/product/<?php echo $fetch['Product_photo']?>" height="100" width="100" />
                            </div>            
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Rent For One Day:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Rent For One Day" name="rent" disabled  value="<?php echo $fetch['Product_rent']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Labour Charges:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Labour Charges" name="product_labour_charges" disabled  value="<?php echo $fetch['Product_labour_charges']; ?>">
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

    

