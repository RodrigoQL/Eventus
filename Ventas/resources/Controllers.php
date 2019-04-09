<?php
	include("data/DataProvider.php");
    include("managers/UserManager.php");
    include("managers/SaleManager.php");
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
            case "CreateSale":
                echo CreateSale($_POST['clientfirstname'], $_POST['clientlastname'], $_POST['company'], $_POST['amount'], $_POST['payday'], $_POST['producttypeid'], $_POST['billnumber']);
                return;
        }
    }
    
    echo "No Function Called";
?>