<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>बातमी समाविस्ट करा</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> बातमी समाविस्ट करा</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>बातम्या</li>
              <li><a href="#">बातमी समाविस्ट करा</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
{
 extract($_POST);

  
 
 $add=mysqli_query($connect,"insert into news(News) values('$news')") or die(mysqli_error($connect));

 
 
  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('बातमी समाविस्ट झाली.');";
    echo 'window.location.href="news_add.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('बातमी समाविस्ट झाली नाही');";
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
                        <legend>बातमी</legend>

                         
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >बातमी:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="बातमी" name="news" required></textarea>
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

    