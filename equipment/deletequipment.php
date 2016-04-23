
<?php
    include_once ("users.php");
	
	$obj = new users();
	$usercode=$_REQUEST['UserCode'];
	$delete=$_REQUEST['del'];
	
	
	if($delete==1){
		$result=$obj->deleteUser($usercode);
		if($result){
			echo "Recorded";
		}else {
			echo "Error";
		}
	}
   
   header ("Location:userslist.php");
?>
	