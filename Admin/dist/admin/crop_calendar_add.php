<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>पीक दिनदर्शिका समाविस्ट करा</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> पीक दिनदर्शिका समाविस्ट करा</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>पीक दिनदर्शिका</li>
              <li><a href="#">पीक दिनदर्शिका समाविस्ट करा</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
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
            
            move_uploaded_file($temp1,$upload.$calender_crop_photo);
  }

 
 
 $add=mysqli_query($connect,"insert into crop_calender(Calender_crop_name, Crop_season, Start_month, End_month, Crop_duration, Crop_step, Calender_crop_description, Calender_crop_photo) values('$calender_crop_name', '$crop_season', '$start_month','$end_month', '$crop_duration', '$crop_step', '$calender_crop_description','$calender_crop_photo')") or die(mysqli_error($connect));

 
 
  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('पीक दिनदर्शिका समाविस्ट झाली.');";
    echo 'window.location.href="crop_calendar_add.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('पीक दिनदर्शिका समाविस्ट झाली नाही');";
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
                        <legend>पीक दिनदर्शिका</legend>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक नाव:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="पीक नाव" name="calender_crop_name" id="crop_name"  required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >हंगामाचे नाव:</label>
                          <div class="col-lg-6">
                            <select name="crop_season" class="form-control" required>
                              <option value="">हंगाम निवडा</option>
                              <option value="खरीप">खरीप</option>
                              <option value="रब्बी ">रब्बी </option>
                              
                            </select>
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="col-lg-3 control-label" >पासून:</label>
                          <div class="col-lg-6">
                            <select name="start_month" class="form-control" required>
                              <option value="">महिना निवडा</option>
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
                              <option value="">महिना निवडा</option>
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
                              <option value="">कालावधी निवडा</option>
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
                              <option value="">पद्धत निवडा</option>
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
                            <textarea class="form-control" type="text" placeholder="कोणतेही माहिती" name="calender_crop_description"></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >पीक फोटो:</label>
                            <div class="col-lg-6">
                              
                              <img id="preview_img" src="../images/No-image-full.jpg" height="100" width="100"/><br>
                              
                              <input type="file" id="crop_photo" name="calender_crop_photo" class="fileinput" accept=" .png, .jpg, .jpeg " required/>
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

