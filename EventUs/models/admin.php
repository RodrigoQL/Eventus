<?php
include("../managers/database_manager.php");

function cantidad_negocios(){    
  $sql = "SELECT COUNT(id) FROM Business";
  return sqlSelect($sql)[0][0];
}

function cantidad_categorias(){
  $sql = "SELECT COUNT(id) FROM BusinessType";
  return sqlSelect($sql)[0][0];
}

function ventas_mes(){
  $sql = "SELECT sum(Total) FROM `Order` WHERE month(CreatedDate) = month(CURRENT_DATE)";
  $res = sqlSelect($sql)[0][0];
  if($res == null){
    return 0;
  }else{
    return $res;
  }
}

function ventas_anio(){
  $sql = "SELECT sum(Total) FROM `Order` WHERE year(CreatedDate) = year(CURRENT_DATE)";
  $res = sqlSelect($sql)[0][0];
  if($res == null){
    return 0;
  }else{
    return $res;
  }
}
?>