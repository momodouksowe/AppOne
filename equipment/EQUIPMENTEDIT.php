<html>
	
	</head>
	<body>
<?php
	include_once("equipment.php");
	if(isset($_REQUEST['EQUIPSERIALNUMBER'])){
		$obj = new equipment();
		$equipserialnumber=$_REQUEST['EQUIPSERIALNUMBER'];
		$steQuery="select * from equipment where EQUIPSERIALNUMBER='$equipserialnumber'";
		
		$rr=$obj->query($steQuery);

		$r=$obj->fetch();
?>
		<form action="" method="GET" onsubmit='validate()'>
			<div>EQUIPSERIALNUMBER<input type="text" name="EQUIPSERIALNUMBER" value="<?php echo $r['EQUIPSERIALNUMBER'] ?>"/></div>
			<div>EQUIPNAME<input type="text" name="EQUIPNAME" value="<?php echo $r['EQUIPNAME'] ?>"/></div>
			<div>QUANTITY<input type="text" name="QUANTITY" value="<?php echo $r['QUANTITY'] ?>"/></div>
			<div>LABNUMBER<input type="text" name="LABNUMBER" value="<?php echo $r['LABNUMBER'] ?>"/></div>
			
			<input type="submit" name="EDIT" value="EDIT">
			 
		</form>	
	</body>
</html>
	<?php }?>
<?php
   
if(isset($_REQUEST['EDIT'])){
	$obj = new equipment();
	$equipserialnumber=$_REQUEST['EQUIPSERIALNUMBER'];
	$equipname=$_REQUEST['EQUIPNAME'];
	$quantity=$_REQUEST['QUANTITY'];
	$labnumber=$_REQUEST['LABNUMBER'];
	$status=$_REQUEST['STATUS'];
	
	$result=$obj->editEquipment($equipserialnumber,$equipname,$quantity,$labnumber);
     print_r ($obj);
	if(!$result){
		echo "error editing";
	}else{
		echo "successfully edited";
		header ("Location:equipmentlist.php");
	}
  }
?>