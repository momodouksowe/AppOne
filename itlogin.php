 

<?php 

	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}
	/*get command*/
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			AdminLogin();		//if cmd=1 the call delete
			break;

	}


	function AdminLogin(){
		 include_once("it.php");

		if(!isset($_REQUEST['id'])){
			

			echo "usercode is not given";	//change to json message	
			exit();
		}

	$password=$_REQUEST['id'];
	if(isset($_REQUEST['username'])){
	$username=$_REQUEST['username'];
}
	if(isset($_REQUEST['usertype'])){
	$usertype=$_REQUEST['usertype'];
}

    $obj = new it();
	
	//echo $username;

    $result = $obj->login($username,$password, $usertype);
    $row = $obj->fetch();
        if($row<1){
			echo '{"result":0,"message":"User code not provided"}';	
			return;
		}else{
		
		echo '{"result":1,"user":';
			echo json_encode($row);
		echo '}';

	 }

 //    include_once("../Admin/it.php");
 //    $obj = new it();

 //   if(isset($_REQUEST['username'])){
	// $username=$_REQUEST['username'];
		
	// if(isset($_REQUEST['password']))
	// $password=$_REQUEST['password'];
		
 //    $result = $obj->login($username,$password);
 //    if($result==false){
	// 		echo '{"result":0,"message":"User code not provided"}';	
	// 		return;
	// 	}
		
	// 	echo '{"result":1,"user":';
	// 		echo json_encode($result);
	// 	echo '}';

//     $row = $obj->fetch();
//     if ($row > 0) {
// 	echo "login successful";
// 	header("location:  ../equipment/equipmentlist.php");
// 	}
// elseif ($row < 1){
// 	echo "login not successful";
// }
}


?>
