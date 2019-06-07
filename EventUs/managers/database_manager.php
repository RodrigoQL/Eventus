<?php
    $db_servername = "localhost";
    $db_username = "wwwplust_Eventus";
    $db_password = "Even7us2019";
    $db_name = "wwwplust_Eventusdb";

    function sqlSelect($sql){
        global $db_servername, $db_username, $db_password, $db_name;
        $conn = mysqli_connect( $db_servername, $db_username, $db_password, $db_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_query($conn,"SET NAMES 'utf8'");
        $result = mysqli_query($conn, $sql);
        while( $row = mysqli_fetch_array($result,MYSQLI_BOTH) ){
            $rows[] = $row;
        }

        mysqli_close($conn);
        if(!isset($rows)){
            return false;
        }else{
            return( $rows );
        }
    }


    function sqlInsert($query){
        global $db_servername, $db_username, $db_password, $db_name;
        $conn = mysqli_connect( $db_servername, $db_username, $db_password, $db_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_query($conn,"SET NAMES 'utf8'");
        $sql = mysqli_query($conn, $query);
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $query . "<br>" .$conn->error;
            return false;
        }    

        mysqli_close($conn);
    }

    function sqlDelete($query){
        global $db_servername, $db_username, $db_password, $db_name;
        $conn = mysqli_connect( $db_servername, $db_username, $db_password, $db_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = mysqli_query($conn, $query);
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }    

        mysqli_close($conn);
    }
?>