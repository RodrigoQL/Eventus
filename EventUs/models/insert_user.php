<?php
    include("../managers/database_manager.php");
    include("../models/session.php");

    $insert_username= $_POST['username'];
    $insert_password= $_POST['password'];
    $insert_name = $_POST['name'];
    $insert_lastname = $_POST['lastname'];
    $insert_email = $_POST['email'];
    $insert_phone = $_POST['phone'];
    
    $sql = "INSERT INTO User (Username, Password, Name, Lastname, Email, Phone, IdUserType) VALUES ('".$insert_username."', '".$insert_password."', '".$insert_name."', '".$insert_lastname."', '".$insert_email."', '".$insert_phone."', 3);";
    sqlInsert($sql);
    
    $sql = "SELECT Id, IdUserType FROM User WHERE Username = '".$login_username."' AND Password ='".$login_password."' LIMIT 1;";
    $recordsArray = sqlSelect($sql);
    SetSession($recordsArray[0]['Id'], $recordsArray[0]['IdUserType']);
    echo "1";
?>