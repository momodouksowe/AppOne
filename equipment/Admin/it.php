<?php
include_once("dbconn.php");
class IT extends dbconn{
	
function login($username,$password,$usertype){
	$strQuery= "select * from customer where USERNAME like '$username' and PWORD like '$password' and usertype = '$admin'";
	return $this->query($strQuery);

}
}
?>