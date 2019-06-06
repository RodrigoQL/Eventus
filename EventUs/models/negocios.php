<?php
include("../managers/database_manager.php");

function seleccionar_negocios(){    
  $sql = "SELECT t1.Id,t1.Name,t1.Description,t2.Name as Categoria,t1.Rating FROM business as t1,businesstype as t2 WHERE t1.IdBusinessType = t2.Id";
  $res = sqlSelect($sql);
  return $res;
}
?>