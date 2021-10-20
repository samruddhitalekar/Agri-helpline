<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Add Product</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add Product</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Product</li>
              <li><a href="#">Add Product</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
{
 extract($_POST);

  $product_photo1=$_FILES['product_photo']['name'];
  $type=$_FILES['product_photo']['type'];
  $size=$_FILES['product_photo']['size'];
  $temp=$_FILES['product_photo']['tmp_name'];

  if($product_photo1){
  $upload= "../images/product/";
            $imgExt=strtolower(pathinfo($product_photo1, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $product_photo= rand(1000,1000000).".".$imgExt;
            
            move_uploaded_file($temp,$upload.$product_photo);
  }

 
 
 $add=mysqli_query($connect,"insert into product(Customer_id, Product_name, Product_information, Product_photo, Product_rent, Product_labour_charges) values('".$_SESSION['customer_id']."', '$product_name', '$product_information','$product_photo', '$rent', '$product_labour_charges')") or die(mysqli_error($connect));

 
 
  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('Product Inserted.');";
    echo 'window.location.href="product_add.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('Product not insert');";
       echo '<script>';
    
    }
}
 
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
                          <label class="col-lg-3 control-label" >Product Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Product name" name="product_name" id="product"  required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Product Information:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="Product Information" name="product_information" required></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Product Photo:</label>
                            <div class="col-lg-6">
                              
                              <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/><br>
                              
                              <input type="file" id="product_photo" name="product_photo" class="fileinput" accept=" .png, .jpg, .jpeg " required/>
                            </div>            
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Rent For One Day:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Rent For One Day" name="rent" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Labour Charges:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Labour Charges" name="product_labour_charges" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>
                      
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            <!-- <button class="btn btn-default" type="reset">Cancel</button> -->
                            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            <button class="btn btn-danger" type="reset" name="reset">Reset</button>
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

    <script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#product_photo").change(function(){
                    readImageData(this);//Call image read and render function
                });
            });
             
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>

