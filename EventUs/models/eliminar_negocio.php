<?php
  include("../managers/database_manager.php");
  $id_negocio = $_POST['id_negocio'];
  $id_user = $_POST['id_user'];
  $sql = "DELETE FROM `Business` WHERE `Id`=".$id_negocio;
  sqlDelete($sql);
  $sql = "DELETE FROM `BusinessUser` WHERE `IdBusiness`=".$id_negocio." and `IdUser`=".$id_user;
  sqlDelete($sql);
  header("Location: ../views/negocios.php");
?>