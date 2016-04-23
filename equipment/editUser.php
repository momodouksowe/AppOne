<html>
	
	</head>
	<body>
<?php
	include_once("users.php");
	if(isset($_REQUEST['UserCode'])){
		$obj = new users();
		$usercode=$_REQUEST['UserCode'];
		$steQuery="select * from users where UserCode='$usercode'";
		
		$rr=$obj->query($steQuery);

		$r=$obj->fetch();
?>
		<form action="" method="GET" onsubmit='validate()'>
			<div>UserCode<input type="text" name="UserCode" value="<?php echo $r['UserCode'] ?>"/></div>
			<div>UserGroup<input type="text" name="UserGroup" value="<?php echo $r['UserGroup'] ?>"/></div>
			<div>UserName<input type="text" name="UserName" value="<?php echo $r['UserName'] ?>"/></div>
			<div>FirstName<input type="text" name="FirstName" value="<?php echo $r['FirstName'] ?>"/></div>
			<div>LastName<input type="text" name="LastName" value="<?php echo $r['LastName'] ?>"/></div>
			<input type="submit" name="EDIT" value="EDIT">
			 
		</form>	
	</body>
</html>
	<?php }?>
<?php
   
if(isset($_REQUEST['EDIT'])){
	$obj = new users();
	$usercoder=$_REQUEST['UserCode'];
	$usergroup=$_REQUEST['UserGroup'];
	$username=$_REQUEST['UserName'];
	$firstname=$_REQUEST['FirstName'];
	$lastname=$_REQUEST['LastName'];
	
	$result=$obj->editUser($usercode,$usergroup,$username,$firstname,$lastname);
     print_r ($obj);
	if(!$result){
		echo "error editing";
	}else{
		echo "successfully edited";
		header ("Location:userslist.php");
	}
  }
?>