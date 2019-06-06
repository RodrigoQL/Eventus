<?php
    include("../managers/database_manager.php");
    function select_business($businessId){    
      $sql = "SELECT B.Id ,B.Name, B.Description, B.LogoUrl, B.Rating, BT.Name as CategoryName FROM Business as B JOIN BusinessType as BT ON B.IdBusinessType = BT.Id WHERE B.Approved = 1 AND B.Id = ".$businessId.";";
      $res = sqlSelect($sql);
      return $res[0];
    }
?>