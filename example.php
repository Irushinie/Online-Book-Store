<?php

	require 'db_connect.php';
	$bid = $_POST['BID'];
	$Name = $_POST["Name"];
	$category = $_POST["Category"];
	$authID = $_POST["AID"];
	$pubID = $_POST["PID"]; 
	$price = $_POST["Price"];
	$ISBN = $_POST["ISBN"];
	
		
		$sql3 = "INSERT INTO BOOK ( bid,Name,category,authID,pubID,price,ISBN)
	VALUES( 'BID' , 'Name', 'Category', 'AID' , 'PID', 'Price', 'IBSN')";
		
	$sql_result3 = mysql_query($sql3) OR die (mysql_error());
		
	if($sql_result3)
	{
		echo "Query successful.";
	}
	else
	{
		echo "Query failed.";
		
	}
?>