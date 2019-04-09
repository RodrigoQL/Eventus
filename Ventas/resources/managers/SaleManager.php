<?php
    include("templates/SaleTemplates.php");
    include("data/ProductTypeDataProvider.php");

    function HtmlProductsDropdown(){
        $products = GetAllProductTypes();
        $html = ProductsDropdown($products);
        return $html;
    }
?>