<?php
    include("../managers/database_manager.php");
    include("../models/session.php");

    $userId = GetSessionUserId();

    $sql = "SELECT P.Id, P.Name, P.Description, P.Price, P.ImageUrl, P.IdBusiness FROM Cart as C JOIN Package as P ON C.PackageId = P.Id WHERE C.UserId = ".$userId.";";
    $package_list = sqlSelect($sql);

    $total = 0;
    foreach($package_list as $row) {
        $total = $total + (int)$row['Price'];
    }

    $sql = "INSERT INTO `Order`(Total, IdUser) VALUES ( ".$total.", ".$userId.");";
    sqlInsert($sql);

    $sql = "SELECT Id FROM `Order` WHERE IdUser = ".$userId." ORDER BY Id DESC;";
    $orders = sqlSelect($sql);
    $order = $orders[0];
    $date = date("2019-06-07 21:00:00");

    foreach($package_list as $row) {
        $sql = 'INSERT INTO OrderPackage (DeliverDate, PickAtBusiness, Amount, IdOrder, IdPackage, IdLocation, IdBusiness)VALUES ("'.$date.'", 1, 1, '.$order["Id"].', '.$row["Id"].', 1, '.$row["IdBusiness"].');';
        sqlInsert($sql);
    }
    
    $sql = "DELETE FROM Cart WHERE UserId = ".$userId.";";
    sqlDelete($sql);
?>