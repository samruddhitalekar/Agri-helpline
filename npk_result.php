<script>
		  function printthis()
{
 var w = window.open('', '', 'width=500,height=500,resizeable,scrollbars');
 w.document.write($("#printthis").html());
 w.document.close(); // needed for chrome and safari
 javascript:w.print();
 w.close();
 return false;
}
</script>

<?php
include "config.php";
if(isset($_POST['n_value']) && isset($_POST['p_value']) &&  isset($_POST['k_value']) &&  isset($_POST['crop_name']))
{

	$query=mysqli_query($connect,"select * from npk where NPK_id='".$_POST['crop_name']."'");
    $row=mysqli_fetch_assoc($query);

    $a= $row['N_value']."<br>";
	$b= $_POST['n_value']."<br>";
	$c= $row['P_value']."<br>";
	$d= $_POST['p_value']."<br>";
	$e= $row['K_value']."<br>";
	$f= $_POST['k_value']."<br>";

    if($a==$b)
     {
       $n=$row['N_urea']."g";
	 //  echo $n;
     }
	 elseif($a > $b)
	 {
	   $n1=$row['N_value']-$_POST['n_value'];
	   $n=$n1/46*100;
	  // echo round($n);
	 }
	 else
	 {
	  $n=0;
	 // echo $n;
	 }
	 //--------------------------------------- For P Value ------------------------------------------//
	  if($c==$d)
     {
       $p=$row['P_urea']."g";
	 //  echo $n;
     }
	 elseif($c > $d)
	 {
	   $p1=$row['P_value']-$_POST['p_value'];
	   $p=$p1/16*100;
	  // echo round($n);
	 }
	 else
	 {
	  $p=0;
	 // echo $n;
	 }
	  //-------------------------------------- For K Value -----------------------------------------//

	  if($e==$f)
     {
       $k=$row['K_urea']."g";
	 //  echo $n;
     }
	 elseif($e > $f)
	 {
	   $k1=$row['K_value']-$_POST['k_value'];
	   $k=$k1/60*100;
	  // echo round($n);
	 }
	 else
	 {
	  $k=0;
	 // echo $n;
	 }


?>
<div id="printthis" align="center" style="height:800px;margin-left: 25px; border: 1px solid Black">
	<br><br>
	<div class="w3ls-heading">
		<h2 class="h-two">NPK Report</h2>
		<p class="sub two"></p>
	</div>
	<div class="agileits_mail_grids">
		<div class="col-md-2"></div>
		<div class="col-md-8 agileits_mail_grid_left">
			

				<table class="table table-hover table-bordered" id="sampleTable">
	                  <thead>
	                    <tr>
	                      <th>N</th>
	                      <th>P</th>
	                      <th>K</th>         
	                    </tr>
	                  </thead>
	                  <tbody>
	                    <tr>
							<td><?php $n= round($n);echo $n." gram Urea Required";?></td>
							<td><?php $p= round($p); echo  $p." gram SSP Required";?></td>
							<td><?php $k= round($k);echo $k." gram MOP Required";?></td>                      
	                  </tr>
	              
	                  </tbody>
	                </table>
	                <br>


	          <?php  /*        New Graph            */
        $dataPoints = array(
            array("y" => $n, "name" => "Urea", "exploded" => true),
            array("y" => $p, "name" => "SOP"),
            array("y" => $k, "name" => "MOP"),
            ///array("y" => $s, "name" => "Service"),
            
        );
    ?>  
	<div id="chartContainer" style="width:75%"></div>
        <script type="text/javascript">
            $(function () {
                var chart = new CanvasJS.Chart("chartContainer",
                {
                    theme: "theme2",
                    title:{
                        text: "NPK Analysis"
                    },
                    exportFileName: "New Year Resolutions",
                    exportEnabled: true,
                    animationEnabled: true,
					data: [
                    {       
                        type: "pie",
                        showInLegend: true,
                        toolTipContent: "{name}: <strong>{y}gram</strong>",
                        indexLabel: "{name} {y}gram",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                });
				chart.render();
            });
        </script>
        
</div>

			
		</div>
	</div>
</div>

<?php } ?>

<!-- <center><button type="submit" name="print" value="Print" onClick="printthis()">Print</button></center> -->