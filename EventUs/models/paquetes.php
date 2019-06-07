<?php
include("../managers/database_manager.php");

function seleccionar_paquetes(){    
  $sql = "SELECT Id,Name,Description,Price,ImageUrl FROM Package";
  $res = sqlSelect($sql);
  return $res;
}
function contar_paquetes($id_user){
  $negocio = seleccionar_negocio($id_user);
  $sql = "SELECT COUNT(Id) FROM Package WHERE IdBusiness=".$negocio;
  $res = sqlSelect($sql)[0][0];
  return $res;
}
function seleccionar_negocio($id_user){
  $sql = "SELECT IdBusiness FROM BusinessUser WHERE IdUser=".$id_user;
  $res = sqlSelect($sql)[0][0];
  return $res;
}
?>