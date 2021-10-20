<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Add Soil Report</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add Soil Report</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Soil Report</li>
              <li><a href="#">Add Soil Report</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

 if(isset($_POST['submit']))
{
 extract($_POST);
 $soil_parameters=$_POST['soil_parameters'];
 $coulmn=array();
        $query1=mysqli_query($connect,"select * from soil_report");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['Soil_parameters'];
        }

        foreach ($coulmn as $value) 
        {

         if (strpos($soil_parameters, $value) !== FALSE ) 
         {
          echo '<script type="text/javascript">'; 
          echo 'alert("This Soil Parameter Is Already Exist");';
          echo "window.location.href = 'soil_report_add.php';";
          echo '</script>'; 
          return true;

         }    
        }
 
 $add=mysqli_query($connect,"insert into soil_report(Soil_parameters, Soil_unit, Soil_limit_from, Soil_limit_to, Soil_limit_average, Soil_remark, Soil_remark1, Soil_remark2) values('$soil_parameters', '$soil_unit','$soil_limit_from', '$soil_limit_to' ,'$soil_limit_average', '$soil_remark' ,'$soil_remark1', '$soil_remark2')") or die(mysqli_error($connect));


  if($add)
  {
    echo '<script type="text/javascript">';
    echo "alert('Soil Report Inserted.');";
    echo 'window.location.href="soil_report_add.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('Soil Report not insert');";
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
                        <legend>Soil Report details</legend>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Parameters:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Parameters" name="soil_parameters" id="product"  required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Unit:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Unit" name="soil_unit" required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Limit From:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Limit From" name="soil_limit_from" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Limit To:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Limit To" name="soil_limit_to" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div> 

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Limit Average:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Limit Average" name="soil_limit_average" required oninput="this.value = this.value.replace(/[^0-9]-/g, '').replace(/(\..*)\./g, '$1');">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Remark:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Remark" name="soil_remark" required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Remark 1:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Remark" name="soil_remark1" required >
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Remark 2:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Remark" name="soil_remark2" required >
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

