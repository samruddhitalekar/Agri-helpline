<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>प्रश्नाचे उत्तर समाविस्ट करा</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> प्रश्नाचे उत्तर समाविस्ट करा</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>प्रश्न व उत्तर</li>
              <li><a href="#">प्रश्नाचे उत्तर समाविस्ट करा</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
{
 extract($_POST);

  
 
 $add=mysqli_query($connect,"insert into question_answer(Question_id,Answer_person_name, Answer) values('".$_GET['question_id']."','Admin','$answer')") or die(mysqli_error($connect));

 
 
  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('प्रश्नाचे उत्तर समाविस्ट झाले.');";
    echo 'window.location.href="question.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('प्रश्नाचे उत्तर समाविस्ट झाले नाही');";
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
                        <legend>प्रश्नाचे उत्तर</legend>

                        <?php
                          $disp1=mysqli_query($connect,"select * from question where Question_id='".$_GET['question_id']."'") or die(mysqli_error($connect));
                          $fetch1=mysqli_fetch_array($disp1);
                        ?>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >प्रश्न:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="प्रश्न" name="question" disabled><?php echo$fetch1['Question'];?></textarea>
                          </div>
                        </div>

                         
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >प्रश्नाचे उत्तर:</label>
                          <div class="col-lg-6">
                            <textarea class="form-control" type="text" placeholder="प्रश्नाचे उत्तर" name="answer" required></textarea>
                          </div>
                        </div>

                        
                      
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            
                            <button class="btn btn-primary" type="submit" name="submit">सबमिट</button>
                            <button class="btn btn-danger" type="reset">रिसेट</button>
                            <a href="javascript:history.back()"><button class="btn btn-info" type="button">मागे</button></a>
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

    