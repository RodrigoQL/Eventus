<?php

    function SetSession($userId, $userTypeID){
        session_start();
        $_SESSION['Eventus_UserTypeID'] = $userTypeID;
        $_SESSION["Eventus_UserID"] = $userId;
    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location: ../index.html");
    }

    function GetSessionUserTypeId(){
        session_start();
        $userTypeID = $_SESSION['Eventus_UserTypeID'];
        return $userTypeID;
    }

    function GetSessionUserId(){
        session_start();
        $userTypeID = $_SESSION['Eventus_UserID'];
        return $userTypeID;
    }

    function CheckSession(){
        $userId = GetSessionUserId();
        if (!$userId) {
            Logout();
        }
    }
?>