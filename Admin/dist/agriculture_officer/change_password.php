<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Change Password</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Change Password</h1>
            <!-- <p>Bootstrap default form components</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Setting</li>
              <li><a href="#">Change Password</a></li>
            </ul>
          </div>
        </div>
<?php
    if(isset($_POST['change']))
    {
        extract($_POST);
        include 'config.php';
        
        $chpass=mysqli_query($connect,"select * from agriculture_officer where Officer_email='".$_SESSION['officer_email']."' and Officer_password='".$_POST['oldpass']."'") or die(mysqli_error($connect));
        if(mysqli_num_rows($chpass)==1)
        {
            if(strlen($_POST['newpass'])>=3)
            {
                if($_POST['newpass']==$_POST['repass'])
                {
                    $update=mysqli_query($connect,"update agriculture_officer set Officer_password='".$_POST['newpass']."' , 
                            Officer_password='".$_POST['repass']."' where Officer_email='".$_SESSION['officer_email']."' " )or die(mysqli_error($connect));
                    if($update)
                    {
                        echo "<script>";
                        echo "alert('Password change..');";
                        echo 'window.location.href="index.php";';
                        echo "</script>";  
                        
                    }else
                    {
                        echo "<script>";
                        echo "alert('Password not change..');";
                        echo "</script>";
                        
                    }
                    
                    
                }else
                {
                    echo "<script>";
                    echo "alert('Password not match');";
                    echo "</script>";
                    
                }           
                
            }else
            {
                echo "<script>";
                echo "alert('Password length not match');";
                echo "</script>";
            }           
            
        }else
        {
            echo "<script>";
            echo "alert('Entry not match');";
            echo "</script>";
                    
        }
    }

?>        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post">
                      <fieldset>
                        <legend>Profile</legend>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" for="inputEmail">Old Password:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="name" type="password" placeholder="new Password" name="oldpass">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" for="inputEmail">New Password:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="email" type="password" placeholder="New Password" name="newpass">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label" for="inputEmail">Re-type Password:</label>
                          <div class="col-lg-6">
                            <input class="form-control" id="email" type="password" placeholder="Re-type Password" name="repass">
                          </div>
                        </div>
                        
                        
                        <div class="form-group">
                          <div class="col-lg-9 col-lg-offset-3">
                            <!-- <button class="btn btn-default" type="reset">Cancel</button> -->
                            <button class="btn btn-primary" type="submit" name="change">Change</button>
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