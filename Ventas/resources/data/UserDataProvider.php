<?php
	include("DataProvider.php");
	$selectUserColumns = "ID, Username, Password, Email, Phone, Name, Lastname, UserTypeID";

    function GetAllUsers(){
        global $selectUserColumns;
		$sql = "SELECT ".$selectUserColumns." FROM User;";
		return SqlSelect($sql);
    }

	function GetUser($username){
		global $selectUserColumns;
		$sql = "SELECT ".$selectUserColumns." FROM User WHERE Username = ".$username.";";
		return SqlSelect($sql);
	}
?>