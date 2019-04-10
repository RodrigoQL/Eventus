<?php
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
?>