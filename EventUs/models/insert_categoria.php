<?php
  include("../managers/database_manager.php");
  $insert_name = $_POST['name'];
  $insert_description = $_POST['description'];
  $sql = "INSERT INTO BusinessType (Name, Description) VALUES ('".$insert_name."', '".$insert_description."');";
  $recordsArray = sqlInsert($sql);
  echo "1";
?>