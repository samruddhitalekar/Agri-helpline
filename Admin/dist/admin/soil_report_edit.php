<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
   
      <!-- Navbar-->
       <title>Update Soil Report</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Update Soil Report</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Soil Report</li>
              <li><a href="#">Update Soil Report</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

$sel=mysqli_query($connect,"select * from soil_report where Soil_report_id='".$_GET['soil_report_id']."'")or die(mysqli_error($connect));
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
                        <legend>Soil Report details</legend>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Parameters:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Parameters" name="soil_parameters" id="product"  required value="<?php echo $fetch['Soil_parameters'];?>" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Unit:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Unit" name="soil_unit" required  value="<?php echo $fetch['Soil_unit'];?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Limit From:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Limit From" name="soil_limit_from" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['Soil_limit_from'];?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Limit To:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Limit To" name="soil_limit_to" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['Soil_limit_to'];?>">
                          </div>
                        </div> 

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Limit Average:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Limit Average" name="soil_limit_average" required oninput="this.value = this.value.replace(/[^0-9]-/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['Soil_limit_average'];?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Remark:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Remark" name="soil_remark" required value="<?php echo $fetch['Soil_remark'];?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Remark 1:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Remark" name="soil_remark1" required value="<?php echo $fetch['Soil_remark1'];?>">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Soil Remark 2:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Soil Remark" name="soil_remark2" required value="<?php echo $fetch['Soil_remark2'];?>">
                          </div>
                        </div>  

                                              
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            
                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                            <a href="npk_view.php"><button class="btn btn-danger" type="button" name="cancel">Back</button></a>
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

      $update=mysqli_query($connect,"update soil_report set
            Soil_parameters='".$_POST['soil_parameters']."',
            Soil_unit='".$_POST['soil_unit']."',
            Soil_limit_from='".$_POST['soil_limit_from']."',
            Soil_limit_to='".$_POST['soil_limit_to']."',
            Soil_limit_average='".$_POST['soil_limit_average']."',
            Soil_remark='".$_POST['soil_remark']."',
            Soil_remark1='".$_POST['soil_remark1']."',
            Soil_remark2='".$_POST['soil_remark2']."'
            
            where Soil_report_id='".$_GET['soil_report_id']."'") or die(mysqli_error($connect));
 

  if($update)
  {
    echo '<script type="text/javascript">';
    echo "alert('Soil report update.');";
    echo 'window.location.href="soil_report_view.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('Error in soil report update');";
       echo '<script>';
    
    }
}

?>      
   <?php include "footer.php" ?>
