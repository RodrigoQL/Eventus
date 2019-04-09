<?php
    include("templates/SaleTemplates.php");
    include("data/ProductTypeDataProvider.php");
    include("data/SaleDataProvider.php");
    function HtmlProductsDropdown(){
        $products = GetAllProductTypes();
        $html = ProductsDropdown($products);
        return $html;
    }

    function CreateSale($clientName, $clientLastname, $clientCompany, $amount, $payDate, $productTypeID, $billNumber){
        session_start();
        $userID = $_SESSION['UserID'];
        return InsertSale($userID, $clientName, $clientLastname, $clientCompany, $amount, $payDate, $productTypeID, $billNumber)
    }
?>