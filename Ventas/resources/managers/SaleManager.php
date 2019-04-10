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
        InsertSale($userID, $clientName, $clientLastname, $clientCompany, $amount, $payDate, $productTypeID, $billNumber);
        return "Venta Creada";
    }

    function HtmlProductsTable(){
        $products = GetAllProductTypes();
        $html = ProductsTable($products);
        return $html;
    }

    function CreateProductType($name, $comission){
        return InsertProductType($name, $comission);
    }
?>