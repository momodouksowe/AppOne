<html>
	<head>
		<title>Add New User</title>
		
<?php
    include_once ("equipment.php");
	//1) Create object of equipment class
	include_once ("equipment.php");
	$obj=new equipment();
	if(isset($_REQUEST['txtSearch'])){
	    $r=$obj->searchEquipment($_REQUEST['txtSearch']);
	}
	else{
		$r=$obj->getEquipment(); 
	}
	if($r==false){
	echo "error getting equipment";
	}

	
	echo "<table border=2 width=70% cellpadding=5 cellspacing=5>
	     <tr bgcolor= #ff0066>
		     <th>Equipserialnumber</th>
	         <th>Equipname</th>
			 
			 <th>Quantity</th>
			 <th>LabNumber</th>
			 <th>Edit</th>
			 <th>Delete</th>
			
	     </tr>";
		 $i=1;
	while($row=$obj->fetch()){
		 if ($i % 2 != 0){
		  $col = "#999966";
		}else{
		  $col = "#ffffcc";  
		}
		echo "<tr bgcolor=$col>";
		     echo "<td>{$row['EQUIPSERIALNUMBER']}</td>";
			 echo "<td>{$row['EQUIPNAME']}</td>";
			 echo "<td>{$row['QUANTITY']}</td>";
			 echo "<td>{$row['LABNUMBER']}</td>";
?>
  
             <td><a href="EQUIPMENTEDIT.php?EQUIPSERIALNUMBER=<?php echo $row['EQUIPSERIALNUMBER'];?>">Edit</a></td>
			 <td><a href="deletequipment.php?del=1&EQUIPSERIALNUMBER=<?php echo $row['EQUIPSERIALNUMBER'];?>">Delete</a></td>
			 
	<?php
 
		echo "</tr>";
		$i++;
	}
	echo "</table>";
	
	echo "<div><a href='equipmentadd.php'>Add New Equipment</a></div>";
?>						
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	

	

