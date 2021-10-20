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

$sel=mysqli_query($connect,"select * from crop_calender where Calender_id='".$_GET['calender_id']."' ")or die(mysqli_error($connect));
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
                        <legend>पीक दिनदर्शिका</legend>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक नाव:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="पीक नाव" name="calender_crop_name" id="crop_name"  required value="<?php echo $fetch['Calender_crop_name'] ?>" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >हंगामाचे नाव:</label>
                          <div class="col-lg-6">
                            <select name="crop_season" class="form-control" required>
                              <option value="<?php echo $fetch['Crop_season'] ?>"><?php echo $fetch['Crop_season'] ?></option>
                              <option value="खरीप">खरीप</option>
                              <option value="रब्बी ">रब्बी </option>
                              
                            </select>
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="col-lg-3 control-label" >पासून:</label>
                          <div class="col-lg-6">
                            <select name="start_month" class="form-control" required>
                              <option value="<?php echo $fetch['Start_month'] ?>"><?php echo $fetch['Start_month'] ?></option>
                              <option value="जानेवारी">जानेवारी</option>
                              <option value="फेब्रुवारी">फेब्रुवारी</option>
                              <option value="मार्च">मार्च</option>
                              <option value="एप्रिल">एप्रिल</option>
                              <option value="मे">मे</option>
                              <option value="जून">जून</option>
                              <option value="जुलै">जुलै</option>
                              <option value="ऑगस्ट">ऑगस्ट</option>
                              <option value="सप्टेंबर">सप्टेंबर</option>
                              <option value="ऑक्टोबर">ऑक्टोबर</option>
                              <option value="नोव्हेंबर">नोव्हेंबर</option>
                              <option value="डिसेंबर">डिसेंबर</option>
                              
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पर्यंत:</label>
                          <div class="col-lg-6">
                            <select name="end_month" class="form-control" required>
                              <option value="<?php echo $fetch['End_month'] ?>"><?php echo $fetch['End_month'] ?></option>
                              <option value="जानेवारी">जानेवारी</option>
                              <option value="फेब्रुवारी">फेब्रुवारी</option>
                              <option value="मार्च">मार्च</option>
                              <option value="एप्रिल">एप्रिल</option>
                              <option value="मे">मे</option>
                              <option value="जून">जून</option>
                              <option value="जुलै">जुलै</option>
                              <option value="ऑगस्ट">ऑगस्ट</option>
                              <option value="सप्टेंबर">सप्टेंबर</option>
                              <option value="ऑक्टोबर">ऑक्टोबर</option>
                              <option value="नोव्हेंबर">नोव्हेंबर</option>
                              <option value="डिसेंबर">डिसेंबर</option>
                              
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >कालावधी:</label>
                          <div class="col-lg-6">
                            <select name="crop_duration" class="form-control" required>
                              <option value="<?php echo $fetch['Crop_duration'] ?>"><?php echo $fetch['Crop_duration'] ?></option>
                              <option value="१">१</option>
                              <option value="२">२</option>
                              <option value="३">३</option>
                              <option value="४">४</option>
                              <option value="५">५</option>
                              <option value="६">६</option>
                              <option value="७">७</option>
                              <option value="८">८</option>
                              <option value="९">९</option>
                              <option value="१०">१०</option>
                              <option value="११">११</option>
                              <option value="१२">१२</option>
                              
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पद्धत:</label>
                          <div class="col-lg-6">
                            <select name="crop_step" class="form-control" required>
                              <option value="<?php echo $fetch['Crop_step'] ?>"><?php echo $fetch['Crop_step'] ?></option>
                              <option value="नांगरणी">नांगरणी</option>
                              <option value="पेरणी">पेरणी</option>
                              <option value="कोळपणी / वखरणी">कोळपणी / वखरणी</option>
                              <option value="काढणी">काढणी</option>
                              <option value="पूर्ण प्रक्रिया">पूर्ण प्रक्रिया</option>
                              
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >माहिती:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="कोणतेही माहिती" name="calender_crop_description"><?php echo $fetch['Calender_crop_description'] ?></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक फोटो:</label>
                            <div class="col-lg-6">
                              
                              <div class="preview_box">
                              <?php 
                                  if($fetch['Calender_crop_photo']=="")
                                  {
                              ?>
                                    <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/>
                              <?php 
                                  }
                                  else
                                  {
                               ?>
                                  <img id="preview_img" src="../images/calender_crop_photo/<?php echo $fetch['Calender_crop_photo']?>" height="100" width="100" />

                                  <?php } ?>
                          <br>
                              <input type="file" id="crop_photo" name="calender_crop_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                      
                          </div>
                              
                              
                            </div>            
                        </div>

                                              
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            
                            <button class="btn btn-primary" type="submit" name="update">बदला</button>
                            <a href="crop_calendar_view.php"><button class="btn btn-danger" type="button" name="cancel">मागे</button></a>
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

  $calender_crop_photo1=$_FILES['calender_crop_photo']['name'];
  $type1=$_FILES['calender_crop_photo']['type'];
  $size1=$_FILES['calender_crop_photo']['size'];
  $temp1=$_FILES['calender_crop_photo']['tmp_name'];

  if($calender_crop_photo1){
  $upload= "../images/calender_crop_photo/";
            $imgExt=strtolower(pathinfo($calender_crop_photo1, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $calender_crop_photo= rand(1000,1000000).".".$imgExt;
            unlink($upload1.$fetch['Calender_crop_photo']);
            move_uploaded_file($temp1,$upload.$calender_crop_photo);
  }
else
  {
      $calender_crop_photo=$fetch['Calender_crop_photo'];
  }

  
      $update=mysqli_query($connect,"update crop_calender set
            Calender_crop_name='".$_POST['calender_crop_name']."',
            Crop_season='".$_POST['crop_season']."',
            Start_month='".$_POST['start_month']."',
            End_month='".$_POST['end_month']."',
            Crop_duration='".$_POST['crop_duration']."',
            Crop_step='".$_POST['crop_step']."',
            Calender_crop_description='".$_POST['calender_crop_description']."',
            Calender_crop_photo='".$calender_crop_photo."'            
           
            where Calender_id='".$_GET['calender_id']."' ") or die(mysqli_error($connect));
 

  if($update)
  {
    echo '<script type="text/javascript">';
    echo "alert('पीक दिनदर्शिका बदलली.');";
    echo 'window.location.href="crop_calendar_view.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('पीक दिनदर्शिका बदलली नाही');";
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

