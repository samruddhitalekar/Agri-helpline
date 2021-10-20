<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>पिकाचे तपशील बदला</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> पिकाचे तपशील बदला</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>पीक</li>
              <li><a href="#">पिकाचे तपशील बदला</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

$sel=mysqli_query($connect,"select * from crop where Crop_id='".$_GET['crop_id']."' ")or die(mysqli_error($connect));
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
                        <legend>पीक तपशील</legend>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक प्रकार:</label>
                          <div class="col-lg-6">

                            <select name="crop_type" class="form-control" required>
                              <!-- <option value="">पीक प्रकार निवडा</option> -->
                              <option value="<?php echo $fetch['Crop_type']; ?>"><?php echo $fetch['Crop_type']; ?></option>
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
                            <input class="form-control" type="text" placeholder="पीक नाव" name="crop_name" id="crop_name"  required value="<?php echo $fetch['Crop_name']; ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक माहिती:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="पीक माहिती" name="crop_description" required><?php echo $fetch['Crop_description']; ?></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक फोटो:</label>
                            <div class="col-lg-6">
                              
                              <div class="preview_box">
                              <?php 
                                  if($fetch['Crop_photo']=="")
                                  {
                              ?>
                                    <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
                              <?php 
                                  }
                                  else
                                  {
                               ?>
                                  <img id="preview_img" src="../images/crop_photo/<?php echo $fetch['Crop_photo']?>" height="100" width="100" />

                                  <?php } ?>
                          <br>
                              <input type="file" id="crop_photo" name="crop_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                      
                          </div>
                              
                              
                            </div>            
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक फाईल:</label>
                          <div class="col-lg-6">
                            <input type="file" id="crop_file" name="crop_file" class="fileinput" accept=" .pdf, .doc, .docx "  style="padding-top: 10px;" value="<?php echo $fetch['Crop_file']?>" />
                            <?php if($fetch['Crop_file']!=""){?>
                            <a href="../images/crop_file/<?php echo $fetch['Crop_file']?>" class="fa fa-download" Download /></a>
                            <a href="../images/crop_file/<?php echo $fetch['Crop_file']?>" target="_Blank" /><span style="padding-left: 10px;"><?php echo $fetch['Crop_file']?></span></a>
                            <?php } ?>
                            
                          </div>
                        </div>

                      
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            
                            <button class="btn btn-primary" type="submit" name="update">बदला</button>
                            <a href="crop_view.php"><button class="btn btn-danger" type="button" name="cancel">मागे</button></a>
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
<?php
if(isset($_POST['update']))
{
 extract($_POST);

  $crop_photo1=$_FILES['crop_photo']['name'];
  $type1=$_FILES['crop_photo']['type'];
  $size1=$_FILES['crop_photo']['size'];
  $temp1=$_FILES['crop_photo']['tmp_name'];

  if($crop_photo1){
  $upload1= "../images/crop_photo/";
            $imgExt=strtolower(pathinfo($crop_photo1, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $crop_photo= rand(1000,1000000).".".$imgExt;
            unlink($upload1.$fetch['Crop_photo']);
            move_uploaded_file($temp1,$upload1.$crop_photo);
  }
else
  {
      $crop_photo=$fetch['Crop_photo'];
  }

  $crop_file1=$_FILES['crop_file']['name'];
  $type2=$_FILES['crop_file']['type'];
  $size2=$_FILES['crop_file']['size'];
  $temp2=$_FILES['crop_file']['tmp_name'];

  if($crop_file1){
  $upload2= "../images/crop_file/";
            $imgExt=strtolower(pathinfo($crop_file1, PATHINFO_EXTENSION));
            $valid_ext= array('pdf','doc','docx' );
            $crop_file= rand(1000,1000000).".".$imgExt;
            unlink($upload2.$fetch['Crop_file']);
            move_uploaded_file($temp2,$upload2.$crop_file);
  }
  else
  {
      $crop_file=$fetch['Crop_file'];
  }


      $update=mysqli_query($connect,"update crop set
            Crop_type='".$_POST['crop_type']."',
            Crop_name='".$_POST['crop_name']."',
            Crop_description='".$_POST['crop_description']."',
            Crop_photo='".$crop_photo."',
            Crop_photo_type='".$type1."',
            Crop_file='".$crop_file."',
            Crop_file_type='".$type2."'            
           
            where Crop_id='".$_GET['crop_id']."' ") or die(mysqli_error($connect));
 

  if($update)
  {
    echo '<script type="text/javascript">';
    echo "alert('पिकाचे तपशील बददले.');";
    echo 'window.location.href="crop_view.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('पिकाचे तपशील बददले नाही');";
       echo '<script>';
    
    }
}

?>      
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

