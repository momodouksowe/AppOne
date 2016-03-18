<html>
	<head>
		<title>Add New Equipment</title>
		
<?php
			//initialize
			$strStatusMessage ="Add new equipment";
			$equipname="";
			$quantity="";
			$labNumber="";



			if(isset($_REQUEST['equipname'])){
				$equipname=$_REQUEST['equipname'];
				$quantity=$_REQUEST['quantity'];
				$labNumber=$_REQUEST['labNumber'];
				//echo $labNumber; echo " is the labnumber";
				$serialNum = $_REQUEST['equipserialnumber'];
				
				include_once("equipment.php");
				$obj=new equipment();
				$r=$obj->addEquipment($serialNum, $equipname,$quantity,$labNumber);

				if($r==false){
					$strStatusMessage="error while adding equipment";
				}else{
					$strStatusMessage="$equipname added";
				}

			}
?>
					<div id="divStatus" class="status">
						<?php echo  $strStatusMessage ?>
					</div>
					<div id="divContent">
						Content space
						<form action="" method="GET">
			<div>Equipserialnumber: <input type="text" name="equipserialnumber" >
			<div>Equipname: <input type="text" name="equipname" value=""/></div>
			<div>Quantity: <input type="text" name="quantity" value=""/>
			<div>LabNumber: <input type="text" name="labNumber" value=""/>
			<div>
			<input type="submit" name = "submit">
			</div>
			<a href="equipmentlist.php">Done</a>
		
	
</html>	
