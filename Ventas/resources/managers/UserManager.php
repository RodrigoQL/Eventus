<?php
    include("resources/templates/UserTemplates.php");
    include("resources/data/UserDataProvider.php");

    function HtmlSellerDropdown(){
        $users = GetAllSellers();
        $html = SellerDropdown($users);
        return $html;
    }

    function Login($username, $password){
        $user = GetUser($username, $password);
        if ($user){
            session_start();
            $_SESSION['UserTypeID'] = $user['UserTypeID'];
            $_SESSION["UserID"] = $user['ID'];
            return $user['UserTypeID'];
        }else{
            return 0;
        }
    }

    function GetUserCompleteName(){
        session_start();
        $userID = $_SESSION['UserID'];
        if (!($userID)){
            return "Error al Buscar Usuario";
        }

        $user = GetUserById($userID);
        $name = $user['Name']." ".$user['Lastname'];
        return $name;
    }

    function CheckSession(){
        session_start();
        $userID = $_SESSION['UserID'];
        return $userID;
    }

    function Logout(){
        session_start();
        session_destroy();
    }
?>