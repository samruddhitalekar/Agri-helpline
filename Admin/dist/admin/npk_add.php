<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Add NPK</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add NPK</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>NPK</li>
              <li><a href="#">Add NPK</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
{
 extract($_POST);
 $crop_name=$_POST['crop_name'];
 $coulmn=array();
        $query1=mysqli_query($connect,"select * from npk");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['NPK_crop_name'];
        }

        foreach ($coulmn as $value) 
        {

         if (strpos($crop_name, $value) !== FALSE ) 
         {
          echo '<script type="text/javascript">'; 
          echo 'alert("This Crops npk Is Already Exist");';
          echo "window.location.href = 'npk_add.php';";
          echo '</script>'; 
          return true;

         }    
        }
 
 $add=mysqli_query($connect,"insert into npk(NPK_crop_name, PH, N_value, N_urea, P_value, P_urea, K_value, K_urea) values('$crop_name', '$ph','$n_value', '$n_urea' ,'$p_value', '$p_urea' ,'$k_value', '$k_urea')") or die(mysqli_error($connect));


  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('NPK Inserted.');";
    echo 'window.location.href="npk_add.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('NPK not insert');";
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
                        <legend>NPK details</legend>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Crop Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Crop name" name="crop_name" id="product"  required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >PH:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="PH" name="ph" required oninput="this.value = this.value.replace(/[^0-9]-/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >N Value:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="N Value" name="n_value" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >N Urea:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="N Urea" name="n_urea" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div> 

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >P Value:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="P Value" name="p_value" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >P Urea:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="P Urea" name="p_urea" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >K Value:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="K Value" name="k_value" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >K Urea:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="K Urea" name="k_urea" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>               

                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            <!-- <button class="btn btn-default" type="reset">Cancel</button> -->
                            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
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

