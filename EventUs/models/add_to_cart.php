<?php
    include("../managers/database_manager.php");
    include("../models/session.php");

    $userId = GetSessionUserId();
    $packageId= $_POST['packageId'];

    $sql = "INSERT INTO Cart (UserId, PackageId) VALUES (".$userId.", ".$packageId.");";
    $recordsArray = sqlInsert($sql);
    
    echo "Paquete Agregado al Carrito";
?>