<?php

$link = mysqli_connect("localhost", "root", "", "m");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$BID = mysqli_real_escape_string($link, $_REQUEST['BID']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Category = mysqli_real_escape_string($link, $_REQUEST['Category']);
$AID = mysqli_real_escape_string($link, $_REQUEST['AID']);
$PID = mysqli_real_escape_string($link, $_REQUEST['PID']);
$Price = mysqli_real_escape_string($link, $_REQUEST['Price']);
$ISBN = mysqli_real_escape_string($link, $_REQUEST['ISBN']);


// attempt insert query execution
$sql = "INSERT INTO book (BID, Name , Category, AID, PID, Price, ISBN) VALUES ('$BID', '$Name', '$Category', '$AID', '$PID', '$Price', '$ISBN' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
		