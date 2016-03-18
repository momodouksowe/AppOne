
<?php
    include_once ("users.php");
	
	$obj = new users();
	$code=$_REQUEST['USERCODE'];
	$del=$_REQUEST['del'];
	$sta=$_REQUEST['st'];
	//$sta=$_REQUEST['st'];
	$status=$_REQUEST['STATUS'];
	
	if($del==1){
		$result=$obj->deleteUser($code);
		if($result){
			echo "Recorded";
		}else {
			echo "Error";
		}
	}else if($sta){
		$r=$obj->Status($code,$status);
		echo ($r);
		if($r){
			echo "Chaged successfully";
		}else{
			echo "Error changing";
		}
	}
   
   header ("Location:userslist.php");
?>
	