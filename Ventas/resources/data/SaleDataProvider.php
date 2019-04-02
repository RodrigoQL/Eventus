<?php
	include("DataProvider.php");
	$insertSaleColumns = "SellerID, ClientName, ClientLastname, ClientCompany, Amount, PayDate, ProductTypeID, BillNumber";
	$selectSaleColumns = "ID, SellerID, ClientName, ClientLastname, ClientCompany, Amount, PayDate, ProductTypeID, BillNumber, CreatedDate, Payed, Validated";

	function InsertSale($sellerID, $clientName, $clientLastname, $clientCompany, $amount, $payDate, $productTypeID, $billNumber){
		global $insertSaleColumns;
		$sql = "INSERT INTO Sale (".$insertSaleColumns.");"
		$sql .= " VALUES (".ValuesToString([$sellerID, $clientName, $clientLastname, $clientCompany, $amount, $payDate, $productTypeID, $billNumber]).");";
        return SqlInsert($sql);
	}

	function UpdatedPayed($id, $value){
		$sql = "UPDATE Sale SET Payed =".$value." WHERE ID = ".$id.";";
		return SqlInsert($sql);
	}

	function UpdateValidated($id, $value){
		$sql = "UPDATE Sale SET Validated =".$value." WHERE ID = ".$id.";";
		return SqlInsert($sql);
	}

	function GetSellerSales($id, $fromDate, $toDate){
		global $selectSaleColumns;
		$sql = "SELECT ".$selectSaleColumns." FROM Sale WHERE ID = ".$id." AND CreatedDate BETWEEN ".$fromDate." AND ".$toDate";";
		return SqlSelect($sql);
	}
?>