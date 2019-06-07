<?php
function seleccionar_perfil($id_negocio){    
  $sql = "SELECT t1.Name,t1.Description,t1.LogoUrl,t1.IdBusinessType,t2.Latitude,t2.Longitude,t2.Suburb,t2.Street,t2.Number,t1.ApplicationStep FROM `Business` as t1, `Location` as t2 WHERE t1.IdLocation = t2.Id and t1.Id=".$id_negocio;
  $res = sqlSelect($sql)[0];
  return $res;
}
?>