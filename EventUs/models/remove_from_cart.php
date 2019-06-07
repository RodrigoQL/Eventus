<?php
    include("../managers/database_manager.php");
    include("../models/session.php");
    $userId = GetSessionUserId();
    $packageId= $_POST['packageId'];

    $sql = "DELETE FROM Cart WHERE UserId = ".$userId." AND PackageId = ".$packageId.";";
    sqlDelete($sql);
?>