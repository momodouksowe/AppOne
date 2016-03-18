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
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >page menu 1</span>
						<input type="text" id="txtSearch" />
						<span class="menuitem">search</span>		
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						Content space
					<form action="" method="GET">
						Username<input type="text" name="txtSearch">
						<input type="submit" value="search" >		
					</form>		
<?php
    include_once ("users.php");
	//1) Create object of users class
	include_once ("users.php");
	$obj=new users();
	if(isset($_REQUEST['txtSearch'])){
	    $r=$obj->searchUsers($_REQUEST['txtSearch']);
	}
	else{
		$r=$obj->getUsers(); 
	}
	if($r==false){
	echo "error getting users";
	}
	
	echo "<table border=2 width=70% cellpadding=5 cellspacing=5>
	     <tr bgcolor= #ff0066>
		     <th>Usercode</th>
	         <th>Username</th>
			 <th>Firstname</th>
			 <th>Lastname</th>
			 <th>Usergroup</th>
			 <th>Edit</th>
			 <th>Delete</th>
			 <th>Status</th>
	     </tr>";
		 $i=1;
	while($row=$obj->fetch()){
		 if ($i % 2 != 0){
		  $col = "#999966";
		}else{
		  $col = "#ffffcc";  
		}
		echo "<tr bgcolor=$col>";
		     echo "<td>{$row['USERCODE']}</td>";
			 echo "<td>{$row['USERNAME']}</td>";
			 echo "<td>{$row['FNAME']}</td>";
			 echo "<td>{$row['LNAME']}</td>";
			 echo "<td>{$row['USERGROUP']}</td>";
?>
  
             <td><a href="USERSEDIT.php?USERCODE=<?php echo $row['USERCODE'];?>">Edit</a></td>
			 <td><a href="deletuser.php?del=1&USERCODE=<?php echo $row['USERCODE'];?>">Delete</a></td>
			 <td><a href="deletuser.php?st=2&USERCODE=<?php echo $row['USERCODE'];?>&STATUS=<?php echo $row['STATUS'];?>"><?php echo $row['STATUS'];?></a></td>
	<?php
 
		echo "</tr>";
		$i++;
	}
	echo "</table>";
	
	//2) Call the object's getUsers method and check for error
	
	
	//3) show the result
?>						
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	

	

