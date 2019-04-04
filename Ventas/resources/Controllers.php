<?php
    include("resources/managers/UserManager.php");
	if($_POST['function']){
        $function = $_POST['function'];
        switch ($function) {
            case "UsersDropdown":
                echo HtmlUserDropdown();
                break;
            case "ProductsDropdown":
                echo HtmlProductsDropdown();
                break;
            case "Login":
                echo Login($_POST['username'], $_POST['password']);
                break;
        }
    }
    
    echo "No Function Called";
?>