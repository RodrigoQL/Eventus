<?php
    include("DataProvider.php");

	function CreateUser($user, $password, $name, $lastname, $email, $phone, $userTypeID){
		$sql = "INSERT INTO User (Name, Lastname, Username, Password, Email, Phone, UserTypeID) VALUES ('".$name."','".$lastname."','".$user."','".$password."','".$email."','".$phone."',".$userTypeID.");";
        return sqlInsert($sql);;
	}
?>