<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>योजना समाविस्ट करा</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> योजना समाविस्ट करा</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>योजना</li>
              <li><a href="#">योजना समाविस्ट करा</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
{
 extract($_POST);

 $scheme_file1=$_FILES['scheme_file']['name'];
  $type2=$_FILES['scheme_file']['type'];
  $size2=$_FILES['scheme_file']['size'];
  $temp2=$_FILES['scheme_file']['tmp_name'];

  if($scheme_file1){
  $upload= "../images/scheme/";
            $imgExt=strtolower(pathinfo($scheme_file1, PATHINFO_EXTENSION));
            $valid_ext= array('pdf','doc','docx','jpg','png','jpeg');
            $scheme_file= rand(1000,1000000).".".$imgExt;
            
            move_uploaded_file($temp2,$upload.$scheme_file);
  } 
 
 $add=mysqli_query($connect,"insert into scheme(Scheme_person_name,Scheme_name,Scheme_file,Scheme_file_type) values('Admin','$scheme_name','$scheme_file','$type2')") or die(mysqli_error($connect));

 
 
  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('योजना समाविस्ट झाली.');";
    echo 'window.location.href="scheme_add.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('योजना समाविस्ट झाली नाही');";
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
                        <legend>योजना</legend>

                         
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >योजना:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="योजना" name="scheme_name" required></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >योजना फाईल:</label>
                          <div class="col-lg-6">
                            <input type="file" name="scheme_file" class="fileinput" accept=" .pdf, .doc, .docx, .png, .jpg, .jpeg " required style="padding-top: 10px;" />
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

    