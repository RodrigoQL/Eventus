<?php
include("../managers/database_manager.php");

function seleccionar_paquetes($id_user) {
  $sql = "SELECT P.Id, P.Name, P.Description, P.Price, P.ImageUrl FROM Package as P JOIN BusinessUser as B ON B.IdBusiness = P.IdBusiness WHERE B.IdUser = ".$id_user;
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