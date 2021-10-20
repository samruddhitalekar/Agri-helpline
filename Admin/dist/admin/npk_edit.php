<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title></title>
    
      <!-- Navbar-->
       <title>Update NPK</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Update NPK</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>NPK</li>
              <li><a href="#">Update NPK</a></li>
            </ul>
          </div>
        </div>
<?php
include 'config.php';

$sel=mysqli_query($connect,"select * from npk where NPK_id='".$_GET['npk_id']."' ")or die(mysqli_error($connect));
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
                        <legend>NPK Details</legend>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >Crop Name:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="Crop name" name="crop_name" id="product"  required value="<?php echo $fetch['NPK_crop_name'] ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >PH:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="PH" name="ph" required oninput="this.value = this.value.replace(/[^0-9]-/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['PH'] ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >N Value:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="N Value" name="n_value" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['N_value'] ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >N Urea:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="N Urea" name="n_urea" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['N_urea'] ?>">
                          </div>
                        </div> 

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >P Value:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="P Value" name="p_value" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['P_value'] ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >P Urea:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="P Urea" name="p_urea" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['P_urea'] ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" >K Value:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="K Value" name="k_value" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['K_value'] ?>">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label" >K Urea:</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="text" placeholder="K Urea" name="k_urea" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fetch['K_urea'] ?>">
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

      $update=mysqli_query($connect,"update npk set
            NPK_crop_name='".$_POST['crop_name']."',
            PH='".$_POST['ph']."',
            N_value='".$_POST['n_value']."',
            N_urea='".$_POST['n_urea']."',
            P_value='".$_POST['p_value']."',
            P_urea='".$_POST['p_urea']."',
            K_value='".$_POST['k_value']."',
            K_urea='".$_POST['k_urea']."' 
            where NPK_id='".$_GET['npk_id']."' ") or die(mysqli_error($connect));
 

  if($update)
  {
    echo '<script type="text/javascript">';
    echo "alert('NPK update.');";
    echo 'window.location.href="npk_view.php";';
    echo "</script>";
    
  }
   else
    {
       echo '<script type="text/javascript">';
       echo "alert('Error in npk update');";
       echo '<script>';
    
    }
}

?>      
   <?php include "footer.php" ?>
