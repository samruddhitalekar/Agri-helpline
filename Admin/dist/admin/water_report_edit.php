<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
   
      <!-- Navbar-->
       <title>Update Water Report</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Update Water Report</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Water Report</li>
              <li><a href="#">Update Water Report</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

$sel=mysqli_query($connect,"select * from water_report where Water_report_id='".$_GET['water_report_id']."'")or die(mysqli_error($connect));
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
                        <legend>Water Report details</legend>

                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Parameters:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Parameters" name="water_parameters" id="product"  required value="<?php echo $fetch['Water_parameters'];?>" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Unit:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Unit" name="water_unit" required  value="<?php echo $fetch['Water_unit'];?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Limit:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Limit" name="water_limits" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['Water_limits'];?>">
                          </div>
                        </div> 

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Limit 1:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Limit" name="water_limits1" required oninput="this.value = this.value.replace(/[^0-9]-/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['Water_limits1'];?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Remark:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Remark" name="water_remark" required value="<?php echo $fetch['Water_remark'];?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Remark 1:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Remark" name="water_remark1" required value="<?php echo $fetch['Water_remark1'];?>">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Water Remark 2:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Water Remark" name="water_remark2" required value="<?php echo $fetch['Water_remark2'];?>">
                          </div>
                        </div>  

                                              
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            
                            <button class="btn btn-primary" type="submit" name="update">Update</button>
                            <a href="water_report_view.php"><button class="btn btn-danger" type="button" name="cancel">Back</button></a>
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

      $update=mysqli_query($connect,"update water_report set
            Water_parameters='".$_POST['water_parameters']."',
            Water_unit='".$_POST['water_unit']."',
            Water_limits='".$_POST['water_limits']."',
            Water_limits1='".$_POST['water_limits1']."',
            Water_remark='".$_POST['water_remark']."',
            Water_remark1='".$_POST['water_remark1']."',
            Water_remark2='".$_POST['water_remark2']."'
            
            where Water_report_id='".$_GET['water_report_id']."'") or die(mysqli_error($connect));
 

  if($update)
  {
    echo '<script type="text/javascript">';
    echo "alert('Water report update.');";
    echo 'window.location.href="water_report_view.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('Error in water report update');";
       echo '<script>';
    
    }
}

?>      
   <?php include "footer.php" ?>
