<?php
function seleccionar_perfil($id_user){    
  $sql = "SELECT t1.Id,t1.Name,t1.Description,t1.LogoUrl,t1.IdLocation,t1.IdBusinessType,t2.Latitude,t2.Longitude,t2.Suburb,t2.Street,t2.Number,t1.ApplicationStep FROM `Business` as t1, `Location` as t2,`User` as t3,`BusinessUser` as t4 WHERE t1.IdLocation = t2.Id and t4.IdUser = t3.id and t4.IdBusiness = t1.Id and t3.Id=".$id_user;
  $res = sqlSelect($sql)[0];
  return $res;
}
?>