<?php include "header_session.php";?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>प्रश्न व उत्तर</title>
    
      <!-- Navbar-->
      <?php include "header.php";?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> प्रश्न व उत्तर </h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li> प्रश्न व उत्तर</li>
              <li class="active"><a href="#">प्रश्न व उत्तर</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp1=mysqli_query($connect,"select * from question where Question_id='".$_GET['question_id']."'") or die(mysqli_error($connect));
    $fetch1=mysqli_fetch_array($disp1);
?>        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <u><span style="font-size: 18px"><b>Question : </b> <?php echo$fetch1['Question'];?></span></u><br><br>
                <div style="overflow: scroll;">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>अनु. क्र.</th>
                      <th>कृती</th>
                      <th>व्यक्ती</th>
                      <th>उत्तर</th>
                                            
                    </tr>
                  </thead>
                  <tbody>
              <?php
                $disp=mysqli_query($connect,"select * from question_answer where Question_id='".$_GET['question_id']."'") or die(mysqli_error($connect));
                
                  $count=0;
                  while ($fetch=mysqli_fetch_array($disp))
                   {
                      extract($fetch);
                      $a=mysqli_query($connect,"select * from agriculture_officer where Officer_id='".$fetch['Officer_id']."'") or die(mysqli_error($connect));
                       $officer_id=$_SESSION['officer_id'];
                       $officer=$fetch['Officer_id'];
              ?>  
                    <tr>
                      <td><?php echo ++$count;?></td>
                      <td>
                         <?php if($officer==$officer_id){ ?>                                                
                      <a href="question_answer_delete.php?question_answer_id=<?=$Question_answer_id  ?>"  onclick="return confirm('आपली खात्री आहे की आपण हे उत्तर हटवू इच्छिता?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a>
                      <?php } else{ ?>
                        <!-- <a href="question_answer_delete.php?question_answer_id=<?=$Question_answer_id  ?>"  onclick="return false;"  class="disabled fa fa-trash-o text-danger fa-2x " type="submit" name="delete" style="padding-left:10px;"> -->
                          
                        </a>
                      <?php } ?>

                      </td>

                      <td>
                          <?php if($fetch['Answer_person_name']=='Admin'){

                            echo $fetch['Officer_name'];

                          }else{?>
                        <?php echo $fetch['Officer_name']; ?> (<?php echo $fetch['Answer_person_name'];?>)
                          <?php } ?>
                      </td>
                      <td><?php echo $fetch['Answer'];?></td>
                      
                                           
                      
                  </tr>
              <?php } ?>
                    
                  </tbody>
                </table>

              </div>
              <br>
              <center>
                <a href="javascript:history.back()"><button class="btn btn-danger" type="button">मागे</button></a>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include "footer.php" ?>