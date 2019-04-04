<?php
    include("resources/templates/UserTemplates.php");
    include("resources/data/UserDataProvider.php");

    function HtmlUserDropdown(){
        $users = GetAllUsers();
        $html = UserDropdown($users);
        return $html;
    }

    function Login($username, $password){
        $user = GetUser($username, $password);
        if ($user){
            session_start();
            $_SESSION['ID'] = $user['ID'];
            return $user['UserTypeID'];
        }else{
            return 0;
        }
    }
?>