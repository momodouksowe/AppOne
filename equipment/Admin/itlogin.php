<html>
<head>
<title>
Admin
</title>

</head>
<body>
<center>
	
	<form action="" method = "GET">
	<h3> Admin Login </h3>
	Username: <input type= "text" name ="username"> </br></br>
	Password: <input type= "text" name ="password"></br></br>
	<input type="submit" value="login">
    

<?php 
include_once("../Admin/it.php");
$obj = new it();

if(isset($_REQUEST['username'])){
	$username=$_REQUEST['username'];
		
	if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];
		
    $result = $obj->login($username,$password);

    $row = $obj->fetch();
    if ($row > 0) {
	echo "login successful";
	header("location:  ../equipment/equipmentlist.php");
	}
elseif ($row < 1){
	echo "login not successful";
}
}
?>



</form>
</center>

</body>
</html>