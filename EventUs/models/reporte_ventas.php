<?php
include("../managers/database_manager.php");

function seleccionar_ventas(){    
  $sql = "SELECT t1.Id,t1.CreatedDate,t1.Total,t3.Username,t2.Name FROM `order` as t1,`business` as t2,`user` as t3,`orderpackage` as t4 WHERE t1.IdUser = t3.Id and t4.IdBusiness = t2.Id and t4.IdOrder = t1.Id";
  $res = sqlSelect($sql);
  return $res;
}
?>