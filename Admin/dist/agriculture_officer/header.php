<meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
    <style>
        .form_box{width:500px; margin:0 auto; margin-top:10px; margin-bottom: 40px; text-align: left;}
        .fileinput{margin-left:0px;}
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>
    
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <?php
include 'config.php';

$select=mysqli_query($connect,"select * from agriculture_officer where Officer_email='".$_SESSION['officer_email']."' ") or die(mysqli_error($connect));
 $fetch=mysqli_fetch_array($select);
    
?>
<header class="main-header hidden-print"><a class="logo" href="dashboard.php">Agriculture Officer</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->

              <li ><a  href="profile.php"><?php echo $fetch['Officer_email']; ?></a></li>
              
              <!-- User Menu-->
              

              <li ><a  href="logout.php"><i class="fa fa-power-off fa-lg"></i></a></li>

            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              
              <?php 
                        if($fetch['Officer_photo']=="")
                        {
                    ?>
                  <img class="img-circle" src="../images/default.png" alt="User Image">
                   <?php }
                      else
                      {
                   ?>
                   <img class="img-circle" src="../images/officer/<?php echo $fetch['Officer_photo']?>" alt="User Image" style="height: 50px; width: 50px;">
                   
                   <?php } ?>
            </div>
            <div class="pull-left info">
              <p><?php echo $fetch['Officer_name']; ?></p>
              <p class="designation">Agriculture Officer</p> 
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li ><a href="dashboard.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

            <li ><a href="question.php"><i class="fa fa-question-circle-o"></i><span>प्रश्न व उत्तर</span></a></li>

            <li class="treeview"><a href="#"><i class="fa fa-scribd"></i><span>योजना</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="scheme_add.php"><i class="fa fa-pencil-square-o"></i>योजना समाविस्ट करा </a></li>
                <li><a href="scheme_view.php"><i class="fa fa-list-ul"></i> योजना बघा</a></li>
              </ul>
            </li>


             <li class="treeview"><a href="#"><i class="fa fa-cog"></i><span>Setting</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="profile.php"><i class="fa fa-user-o"></i> Profile</a></li>
                <li><a href="change_password.php"><i class="fa fa-key"></i> Change Password</a></li>
              </ul>
            </li>

            <li ><a href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>

           
            
          </ul>
        </section>
      </aside>