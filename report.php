<?php
/**
*/
include_once("adb.php");
/**
*Users  class
*/
class report extends adb{
	function reports(){
	}
	/**
	*Adds a new report
	*@param string usercode  name
	*@param string lab lab name
	*@param string equipment equipment name
	*/
	function addReport($usercode,$lab='none',$problem='none',$equipment='none'){
		$strQuery="UPDATE db_problem set
						LAB='$lab',
						PROBLEM='$problem',
						EQUIPMENT='$equipment',
						WHERE USERCODE=$usercode";
		return $this->query($strQuery);				
	}
	
	function getAllProblems()


}
?>