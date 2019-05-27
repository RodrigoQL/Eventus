<?php
    include("../managers/database_manager.php");

    $login_username= $_POST['username'];
	$login_password= $_POST['password'];
    
    $sql = "SELECT IdUserType FROM User WHERE Username = '".$login_username."' AND Password ='".$login_password."' LIMIT 1;";
    $recordsArray = sqlSelect($sql);
    $rowCount = count( $recordsArray );
    
    if( $rowCount > 0 ) {
        $ret_val = $recordsArray[0]['IdUserType'];
    } else {
        $ret_val = 0;
    }
    
    echo $ret_val;
?>