<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Profile</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Officer Profile</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Setting</li>
              <li><a href="#">Officer Profile</a></li>
            </ul>
          </div>
        </div>
<?php
    
    
include 'config.php';

$select=mysqli_query($connect,"select * from agriculture_officer where Officer_email='".$_SESSION['officer_email']."' ") or die(mysqli_error($connect));
 $fetch=mysqli_fetch_array($select);
    
?>        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                      <fieldset>
                        <legend>Profile</legend>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Name" name="name" value="<?php echo $fetch['Officer_name']; ?>" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Email:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="email" placeholder="Email" name="email"  value="<?php echo $fetch['Officer_email']; ?>" Disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Mobile No:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Mobile" name="mobile" maxlength="10" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $fetch['Officer_mobile']; ?>" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Gender:</label>
                          <div class="col-lg-6">
                            <div class="radio">
                              <label>
                                <input id="male" type="radio" name="gender" value="Male" <?php if($fetch['Officer_gender']=="Male"){ echo "checked";}?> required>Male
                              
                                <span  style="margin-left: 50px;">
                                <input id="female" type="radio" name="gender" value="Female" <?php if($fetch['Officer_gender']=="Female"){ echo "checked";}?> required>Female
                                </span>
                              </label>            
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label" >Address:</label>
                        <div class="col-lg-6">
                          <textarea class="form-control" type="text" placeholder="Address" name="address" required><?php echo $fetch['Officer_address']; ?></textarea>
                        </div>
                      </div>

                      

                        <div class="form-group">
                          <label class="col-lg-3 control-label" for="inputEmail">Photo:</label>
                          <div class="col-lg-6">
                            <div class="preview_box">
                              <?php 
                                  if($fetch['Officer_photo']=="")
                                  {
                              ?>
                                    <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
                              <?php 
                                  }
                                  else
                                  {
                               ?>
                                  <img id="preview_img" src="../images/officer/<?php echo $fetch['Officer_photo']?>" height="100" width="100" />

                                  <?php } ?>
                          
                              <input type="file" id="image" name="photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                      
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-3 control-label" >Status:</label>
                        <div class="col-lg-6">
                          <input class="form-control" type="text" placeholder="Status" name="Status" value="<?php echo $fetch['Officer_status']; ?>" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label" >Date :</label>
                        <div class="col-lg-6">
                          <input class="form-control" type="text" placeholder="Date" name="Date" value="<?php echo $fetch['Officer_date']; ?>" disabled>
                        </div>
                      </div>
                        
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                            <!-- <button class="btn btn-default" type="reset">Cancel</button> -->
                            
<?php
 if(isset($_POST['update']))
{
 extract($_POST);
 
  $name1=$_FILES['photo']['name'];
  $type=$_FILES['photo']['type'];
  $size=$_FILES['photo']['size'];
  $temp=$_FILES['photo']['tmp_name'];
  if($name1){
 $upload= "../images/officer/";
            $imgExt=strtolower(pathinfo($name1, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $photo= rand(1000,1000000).".".$imgExt;
            unlink($upload.$fetch['Officer_photo']);
            move_uploaded_file($temp,$upload.$photo);
  }
  else
  {
      $photo=$fetch['Officer_photo'];
      }
 $update=mysqli_query($connect,"update agriculture_officer set
            Officer_name='".$_POST['name']."',
            Officer_mobile='".$_POST['mobile']."',
            Officer_address='".$_POST['address']."',            
            Officer_gender='".$_POST['gender']."',
            Officer_photo='".$photo."'
           
            where Officer_email='".$_SESSION['officer_email']."' ") or die(mysqli_error($connect));
 if($update)
        {
          echo '<script type="text/javascript">';
          echo "alert('Profile Updated.');";
          echo 'window.location.href="profile.php";';
          echo "</script>";
          
        }
        else
        {
           echo '<script type="text/javascript">';
           echo "alert('Profile not update');";
           echo '<script>';
        
        }
}

 ?> 
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
   <script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image").change(function(){
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

    


    

    
        