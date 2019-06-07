<?php
  include("../managers/database_manager.php");
  $insert_negocio = $_POST['negocio'];
  $insert_name = $_POST['name'];
  $insert_description = $_POST['description'];
  $insert_price = $_POST['price'];
  $insert_imagen = $_POST['imagen'];
  $sql = "INSERT INTO Package (Name, Description,Price, ImageUrl, IdBusiness) VALUES ('".$insert_name."', '".$insert_description."',".$insert_price.",'".$insert_imagen."',".$insert_negocio.");";
  $recordsArray = sqlInsert($sql);
  echo "1";
?>