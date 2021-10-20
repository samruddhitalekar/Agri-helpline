<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>योजना बघा</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> योजना </h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> योजना</li>
              <li class="active"><a href="#">योजना बघा</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select * from scheme where Officer_id='".$_SESSION['officer_id']."'") or die(mysqli_error($connect));

?>        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div style="overflow: scroll;">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>अनु. क्र.</th>
                      <th>कृती</th>
                      <!-- <th>व्यक्ती</th> -->
                      <th>योजना</th>
                      <th>योजना फाईल</th>
                      <th>तारीख</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php
                  $count=0;
                  while ($fetch=mysqli_fetch_array($disp))
                   {
                      extract($fetch);
              ?>  
                    <tr>
                      <td><?php echo ++$count;?></td>
                      <td>         
                                                                          
                      <a href="scheme_delete.php?scheme_id=<?=$Scheme_id ?>"  onclick="return confirm('आपली खात्री आहे की आपण ही योजना हटवू इच्छिता?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a></td>
                      <!-- <td><?php //echo $fetch['Scheme_person_name'];?></td>                       -->
                      <td><?php echo $fetch['Scheme_name'];?></td>                      
                      <td><a href="../images/scheme/<?php echo $fetch['Scheme_file']?>" target="_Bank" style="font-size: 14px;color:black" />बघा</a>
                      	<a href="../images/scheme/<?php echo $fetch['Scheme_file']?>"  Download style="padding-left:10px;font-size: 14px"/>डाऊनलोड</a>
                      </td>                      
                      <td><?php echo $fetch['Scheme_date'];?></td>
                      
                  </tr>
              <?php } ?>
                    
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include "footer.php" ?>