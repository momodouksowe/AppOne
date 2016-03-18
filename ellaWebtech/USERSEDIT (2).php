<html>
	
	</head>
	<body>
<?php
	include_once("users.php");
	if(isset($_REQUEST['USERCODE'])){
		$obj = new users();
		$usercode=$_REQUEST['USERCODE'];
		$steQuery="select * from ellausers where USERCODE='$usercode'";
		
		$rr=$obj->query($steQuery);

		$r=$obj->fetch();
?>
		<form action="" method="GET" onsubmit='validate()'>
			<div>USERCODE<input type="text" name="USERCODE" value="<?php echo $r['USERCODE'] ?>"/></div>
			<div>USERNAME<input type="text" name="USERNAME" value="<?php echo $r['USERNAME'] ?>"/></div>
			<div>FIRSTNAME<input type="text" name="FNAME" value="<?php echo $r['FNAME'] ?>"/></div>
			<div>LASTNAME<input type="text" name="LNAME" value="<?php echo $r['LNAME'] ?>"/></div>
			<div>STATUS<input type="text" name="STATUS" value="<?php echo $r['STATUS'] ?>"/></div>
			<input type="submit" name="EDIT" value="EDIT">
			 
		</form>	
	</body>
</html>
	<?php }?>
<?php
   
if(isset($_REQUEST['EDIT'])){
	$obj = new users();
	$usercode=$_REQUEST['USERCODE'];
	$username=$_REQUEST['USERNAME'];
	$firstname=$_REQUEST['FNAME'];
	$lastname=$_REQUEST['LNAME'];
	$status=$_REQUEST['STATUS'];
	
	$result=$obj->editUser($usercode,$username,$firstname,$lastname);
     print_r ($obj);
	if(!$result){
		echo "error editing";
	}else{
		echo "successfully edited";
		header ("Location:userslist.php");
	}
  }
?>