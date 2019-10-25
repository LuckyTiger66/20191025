<?php
	require_once("dbtool.inc.php");

	$link = create_connection();

	mysqli_query($link, "SET NAMES UTF8");

	$sql = "SELECT * FROM hoteldata";

	$result = execute_sql($link, "hotel", $sql);

	$myArray = Array();

	$row = mysqli_fetch_assoc($result);
	do{
		$myArray[] = $row;
	}while($row = mysqli_fetch_assoc($result));

	echo json_encode($myArray);

?>