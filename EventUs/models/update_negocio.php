<?php
  include("../managers/database_manager.php");
  //Session
  $id_negocio = $_POST['id_negocio'];
  //Business
  $id_location = $_POST['id_location'];
  $insert_name = $_POST['name'];
  $insert_description = $_POST['description'];
  $insert_logo = $_POST['logo'];
  $insert_categoria = $_POST['categoria'];
  $insert_step = $_POST['step'];
  //Location
  $insert_latitud = $_POST['latitud'];
  $insert_longitud = $_POST['longitud'];
  $insert_colonia = $_POST['colonia'];
  $insert_calle = $_POST['calle'];
  $insert_numero = $_POST['numero'];
  //Actualizar business
  $sql_negocio = "UPDATE `Business` SET `Name`='".$insert_name."', `Description`='".$insert_description."', `LogoUrl`='".$insert_logo."',  `IdBusinessType`=".$insert_categoria.", `ApplicationStep`=".$insert_step." WHERE `Id`=".$id_negocio;
  sqlInsert($sql_negocio);
  //Actualizar location
  $sql_negocio = "UPDATE `Location` SET `Name`='".$insert_name."', `Latitude	`=".$insert_latitud.", `Longitude`=".$insert_longitud.",  `Suburb`='".$insert_colonia."', `Street`='".$insert_calle."',`Number`='".$insert_numero."' WHERE `Id`=".$id_location;
  sqlInsert($sql_negocio);
  echo "1";
?>