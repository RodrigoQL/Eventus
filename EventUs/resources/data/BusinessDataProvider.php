<?php
	$servername = "localhost";
	$username = "wwwplust_Eventus";
	$password = "Even7us2019";
	$dbname = "wwwplust_Eventsdb";

	function sqlSelect($sql){
		global $servername, $username, $password, $dbname;
		$conn = mysqli_connect( $servername, $username, $password, $dbname);
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


	function sqlInsert($sql){
		global $servername, $username, $password, $dbname;
		$conn = mysqli_connect( $servername, $username, $password, $dbname);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$result = mysqli_query($conn, $sql);	
		mysqli_close($conn);

		if($result){
			return true;
        }else{
            return false;
        }
	}

	
?>