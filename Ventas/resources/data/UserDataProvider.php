<?php
	$selectUserColumns = "ID, Username, Password, Email, Phone, Name, Lastname, UserTypeID";

    function GetAllSellers(){
        global $selectUserColumns;
		$sql = "SELECT ".$selectUserColumns." FROM User WHERE UserTypeID = 2;";
		return SqlSelect($sql);
    }

	function GetUser($username, $password){
		global $selectUserColumns;
		$sql = "SELECT ".$selectUserColumns." FROM User WHERE Username = '".$username."' AND Password = '".$password."';";
		$userArray = SqlSelect($sql);
		$rowCount = count( $userArray );
		if( $rowCount > 0 ){
			return $userArray[0];
		}
	}
?>