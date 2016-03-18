
<?php
    include_once ("equipment.php");
	
	$obj = new equipment();
	$code=$_REQUEST['EQUIPSERIALNUMBER'];
	$del=$_REQUEST['del'];
	
	
	if($del==1){
		$result=$obj->deleteEquipment($code);
		if($result){
			echo "Recorded";
		}else {
			echo "Error";
		}
	}
   
   header ("Location:equipmentlist.php");
?>
	