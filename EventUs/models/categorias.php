<?php
include("../managers/database_manager.php");

function seleccionar_categorias(){    
  $sql = "SELECT Id,Name,Description FROM BusinessType";
  $res = sqlSelect($sql);
  return $res;
}
?>