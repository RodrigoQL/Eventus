<?php
	include("data/DataProvider.php");
    include("managers/UserManager.php");
    include("managers/SaleManager.php");
	if($_POST['function']){
        $function = $_POST['function'];
        switch ($function) {
            case "UsersDropdown":
                echo HtmlUserDropdown();
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
        }
    }
    
    echo "No Function Called";
?>