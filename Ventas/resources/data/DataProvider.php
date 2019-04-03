<?php
	$servername = "localhost";
	$dbUsername = "wwwplust_";
	$dbPassword = "Even7us2019";
	$dbName = "wwwplust_";
	$md5Hash = "Even7us2019";
	function SqlSelect($sql){
		global $servername, $dbUsername, $password, $dbName;
		$conn = mysqli_connect( $servername, $dbUsername, $dbPassword, $dbName);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn, $sql);
		while( $row = mysqli_fetch_array($result,MYSQLI_BOTH) ){
			$rows[] = $row;
		}
		mysqli_close($conn);
		return( $rows );
	}
	function SqlInsert($query){
		global $servername, $dbUsername, $dbPassword, $dbName;
		$conn = mysqli_connect( $servername, $dbUsername, $dbPassword, $dbName);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
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
    
    function ValuesToString($arguments){
        $value = "(";
        $i = 0;
        $len = count($arguments);
        foreach ($arguments as &$element) {
            $value .= " '".$element."' ";
            if ($i != $len - 1) {
                $value .= ",";
            }

            $i++;
        }
        $value .= ")";
        return $value;
    }
?>
