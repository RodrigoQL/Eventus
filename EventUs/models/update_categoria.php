<?php
  include("../managers/database_manager.php");
  $update_id = $_POST['id'];
  $update_name = $_POST['name'];
  $update_description = $_POST['description'];
  $sql = "UPDATE `BusinessType` SET `Name`='".$update_name."',`Description`='".$update_description."' WHERE `Id`=".$update_id;
  $recordsArray = sqlInsert($sql);
  echo "1";
?>