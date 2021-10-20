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

$select=mysqli_query($connect,"select * from admin where Email='".$_SESSION['email']."' ") or die(mysqli_error($connect));
 $fetch=mysqli_fetch_array($select);
    
?>
<header class="main-header hidden-print"><a class="logo" href="dashboard.php">Admin</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->

              <li ><a  href="profile.php"><?php echo $fetch['Email']; ?></a></li>
              
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
                        if($fetch['Photo']=="")
                        {
                    ?>
                  <img class="img-circle" src="../images/default.png" alt="User Image">
                   <?php }
                      else
                      {
                   ?>
                   <img class="img-circle" src="../images/admin/<?php echo $fetch['Photo']?>" alt="User Image" style="height: 50px; width: 50px;">
                   
                   <?php } ?>
            </div>
            <div class="pull-left info">
              <p><?php echo $fetch['Name']; ?></p>
              <!--< p class="designation">Frontend Developer</p> -->
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li ><a href="dashboard.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

            <li class="treeview"><a href="#"><i class="fa fa-user-o"></i><span>Customer</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="customer_register.php"><i class="fa fa-list-ul"></i> Registered Customer</a></li>
                <li><a href="customer_approved.php"><i class="fa fa-thumbs-o-up"></i> Approved Customer</a></li>
                <li><a href="customer_disapproved.php"><i class="fa fa-thumbs-o-down"></i> Disapproved Customer</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-user-o"></i><span>Agriculture Officer</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="officer_register.php"><i class="fa fa-list-ul"></i> Registered Officer</a></li>
                <li><a href="officer_approved.php"><i class="fa fa-thumbs-o-up"></i> Approved Officer</a></li>
                <li><a href="officer_disapproved.php"><i class="fa fa-thumbs-o-down"></i> Disapproved Officer</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-pagelines"></i><span>पीक</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="crop_add.php"><i class="fa fa-pencil-square-o"></i>पीक समाविस्ट करा </a></li>
                <li><a href="crop_view.php"><i class="fa fa-list-ul"></i> पीक बघा </a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-calendar"></i><span>पीक दिनदर्शिका</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="crop_calendar_add.php"><i class="fa fa-pencil-square-o"></i>पीक दिनदर्शिका समाविस्ट करा </a></li>
                <li><a href="crop_calendar_view.php"><i class="fa fa-list-ul"></i> पीक दिनदर्शिका बघा </a></li>
              </ul>
            </li>

            <li ><a href="question.php"><i class="fa fa-question-circle-o"></i><span>प्रश्न व उत्तर</span></a></li>

            <li class="treeview"><a href="#"><i class="fa fa-newspaper-o"></i><span>बातम्या</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="news_add.php"><i class="fa fa-pencil-square-o"></i>बातम्या समाविस्ट करा </a></li>
                <li><a href="news_view.php"><i class="fa fa-list-ul"></i>बातम्या बघा </a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-scribd"></i><span>योजना</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="scheme_add.php"><i class="fa fa-pencil-square-o"></i>योजना समाविस्ट करा </a></li>
                <li><a href="scheme_view.php"><i class="fa fa-list-ul"></i> योजना बघा</a></li>
                <li><a href="scheme_view_officer.php"><i class="fa fa-list-ul"></i> योजना बघा(कृषी अधिकारी)</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-calculator"></i><span>NPK Value</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="npk_add.php"><i class="fa fa-pencil-square-o"></i>Add NPK Value</a></li>
                <li><a href="npk_view.php"><i class="fa fa-list-ul"></i>View NPK Value</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-file-text-o"></i><span>Soil Report</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="soil_report_add.php"><i class="fa fa-pencil-square-o"></i>Add Soil Report</a></li>
                <li><a href="soil_report_view.php"><i class="fa fa-list-ul"></i>View Soil Report</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-tint"></i><span>Water Report</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="water_report_add.php"><i class="fa fa-pencil-square-o"></i>Add Water Report</a></li>
                <li><a href="water_report_view.php"><i class="fa fa-list-ul"></i>View Water Report</a></li>
              </ul>
            </li>

            <li ><a href="product.php"><i class="fa fa-product-hunt"></i><span>Product</span></a></li>

            <li ><a href="contact_view.php"><i class="fa fa-envelope-o"></i><span>अभिप्राय</span></a></li>

            

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