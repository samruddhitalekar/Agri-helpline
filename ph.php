<?php
if(isset($_POST["crop_name"])){
	 $str = $_POST['crop_name'];
				
     include "config.php"; 

	   $select1=mysqli_query($connect,"select Distinct PH from npk where NPK_id='".$str."'") or die(mysqli_error($connect));
	   
	  
	 while($sele1=mysqli_fetch_array($select1))
{
	echo $sele1['PH'];

	}	 
		
}
?>