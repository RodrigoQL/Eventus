<?php
    include("../managers/database_manager.php");

    function validateUser($login_username, $login_password){
        
        $sql = "SELECT Id, IdUserType FROM User WHERE Username = '".$login_username."' AND Password ='".$login_password."' LIMIT 1;";
        $recordsArray = sqlSelect($sql);
        return $recordsArray;
    }

?>