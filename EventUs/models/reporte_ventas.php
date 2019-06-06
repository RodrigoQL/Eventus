<?php
include("../managers/database_manager.php");

function seleccionar_ventas(){    
  $sql = "SELECT t1.Id,t1.CreatedDate,t1.Total,t3.Username,t2.Name FROM `Order` as t1,`Business` as t2,`User` as t3,`OrderPackage` as t4 WHERE t1.IdUser = t3.Id and t4.IdBusiness = t2.Id and t4.IdOrder = t1.Id";
  $res = sqlSelect($sql);
  return $res;
}
?>