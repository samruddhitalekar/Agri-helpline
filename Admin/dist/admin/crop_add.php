<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>पीक समाविस्ट करा</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> पीक समाविस्ट करा</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>पीक</li>
              <li><a href="#">पीक समाविस्ट करा</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
{
 extract($_POST);

  $crop_photo1=$_FILES['crop_photo']['name'];
  $type1=$_FILES['crop_photo']['type'];
  $size1=$_FILES['crop_photo']['size'];
  $temp1=$_FILES['crop_photo']['tmp_name'];

  if($crop_photo1){
  $upload= "../images/crop_photo/";
            $imgExt=strtolower(pathinfo($crop_photo1, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $crop_photo= rand(1000,1000000).".".$imgExt;
            
            move_uploaded_file($temp1,$upload.$crop_photo);
  }

$crop_file1=$_FILES['crop_file']['name'];
  $type2=$_FILES['crop_file']['type'];
  $size2=$_FILES['crop_file']['size'];
  $temp2=$_FILES['crop_file']['tmp_name'];

  if($crop_file1){
  $upload= "../images/crop_file/";
            $imgExt=strtolower(pathinfo($crop_file1, PATHINFO_EXTENSION));
            $valid_ext= array('pdf','doc','docx' );
            $crop_file= rand(1000,1000000).".".$imgExt;
            
            move_uploaded_file($temp2,$upload.$crop_file);
  }

 
 
 $add=mysqli_query($connect,"insert into crop(Crop_type, Crop_name, Crop_description, Crop_photo, Crop_photo_type, Crop_file, Crop_file_type) values('$crop_type', '$crop_name', '$crop_description','$crop_photo', '$type1', '$crop_file', '$type2')") or die(mysqli_error($connect));

 
 
  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('पीक समाविस्ट झाले.');";
    echo 'window.location.href="crop_add.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('पीक समाविस्ट झाले नाही');";
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
                        <legend>पीक तपशील</legend>

                         <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक प्रकार:</label>
                          <div class="col-lg-6">
                            <select name="crop_type" class="form-control" required>
                              <option value="">पीक प्रकार निवडा</option>
                              <option value="फळे">फळे</option>
                              <option value="भाज्या">भाज्या</option>
                              <option value="फुले">फुले</option>
                              <option value="तेलबिया">तेलबिया</option>
                              <option value="डाळी">डाळी</option>
                              <option value="मसाले">मसाले</option>
                              <option value="औषधी व सुगंधी वनस्पती">औषधी व सुगंधी वनस्पती</option>
                            </select>
                          </div>
                        </div>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक नाव:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="पीक नाव" name="crop_name" id="crop_name"  required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक माहिती:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="पीक माहिती" name="crop_description" required></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक फोटो:</label>
                            <div class="col-lg-6">
                              
                              <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/><br>
                              
                              <input type="file" id="crop_photo" name="crop_photo" class="fileinput" accept=" .png, .jpg, .jpeg " required/>
                            </div>            
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक फाईल:</label>
                          <div class="col-lg-6">
                            <input type="file" id="crop_file" name="crop_file" class="fileinput" accept=" .pdf, .doc, .docx " required style="padding-top: 10px;" />
                          </div>
                        </div>

                      
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            
                            <button class="btn btn-primary" type="submit" name="submit">सबमिट</button>
                            <button class="btn btn-danger" type="reset">रिसेट</button>
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
                $("#crop_photo").change(function(){
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

