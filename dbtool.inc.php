<?php
	function create_connection(){
		$servername = "localhost";
		$username = "admin";
		$password = "123456";
		//建立連線
		$conn = mysqli_connect($servername, $username, $password);
		// mysqli_query($conn, "SET NAMES UTF8");

		// 判斷連線正確與否
		if(!$conn){
			die("連線錯誤".mysqli_connect_error());
		}

		return $conn;
	}

	function execute_sql($link, $dbname, $sql){
		// if(!mysqli_select_db($link, $dbname)){
		// 	die("連線資料庫錯誤".mysqli_error($link));
		// }
		mysqli_select_db($link, $dbname) 
		or die("連線資料庫錯誤".mysqli_error($link));

		$result = mysqli_query($link, $sql);
		return $result;
	
	}
?>