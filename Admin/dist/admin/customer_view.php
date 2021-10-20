<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>View Customer</title>
  
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> View Customer</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Customer</li>
              <li><a href="#">View Customer</a></li>
            </ul>
          </div>
        </div>
<?php
 if(isset($_GET['customer_id']))
{
 extract($_POST);
 include 'config.php';

 $select=mysqli_query($connect,"select * from customer where Customer_id='".$_GET['customer_id']."'") or die(mysqli_error($connect));
 $fetch=mysqli_fetch_array($select);
 
 ?>       
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post">
                      <fieldset>
                        <legend>Customer Profile</legend>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Name" name="name" value="<?php echo $fetch['Customer_name']; ?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Email:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="email" placeholder="Email" name="email"  value="<?php echo $fetch['Customer_email']; ?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Mobile No:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Mobile" name="mobile" maxlength="10" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $fetch['Customer_mobile']; ?>" disabled >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Gender:</label>
                          <div class="col-lg-6">
                            <div class="radio">
                              <label>
                                <input id="male" type="radio" name="gender" value="Male" <?php if($fetch['Customer_gender']=="Male"){ echo "checked";}?> disabled>Male
                              
                                <span  style="margin-left: 50px;">
                                <input id="female" type="radio" name="gender" value="Female" <?php if($fetch['Customer_gender']=="Female"){ echo "checked";}?> disabled>Female
                                </span>
                              </label>            
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label" >Address:</label>
                        <div class="col-lg-6">
                          <textarea class="form-control" type="text" placeholder="Address" name="address" disabled><?php echo $fetch['Customer_address']; ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label" >Password:</label>
                        <div class="col-lg-6">
                          <input class="form-control" type="text" placeholder="Password" name="password" value="<?php echo $fetch['Customer_password']; ?>" disabled>
                        </div>
                      </div>
          
                      <div class="form-group">
                        <label class="col-lg-3 control-label" >Photo:</label>
                          <div class="col-lg-6">
                            <?php 
                                if($fetch['Customer_photo']=="")
                                {
                            ?>
                                  <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
                            <?php 
                                }
                                else
                                {
                             ?>
                                <img id="preview_img" src="../images/customer/<?php echo $fetch['Customer_photo']?>" height="100" width="100" />

                            <?php } ?>
                          </div>            
                      </div>

                        <div class="form-group">
                        <label class="col-lg-3 control-label" >Status:</label>
                        <div class="col-lg-6">
                          <input class="form-control" type="text" placeholder="Status" name="Status" value="<?php echo $fetch['Customer_status']; ?>" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label" >Date :</label>
                        <div class="col-lg-6">
                          <input class="form-control" type="text" placeholder="Date" name="Date" value="<?php echo $fetch['Date']; ?>" disabled>
                        </div>
                      </div>
                        
<?php } ?>                        
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            <!-- <button class="btn btn-default" type="reset">Cancel</button> -->
                            <a href="javascript:history.back()"><button class="btn btn-primary" type="button" name="change">Cancel</button></a>
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