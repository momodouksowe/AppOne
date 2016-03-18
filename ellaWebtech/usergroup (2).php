<?php
include_once("adb.php");
class usergroups extends adb{
	function usergroup(){
	
	}
	
	function getAllUserGroups(){
		$strQuery="select USERGROUP_ID, GROUPNAME from usergroups";
		return $this->query($strQuery);
	
	}

}

?>