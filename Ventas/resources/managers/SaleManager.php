<?php
	include("resources/data/DataProvider.php");
    include("resources/templates/SaleTemplates.php");
    include("resources/data/ProductTypeDataProvider.php");
    include("resources/data/SaleDataProvider.php");

    function HtmlProductsDropdown(){
        $products = GetAllProductTypes();
        $html = ProductsDropdown($products);
        return $html;
    }

    function HtmlComissionsTable(){
        $comissions = GetSellerComissions();
        $html = ComissionsTable($comissions);
        return $html; 
    }

    function HtmlComissionsTableByUser(){
        session_start();
        $userID = $_SESSION['UserID'];
        $comissions = GetSellerComissions();
        $html = ComissionsTable($comissions);
        return $html; 
    }

    function CreateSale($clientName, $clientLastname, $clientCompany, $amount, $payDate, $productTypeID, $billNumber){
        session_start();
        $userID = $_SESSION['UserID'];
        InsertSale($userID, $clientName, $clientLastname, $clientCompany, $amount, $payDate, $productTypeID, $billNumber);
        return "Venta Creada";
    }

    function HtmlProductsTable(){
        $products = GetAllProductTypes();
        $html = ProductsTable($products);
        return $html;
    }

    function HtmlSalesTables($userId, $fromDate, $toDate) {
        $sales = GetSellerSales($userId, $fromDate, $toDate);
        $html = SalesTable($sales);
        return $html;
    }

    function CreateProductType($name, $comission){
        return InsertProductType($name, $comission);
    }
?>