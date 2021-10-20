<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>अभिप्राय </title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> अभिप्राय </h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> अभिप्राय</li>
              <li class="active"><a href="#">अभिप्राय </a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select * from contact") or die(mysqli_error($connect));

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
                      <th>नाव</th>
                      <th>ईमेल आयडी</th>
                      <th>मोबाइल नंबर</th>
                      <th>संदेश</th>
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
                                                                          
                      <a href="contact_delete.php?contact_id=<?=$Contact_id ?>"  onclick="return confirm('आपली खात्री आहे की आपण हा अभिप्राय हटवू इच्छिता?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a></td>
                      <td><?php echo $fetch['Contact_name'];?></td>                      
                      <td><?php echo $fetch['Contact_email'];?></td>                      
                      <td><?php echo $fetch['Contact_mobile'];?></td>                      
                      <td><?php echo $fetch['Contact_message'];?></td>                      
                      <td><?php echo $fetch['Contact_date'];?></td>
                      
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