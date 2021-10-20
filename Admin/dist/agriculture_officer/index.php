<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Agriculture Officer</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
    <style>

    #frmCheckUsername {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
    .demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
    .status-available{color:#2FC332;}
    .status-not-available{color:#D60202;}
    </style>
  </head>
  <body>
    <?php
include 'config.php';
    if(isset($_POST['login']))
    {
        extract($_POST);

        $email = mysqli_real_escape_string($connect, $_POST["email"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        
        $log=mysqli_query($connect,"select * from agriculture_officer where Officer_email='$email' and Officer_password='$password' ") or die (mysqli_error($connect));
            
        if(mysqli_num_rows($log)>0)
        {
            $fetch=mysqli_fetch_array($log);
            extract($fetch);
            if($Officer_status=='approved')
            {   
                
                $_SESSION['officer_email']=$fetch['Officer_email'];
                $_SESSION['officer_name']=$fetch['Officer_name'];
                $_SESSION['officer_id']=$fetch['Officer_id'];
                
                
                echo "<script>";
                echo "alert('Login successfull');";
                echo 'window.location.href="dashboard.php";';
                echo "</script>";
             }
              else
              {
                echo "<script>";
                echo "alert('Your Account Still Not Approved by Admin');";
                echo "window.location.href='index.php';";
                echo "</script>";
              }
        }else
        {
            echo "<script>";
            echo "alert('Login failed');";
            echo "</script>";
            
        }
        
    }



if(isset($_POST['submit']))
{
 extract($_POST);

$email=$_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
        $coulmn=array();
        $query1=mysqli_query($connect,"select * from agriculture_officer");
        while ($row=mysqli_fetch_assoc($query1))
        {
          $coulmn[]=$row['Officer_email'];
        }

        foreach ($coulmn as $value) 
        {

         if (strpos($email, $value) !== FALSE ) 
         {
          echo '<script type="text/javascript">'; 
          echo 'alert("This Email Is Already Exist");';
          echo "window.location.href = 'index.php';";
          echo '</script>'; 
          return true;

         }    
        }

        $add=mysqli_query($connect,"insert into agriculture_officer(Officer_name, Officer_email, Officer_mobile, Officer_gender, Officer_address, Officer_password) values('$name', '$email', '$mobile', '$gender', '$address', '$password')") or die(mysqli_error($connect));

   
   
        if($add)
        {
          echo '<script type="text/javascript">';
          echo "alert('Registration successfull.');";
          echo 'window.location.href="index.php";';
          echo "</script>";
          
        }
        else
        {
           echo '<script type="text/javascript">';
           echo "alert('Registration not successfull');";
           echo '<script>';
        
        }
    }            
    else
    {
      echo '<script type="text/javascript">';
      echo "alert('Email is Invalid.');";
      echo '<script>';
    }
     return false;
}
?> 
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Agriculture Officer</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="email" placeholder="Email" name="email" required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <div class="utility">
              <!-- <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div> -->
              <p class="semibold-text mb-0">New Officer? <a data-toggle="flip"> Regitration</a></p>
            </div>
          </div>
          <br>
          <div class="form-group btn-container">
            <div class="col-md-6">
              <button class="btn btn-primary btn-block " name="login" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
            </div>
            <div class="col-md-6">
              <a href="../../../index.php"><button class="btn btn-danger btn-block" type="button"><i class="fa fa-arrow-left fa-lg fa-fw"></i>Back</button></a>
            </div>
          </div>
        </form>

        <form class="forget-form" method="post">
          <h3 class="login-head"><i class="fa fa-pencil-square-o fa-fw fa-lock"></i>Rgistration</h3>
          <div class="form-group">
            <label class="control-label">Name:</label>
            <input class="form-control" type="text" placeholder="Name" name="name" required oninput="this.value = this.value.replace(/[^a-zA-Z.]/g, '').replace(/(\..*)\./g, '$1');">
          </div>

          <div class="form-group">
            <label class="control-label">Email:</label>
            <input class="form-control" type="email" placeholder="Email" id="email" name="email" required onkeyup="checkAvailability1()" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$">
            <p id="email-availability-status1"></p>
            <p  id="loaderIcon1" style="display:none" ></p>
          </div>

          <div class="form-group">
            <label class="control-label">Mobile No:</label>
            <input class="form-control" type="text" placeholder="Mobile" name="mobile" maxlength="10" pattern="[7-9]{1}[0-9]{9}" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
          </div>

          <div class="form-group">
            <label class="control-label">Gender:</label>
            <div class="radio">
              <label>
                <input id="optionsRadios1" type="radio" name="gender" value="Male" required >Male
              
              <span  style="margin-left: 50px;">
                <input id="optionsRadios2" type="radio" name="gender" value="Female">Female
              </span>
              </label>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label">Address:</label>
            <textarea class="form-control" type="text" placeholder="Address" name="address" required></textarea>
          </div>          

          <div class="form-group">
            <label class="control-label">Password:</label>
            <input class="form-control" type="password" placeholder="Password" name="password" required>
          </div>

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="submit" type="submit"><i class="fa fa-check fa-lg fa-fw"></i>submit</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
        
      </div>
    </section>

    <script src="../js/jquery-2.1.4.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/plugins/pace.min.js"></script>
  <script src="../js/main.js"></script>

  <script type="text/javascript">
    function checkAvailability1() {
    $("#loaderIcon1").show();
    var email=$("#email").val();
    // alert(email);
    jQuery.ajax({
    url: "emailexist.php",
    data:{email : email},
    type: "POST",
    success:function(data){
    $("#email-availability-status1").html(data);
    $("#loaderIcon1").hide();
    
    },
    error:function (){}
    });
    }

  </script>
  </body>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  
</html>