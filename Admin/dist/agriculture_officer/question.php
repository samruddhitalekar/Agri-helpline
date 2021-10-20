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
              <!-- <li> प्रश्न व उत्तर</li> -->
              <li class="active"><a href="#">प्रश्न व उत्तर</a></li>
            </ul>
          </div>
        </div>
<?php
    include "config.php";
    
    $disp=mysqli_query($connect,"select * from question") or die(mysqli_error($connect));

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
                      <th>प्रश्न</th>
                                            
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
                      <a href="question_answer_add.php?question_id=<?=$Question_id ?>" class="fa fa-pencil-square-o text-success fa-2x" type="submit" name="edit" style="padding-left:10px;"></a>

                      <a href="question_answer_view.php?question_id=<?=$Question_id ?>" class="fa fa-eye text-info fa-2x" type="submit" name="view" style="padding-left:10px;"></a>          
                                                                          
                      <!-- <a href="question_delete.php?question_id=<?=$Question_id  ?>"  onclick="return confirm('आपली खात्री आहे की आपण हे प्रश्न व उत्तर हटवू इच्छिता?');"  class="fa fa-trash-o text-danger fa-2x" type="submit" name="delete" style="padding-left:10px;" ></a> -->
                    </td>
                      
                      <td><?php echo $fetch['Question'];?></td>
                      
                                           
                      
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