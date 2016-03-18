<html>
	<head>
		<title>Add New User</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
			<!--add validation js script here
		</script>
	</head>
	<body>
		<table>
			<tr>
				<td colspan="2" id="pageheader">
					Application Header
				</td>
			</tr>
			<tr>
				<td id="mainnav">
					<div class="menuitem">menu 1</div>
					<div class="menuitem">menu 2</div>
					<div class="menuitem">menu 3</div>
					<div class="menuitem">menu 4</div>
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >page menu 1</span>
						<span class="menuitem" >page menu 2</span>
						<span class="menuitem" >page menu 3</span>
						<input type="text" id="txtSearch" />
						<span class="menuitem">search</span>		
					</div>
<?php
			//initialize
			$strStatusMessage ="Add new user";
			$username="";
			$fristname="";
			$lastname="";
			$usergroup=0;
			$status=0;
			//1) what is the purpose of this if block
			if(isset($_REQUEST['username'])){
				$username=$_REQUEST['username'];
				$firstname=$_REQUEST['firstname'];
				$password=$_REQUEST['pword'];
				$usergroup=$_REQUEST['usergroup'];
				$permission=3;
				$status=$_REQUEST['status'];
				include_once("users.php");
				$obj=new users();
				$r=$obj->addUser($username,$firstname,$lastname,$password,$usergroup,$permission,$status);
				//1) what is the purpose of this if block
				if($r==false){
					$strStatusMessage="error while adding user";
				}else{
					$strStatusMessage="$username added";
				}

			}
?>
					<div id="divStatus" class="status">
						<?php echo  $strStatusMessage ?>
					</div>
					<div id="divContent">
						Content space
						<form action="" method="GET">
			<div>Username: <input type="text" name="username" value="<?php echo $username;  ?>"/></div>
			<div>First Name: <input type="text" name="firstname" value="<?php echo $fristname ?>"/>
			<div>Last Name: <input type="text" name="firstname" value="<?php echo $lastname ?>"/>
			<div>Password: <input type="password" name="pword"/></div>
			<div>
	<!--In this example the checkboxes are grouped as an array-->		
				Permission :<input type="checkbox" value="1" name="permission[]"> View
<input type="checkbox" value="2" name="permission[]"> Edit
<input type="checkbox" value="4" name="permission[]"> Delete				
			</div>
			<div>
				Account Status: <input type="radio" value="1"> Enabled
				<input type="radio" value="0"> Disabled
			</div>
			<div>User Group: 
				<select name="usergroup">
<?php
	//a call to the class
	include_once("usergroups.php");
	$usergroup= new usergroups();
	$result=$usergroup->getAllUserGroups();
	//echo $strQuery;
	if($result==false){
		//
		echo "result is false";
	}else{
		while($row=$usergroup->fetch()){
			echo "<option value='{$row['USERGROUP_ID']}'>{$row['GROUPNAME']}</option>";
		}
	}
	
	//display in loop
?>				
				</select>
			</div>
			<input type="submit" value="Add">
		</form>							
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	
