<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Dashboard</title>
    
      <!-- Navbar-->
      <?php include "header.php";
        include "config.php";
      ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <!-- <p>A free and modular admin template</p> -->
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <!-- start customer -->
        <div class="row">
          <a href="">
            <div class="col-md-3">
              <div class="widget-small warning coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                  <h5>Total Customers</h5>
                  <?php
                    
                    $query1=mysqli_query($connect,"select * from customer");
                    $count1=mysqli_num_rows($query1);
                  ?>
                  <p><b><?php echo $count1; ?></b></p>
                </div>
              </div>
            </div>
          </a>
          <a href="customer_register.php">
            <div class="col-md-3">
              <div class="widget-small info coloured-icon"><i class="icon fa fa-list-ul fa-3x"></i>
                <div class="info">
                  <h5>Registered Customers</h5>
                  <?php
                      
                      $query2=mysqli_query($connect,"select * from customer where Customer_status='Not_Approved' ");
                      $count2=mysqli_num_rows($query2);
                  ?>
                  <p><b><?php echo $count2; ?></b></p>
                </div>
              </div>
            </div>
          </a>
          <a href="customer_approved.php">
            <div class="col-md-3">
              <div class="widget-small primary coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                <div class="info">
                  <h5>Approved Customers</h5>
                  <?php
                      
                      $query3=mysqli_query($connect,"select * from customer where Customer_status='approved' ");
                      $count3=mysqli_num_rows($query3);
                  ?>
                  <p><b><?php echo $count3; ?></b></p>
                </div>
              </div>
            </div>
          </a>
          <a href="customer_disapproved.php">
            <div class="col-md-3">
              <div class="widget-small danger coloured-icon"><i class="icon fa fa-thumbs-o-down fa-3x"></i>
                <div class="info">
                  <h5>Disapproved Customers</h5>
                  <?php
                      
                      $query4=mysqli_query($connect,"select * from customer where Customer_status='disapproved' ");
                      $count4=mysqli_num_rows($query4);
                  ?>
                  <p><b><?php echo $count4; ?></b></p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end customer -->
        <!-- start agriculture officer -->
        <div class="row">
          <a href="">
            <div class="col-md-3">
              <div class="widget-small warning coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                  <h5>Total <br>Agriculture Officer</h5>
                  <?php
                    
                    $query5=mysqli_query($connect,"select * from agriculture_officer");
                    $count5=mysqli_num_rows($query5);
                  ?>
                  <p><b><?php echo $count5; ?></b></p>
                </div>
              </div>
            </div>
          </a>
          <a href="officer_register.php">
            <div class="col-md-3">
              <div class="widget-small info coloured-icon"><i class="icon fa fa-list-ul fa-3x"></i>
                <div class="info">
                  <h5>Registered Agriculture Officer</h5>
                  <?php
                      
                      $query6=mysqli_query($connect,"select * from agriculture_officer where Officer_status='Not_Approved' ");
                      $count6=mysqli_num_rows($query6);
                  ?>
                  <p><b><?php echo $count6; ?></b></p>
                </div>
              </div>
            </div>
          </a>
          <a href="officer_approved.php">
            <div class="col-md-3">
              <div class="widget-small primary coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                <div class="info">
                  <h5>Approved <br>Agriculture Officer</h5>
                  <?php
                      
                      $query7=mysqli_query($connect,"select * from agriculture_officer where Officer_status='approved' ");
                      $count7=mysqli_num_rows($query7);
                  ?>
                  <p><b><?php echo $count7; ?></b></p>
                </div>
              </div>
            </div>
          </a>
          <a href="officer_disapproved.php">
            <div class="col-md-3">
              <div class="widget-small danger coloured-icon"><i class="icon fa fa-thumbs-o-down fa-3x"></i>
                <div class="info">
                  <h5>Disapproved Agriculture Officer</h5>
                  <?php
                      
                      $query8=mysqli_query($connect,"select * from agriculture_officer where Officer_status='disapproved' ");
                      $count8=mysqli_num_rows($query8);
                  ?>
                  <p><b><?php echo $count8; ?></b></p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- end agriculture officer -->
        
      <!-- start info -->
       <div class="row">
        <a href="crop_view.php">
          <div class="col-md-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-pagelines fa-3x"></i>
              <div class="info">
                <h5>पीक</h5>
                <?php
                  
                  $query9=mysqli_query($connect,"select * from crop");
                  $count9=mysqli_num_rows($query9);
                ?>
                <p><b><?php echo $count9; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <a href="crop_calendar_view.php">
          <div class="col-md-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-calendar fa-3x"></i>
              <div class="info">
                <h5>पीक दिनदर्शिका</h5>
                <?php
                    
                    $query10=mysqli_query($connect,"select * from crop_calender ");
                    $count10=mysqli_num_rows($query10);
                ?>
                <p><b><?php echo $count10; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <a href="question.php">
          <div class="col-md-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-question-circle-o fa-3x"></i>
              <div class="info">
                <h5>प्रश्न व उत्तर</h5>
                <?php
                    
                    $query11=mysqli_query($connect,"select * from question ");
                    $count11=mysqli_num_rows($query11);
                ?>
                <p><b><?php echo $count11; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <a href="news_view.php">
          <div class="col-md-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-newspaper-o fa-3x"></i>
              <div class="info">
                <h5>बातम्या</h5>
                <?php
                    
                    $query12=mysqli_query($connect,"select * from news ");
                    $count12=mysqli_num_rows($query12);
                ?>
                <p><b><?php echo $count12; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        </div>


        <div class="row">
        <a href="scheme_view.php">
          <div class="col-md-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-scribd fa-3x"></i>
              <div class="info">
                <h5>योजना (Admin)</h5>
                <?php
                  
                  $query13=mysqli_query($connect,"select * from scheme where Scheme_person_name='admin'");
                  $count13=mysqli_num_rows($query13);
                ?>
                <p><b><?php echo $count13; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <a href="scheme_view_officer.php">
          <div class="col-md-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-scribd fa-3x"></i>
              <div class="info">
                <h5>योजना(Agriculture Officer)</h5>
                <?php
                    
                    $query14=mysqli_query($connect,"select s.*,o.* from scheme s, agriculture_officer o where s.Scheme_person_name='Agriculture Officer' and s.Officer_id=o.Officer_id");
                    $count14=mysqli_num_rows($query14);
                ?>
                <p><b><?php echo $count14; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <a href="product.php">
          <div class="col-md-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-product-hunt fa-3x"></i>
              <div class="info">
                <h5>Product</h5>
                <?php
                    
                    $query15=mysqli_query($connect,"select * from product ");
                    $count15=mysqli_num_rows($query15);
                ?>
                <p><b><?php echo $count15; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <a href="contact_view.php">
          <div class="col-md-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-envelope-o fa-3x"></i>
              <div class="info">
                <h5>अभिप्राय</h5>
                <?php
                    
                    $query16=mysqli_query($connect,"select * from contact ");
                    $count16=mysqli_num_rows($query16);
                ?>
                <p><b><?php echo $count16; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        </div>


        <div class="row">
        <a href="npk_view.php">
          <div class="col-md-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-calculator fa-3x"></i>
              <div class="info">
                <h5>NPK Value</h5>
                <?php
                  
                  $query17=mysqli_query($connect,"select * from npk");
                  $count17=mysqli_num_rows($query17);
                ?>
                <p><b><?php echo $count17; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <a href="soil_report_view.php">
          <div class="col-md-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-file-text-o fa-3x"></i>
              <div class="info">
                <h5>Soil Report</h5>
                <?php
                    
                    $query18=mysqli_query($connect,"select * from soil_report");
                    $count18=mysqli_num_rows($query18);
                ?>
                <p><b><?php echo $count18; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <a href="water_report_view.php">
          <div class="col-md-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-tint fa-3x"></i>
              <div class="info">
                <h5>Water Report</h5>
                <?php
                    
                    $query19=mysqli_query($connect,"select * from water_report ");
                    $count19=mysqli_num_rows($query15);
                ?>
                <p><b><?php echo $count19; ?></b></p>
              </div>
            </div>
          </div>
        </a>
        <!-- <a href="contact_view.php">
          <div class="col-md-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-envelope-o fa-3x"></i>
              <div class="info">
                <h5>अभिप्राय</h5>
                <?php
                    
                    $query16=mysqli_query($connect,"select * from contact ");
                    $count16=mysqli_num_rows($query16);
                ?>
                <p><b><?php echo $count16; ?></b></p>
              </div>
            </div>
          </div>
        </a> -->
        </div>
        <!-- end info -->


      </div>
    <?php include "footer.php" ?>