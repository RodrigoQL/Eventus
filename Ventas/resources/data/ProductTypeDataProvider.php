<?php
	$selectProductTypeColumns = "ID, Name, Comission";

    function GetAllProductTypes(){
        global $selectProductTypeColumns;
		$sql = "SELECT ".$selectProductTypeColumns." FROM ProductType;";
		return SqlSelect($sql);
    }

	function GetProductType($id){
		global $selectProductTypeColumns;
		$sql = "SELECT ".$selectProductTypeColumns." FROM ProductType WHERE ID = ".$id.";";
		return SqlSelect($sql);
	}

	function InsertProductType($name, $comission){
		$sql = "INSERT INTO ProductType (Name, Comission) VALUES ('".$name."', ".$comission.");";
		return SqlInsert($sql);
	}
?>