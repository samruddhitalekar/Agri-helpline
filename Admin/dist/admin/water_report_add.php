<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Add Water Report</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add Water Report</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Water Report</li>
              <li><a href="#">Add Water Report</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
{
 extract($_POST);
 $water_parameters=$_POST['water_parameters'];
 $coulmn=array();
        $query1=mysqli_query($connect,"select * from water_report");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['Water_parameters'];
        }

        foreach ($coulmn as $value) 
        {

         if (strpos($water_parameters, $value) !== FALSE ) 
         {
          echo '<script type="text/javascript">'; 
          echo 'alert("This Water Parameter Is Already Exist");';
          echo "window.location.href = 'water_report_add.php';";
          echo '</script>'; 
          return true;

         }    
        }
 
 $add=mysqli_query($connect,"insert into water_report(Water_parameters, Water_unit, Water_limits, Water_limits1, Water_remark, Water_remark1, Water_remark2) values('$water_parameters', '$water_unit','$water_limits', '$water_limits1', '$water_remark' ,'$water_remark1', '$water_remark2')") or die(mysqli_error($connect));


  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('Water Report Inserted.');";
    echo 'window.location.href="water_report_add.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('Water Report not insert');";
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
                        <legend>Water Report details</legend>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Parameters:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Parameters" name="water_parameters" id="product"  required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Unit:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Unit" name="water_unit" required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Limit:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Limit" name="water_limits" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Limit 1:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Limit" name="water_limits1" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div> 

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Remark:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Remark" name="water_remark" required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Remark 1:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Remark" name="water_remark1" required >
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Remark 2:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Remark" name="water_remark2" required >
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

