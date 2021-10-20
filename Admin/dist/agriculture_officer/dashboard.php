<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Dashboard</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
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
        <!-- start video -->
        <div class="row">
          <a href="question.php"><div class="col-md-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-question-circle-o fa-3x"></i>
              <div class="info"><br>
                <h4>प्रश्न</h4>
                <?php
                  
                  $query9=mysqli_query($connect,"select * from question ");
                  $count9=mysqli_num_rows($query9);
                ?>
                <p><b><?php echo $count9; ?></b></p><br>
              </div>
            </div>
          </div></a>
          <a href="scheme_view.php"><div class="col-md-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-scribd fa-3x"></i>
              <div class="info"><br>
                <h4>योजना</h4>
                <?php
                    
                    $query10=mysqli_query($connect,"select * from scheme where Officer_id='".$_SESSION['officer_id']."' ");
                    $count10=mysqli_num_rows($query10);
                ?>
                <p><b><?php echo $count10; ?></b></p><br>
              </div>
            </div>
          </div></a>
         <?php /* ?> <div class="col-md-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
              <div class="info"><br>
                <h4>Approved <br>Videos</h4>
                <?php
                    
                    $query11=mysqli_query($connect,"select * from video where Status='approved' and User_email='".$_SESSION['email']."' ");
                    $count11=mysqli_num_rows($query11);
                ?>
                <p><b><?php echo $count11; ?></b></p><br>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-thumbs-o-down fa-3x"></i>
              <div class="info"><br>
                <h4>Disapproved Videos</h4>
                <?php
                    
                    $query12=mysqli_query($connect,"select * from video where Status='disapproved' and User_email='".$_SESSION['email']."' ");
                    $count12=mysqli_num_rows($query12);
                ?>
                <p><b><?php echo $count12; ?></b></p><br>
              </div>
            </div>
          </div><?php */ ?>
        </div>

        <!-- end video -->

        <?php /* ?><div class="row">          
          <div class="col-md-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
              <div class="info"><br>
                <h4>Like</h4>
                <?php
                    
                    $query7=mysqli_query($connect,"select sum(Like_c) as count_like  from video where Status='approved' and User_email='".$_SESSION['email']."' ");
                    $count7=mysqli_fetch_array($query7);
                ?>
                <p><b><?php echo $count7['count_like']; ?></b></p><br>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-thumbs-o-down fa-3x"></i>
              <div class="info"><br>
                <h4>Unlike</h4>
                <?php
                    
                    $query8=mysqli_query($connect,"select sum(Unlike) as unlike from video where Status='approved' and User_email='".$_SESSION['email']."' ");
                    $count8=mysqli_fetch_array($query8);
                ?>
                <p><b><?php echo $count8['unlike']; ?></b></p><br>
              </div>
            </div>
          </div>
        </div><?php */?>
      </div>
    <?php include "footer.php" ?>