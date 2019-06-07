<?php
  include("../managers/database_manager.php");
  $insert_paquete = $_POST['paquete'];
  $insert_name = $_POST['name'];
  $insert_description = $_POST['description'];
  $insert_price = $_POST['price'];
  $insert_imagen = $_POST['imagen'];
  $sql = "UPDATE Package SET `Name`='".$insert_name."', `Description`= '".$insert_description."',`Price`=".$insert_price.", `ImageUrl`='".$insert_imagen."' WHERE Id=".$insert_paquete;
  $recordsArray = sqlInsert($sql);
  echo "1";
?>