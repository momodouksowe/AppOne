<?php
	session_start();
	if(!isset($_SESSION['userId'])){
		header("Location: loginAjax.php");
		exit();
	}
	$row = $_SESSION['userId'];

?>
<html>
	<head>
	<link rel="stylesheet" href="../css/style.css">
		<title>Equipment</title>

		<div id = "headerBar">
		<div id = "logo">
		<img src="../images/logo.png"></img>
		</div>

		<div id = "menu">
		<ul>
		<li><a href="logout.php">logout</a></li>
		</ul>
		</div>
		</div>

    </head>
    <body>
    <center>
    <h1> Report Page!</h1>
    </center>
    </body>
</html>	