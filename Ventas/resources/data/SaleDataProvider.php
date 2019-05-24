<?php
	$insertSaleColumns = "SellerID, ClientName, ClientLastname, ClientCompany, Amount, PayDate, ProductTypeID, BillNumber";
	$selectSaleColumns = "ID, SellerID, ClientName, ClientLastname, ClientCompany, Amount, PayDate, ProductTypeID, BillNumber, CreatedDate, Payed, Validated";

	function InsertSale($sellerID, $clientName, $clientLastname, $clientCompany, $amount, $payDate, $productTypeID, $billNumber){
		global $insertSaleColumns;
		$sql = "INSERT INTO Sale (".$insertSaleColumns.")";
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
		$sql = "SELECT ".$selectSaleColumns." FROM Sale WHERE ID = ".$id." AND CreatedDate BETWEEN ".$fromDate." AND ".$toDate;
		return SqlSelect($sql);
	}

	function GetSellerComissions(){
    	$sql = "select sum( (t1.Amount * (t2.Comission) ) ) as total,t3.Name as vendedor from Sale as t1,ProductType as t2,User as t3 where t1.Validated = 1 and t1.SellerID = t3.id and t1.ProductTypeID = t2.id group by t1.SellerID";
	    return SqlSelect($sql);
	}

	function GetProductsComissions($seller){
    	$sql = "select sum( (t1.Amount * (t2.Comission) ) ) as total,t2.Name as producto from Sale as t1,ProductType as t2,User as t3 where t1.Validated = 1 and t1.SellerID = t3.id and t1.ProductTypeID = t2.id and t1.SellerID = " . $seller . "group_by t1.ProductTypeID";
	    return SqlSelect($sql);
	}
?>