<?php
  include("../managers/database_manager.php");
  $id = $_POST['id'];
  $sql = "DELETE FROM `BusinessType` WHERE `Id`=".$id;
  sqlDelete($sql);
  header("Location: ../views/categorias_negocios.php");
?>