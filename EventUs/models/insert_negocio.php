<?php
  include("../managers/database_manager.php");
  //Session
  $id_negocio = $_POST['id_negocio'];
  $id_user = $_POST['id_user'];
  //Business
  $id_location = $_POST['id_location'];
  $insert_name = $_POST['name'];
  $insert_description = $_POST['description'];
  $insert_logo = $_POST['logo'];
  $insert_categoria = $_POST['categoria'];
  $insert_step = $_POST['step'];
  $rating = 5;
  $aprobado = 1;
  //Location
  $insert_latitud = $_POST['latitud'];
  $insert_longitud = $_POST['longitud'];
  $insert_colonia = $_POST['colonia'];
  $insert_calle = $_POST['calle'];
  $insert_numero = $_POST['numero'];
  if($id_negocio == 0){
    //Insert location
    $sql_location = "INSERT INTO Location (Name, Latitude, Longitude, Suburb, Street, Number) VALUES ('".$insert_name."', ".$insert_latitud.", ".$insert_longitud.",'".$insert_colonia."', '".$insert_calle."','".$insert_numero."');";
    echo "Esta Agregando la Wea";
    sqlInsert($sql_location);
    //Obtener id de la ubicación
    $sql_obtener_location = "SELECT Id FROM Location order by Id desc limit 1";
    $id_location = sqlSelect($sql_obtener_location)[0][0];
    //Insert business
    $sql_negocio = "INSERT INTO Business (Name, Description, LogoUrl, Rating, IdLocation, IdBusinessType, Approved, ApplicationStep) VALUES ('".$insert_name."', '".$insert_description."', '".$insert_logo."',".$rating.", ".$id_location.",".$insert_categoria.",".$aprobado.",".$insert_step.");";
    sqlInsert($sql_negocio);
    //Obtener id de la ubicación
    $sql_obtener_business = "SELECT Id FROM Business order by Id desc limit 1";
    $id_business = sqlSelect($sql_obtener_business)[0][0];
    //Insertar relación negocio usuario
    $sql_negocio = "INSERT INTO BusinessUser (IdUser, IdBusiness) VALUES (".$id_user.", ".$id_business.");";
    sqlInsert($sql_negocio);
  }else if($id_negocio > 0){
    echo "actualizando la wea";
    //Actualizar business
    $sql_negocio = "UPDATE `Business` SET `Name`='".$insert_name."', `Description`='".$insert_description."', `LogoUrl`='".$insert_logo."',  `IdBusinessType`=".$insert_categoria.", `ApplicationStep`=".$insert_step." WHERE `Id`=".$id_negocio;
    sqlInsert($sql_negocio);
    //Actualizar location
    $sql_negocio = "UPDATE `Location` SET `Name`='".$insert_name."', `Latitude	`=".$insert_latitud.", `Longitude`=".$insert_longitud.",  `Suburb`='".$insert_colonia."', `Street`='".$insert_calle."',`Number`='".$insert_numero."' WHERE `Id`=".$id_location;
    sqlInsert($sql_negocio);
  }else{
    echo "ES NULO LA WEA";
  }
  echo "1";
?>