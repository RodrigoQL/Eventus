<?php
    include("resources/templates/SaleTemplates.php");
    include("resources/data/ProductTypeDataProvider.php");

    function HtmlProductsDropdown(){
        $products = GetAllProductTypes();
        $html = ProductsDropdown($products);
        return $html;
    }
?>