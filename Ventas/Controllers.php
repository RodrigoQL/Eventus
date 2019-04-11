<?php
    include("resources/managers/UserManager.php");
    include("resources/managers/SaleManager.php");

	if($_POST['function']){
        $function = $_POST['function'];
        switch ($function) {
            case "SellersDropdown":
                echo HtmlSellerDropdown();
                return;
            case "ProductsDropdown":
                echo HtmlProductsDropdown();
                return;
            case "Login":
                echo Login($_POST['username'], $_POST['password']);
                return;
            case "Logout":
                echo Logout();
                return;
            case "CheckSession":
                echo CheckSession();
                return;
            case "GetUserCompleteName":
                echo GetUserCompleteName();
                return;
            case "CreateSale":
                echo CreateSale($_POST['clientfirstname'], $_POST['clientlastname'], $_POST['company'], $_POST['amount'], $_POST['payday'], $_POST['producttypeid'], $_POST['billnumber']);
                return;
            case "ProductsTable":
                echo HtmlProductsTable();
                return;
            case "CreateProductType":
                echo CreateProductType($_POST['name'], $_POST['comission']);
                return;
            case "GetSales":
                echo HtmlSalesTables($_POST['userId'], $_POST['fromDate'], $_POST['toDate']);
                return;
        }
    }
    
    echo "No Function Called";
?>