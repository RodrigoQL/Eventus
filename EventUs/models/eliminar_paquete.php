<?php
  include("../managers/database_manager.php");
  $id = $_POST['id'];
  $sql = "DELETE FROM `Package` WHERE `Id`=".$id;
  sqlDelete($sql);
  header("Location: ../views/paquetes.php");
?>