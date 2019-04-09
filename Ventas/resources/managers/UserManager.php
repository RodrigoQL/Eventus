<?php
    include("templates/UserTemplates.php");
    include("data/UserDataProvider.php");

    function HtmlUserDropdown(){
        $users = GetAllUsers();
        $html = UserDropdown($users);
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
?>