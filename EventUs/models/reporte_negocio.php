<?php
include("../managers/database_manager.php");

function seleccionar_ventas_negocio($id_user){    
  $sql = "SELECT t1.Id,t1.CreatedDate,t1.Total,t3.Username FROM `Order` as t1,`Business` as t2,`User` as t3,`OrderPackage` as t4,`BusinessUser` as t5 WHERE t1.IdUser = t3.Id and t4.IdBusiness = t2.Id and t4.IdOrder = t1.Id and t4.IdBusiness = t5.IdBusiness and t5.IdUser=".$id_user;
  $res = sqlSelect($sql);
  return $res;
}
?>