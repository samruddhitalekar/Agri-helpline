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
            <h1><i class="fa fa-edit"></i> User Profile</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Setting</li>
              <li><a href="#">User Profile</a></li>
            </ul>
          </div>
        </div>
<?php
    
    
include 'config.php';

$select=mysqli_query($connect,"select * from admin where Email='".$_SESSION['email']."' ") or die(mysqli_error($connect));
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
                          <label class="col-lg-3 control-label" for="inputEmail">Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="name" type="text" placeholder="Name" name="name" value="<?php echo $fetch['Name']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" for="inputEmail">Email:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="email" type="email" placeholder="Email" name="email" value="<?php echo $fetch['Email']; ?>" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" for="inputEmail">Photo:</label>
                          <div class="col-lg-6">
                            <div class="preview_box">
                              <?php 
                                  if($fetch['Photo']=="")
                                  {
                              ?>
                                    <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
                              <?php 
                                  }
                                  else
                                  {
                               ?>
                                  <img id="preview_img" src="../images/admin/<?php echo $fetch['Photo']?>" height="100" width="100" />

                                  <?php } ?>
                          
                              <input type="file" id="image" name="photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                      
                          </div>
                          </div>
                        </div>
                        
                        
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                            <!-- <button class="btn btn-default" type="reset">Cancel</button> -->
                            
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

    <?php
 if(isset($_POST['update']))
{
 extract($_POST);
 
  $name=$_FILES['photo']['name'];
  $type=$_FILES['photo']['type'];
  $size=$_FILES['photo']['size'];
  $temp=$_FILES['photo']['tmp_name'];
  if($name){
 $upload= "../images/admin/";
            $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $photo= rand(1000,1000000).".".$imgExt;
            unlink($upload.$fetch['Photo']);
            move_uploaded_file($temp,$upload.$photo);
  }
  else
  {
      $photo=$fetch['Photo'];
      }
 $update=mysqli_query($connect,"update admin set
            Name='".$_POST['name']."',
            Email='".$_POST['email']."',
            Photo='".$photo."'
            where Email='".$_SESSION['email']."' ") or die(mysqli_error($connect));
 if($update)
                          {
       echo '<script type="text/javascript">';
       echo " alert('Record Updated');";
       echo 'window.location.href = "profile.php";';
       echo '</script>';
  
                      }
                     else
                     {
       echo '<script type="text/javascript">';
       echo " alert('Record Not Updated');";
       echo '<script>';
                        
  
                     }
}

 ?> 


    

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
        </script>