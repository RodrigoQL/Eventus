<?php
include("../managers/database_manager.php");

function seleccionar_negocios(){    
  $sql = "SELECT t1.Id,t1.Name,t1.Description,t1.LogoUrl,t1.IdBusinessType,t1.IdLocation,t3.Latitude,t3.Longitude,t3.Suburb,t3.Street,t3.Number,t2.Name as Categoria,t1.Rating,t1.ApplicationStep FROM Business as t1,BusinessType as t2,Location as t3 WHERE t1.IdBusinessType = t2.Id and t1.IdLocation = t3.Id";
  $res = sqlSelect($sql);
  return $res;
}
?>