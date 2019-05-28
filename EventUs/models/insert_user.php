<?php
    include("../managers/database_manager.php");

    $insert_username= $_POST['username'];
    $insert_password= $_POST['password'];
    $insert_name = $_POST['name'];
    $insert_lastname = $_POST['lastname'];
    $insert_email = $_POST['email'];
    $insert_phone = $_POST['phone'];
    
    $sql = "INSERT INTO User (Username, Password, Name, Lastname, Email, Phone, IdUserType) VALUES ('".$insert_username."', '".$insert_password."', '".$insert_name."', '".$insert_lastname."', '".$insert_email."', '".$insert_phone."', 1);";
    $recordsArray = sqlInsert($sql);
    
    echo "1";
?>