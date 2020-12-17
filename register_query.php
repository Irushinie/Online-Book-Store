<?php

$link = mysqli_connect("localhost", "root", "", "m");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$CID = mysqli_real_escape_string($link, $_REQUEST['CID']);
$Username = mysqli_real_escape_string($link, $_REQUEST['Username']);
$Password = mysqli_real_escape_string($link, $_REQUEST['Password']);
$NIC = mysqli_real_escape_string($link, $_REQUEST['NIC']);
$Email= mysqli_real_escape_string($link, $_REQUEST['Email']);
$Home_no= mysqli_real_escape_string($link, $_REQUEST['Home_no']);
$street = mysqli_real_escape_string($link, $_REQUEST['street']);
$City = mysqli_real_escape_string($link, $_REQUEST['City']);
$Postcode = mysqli_real_escape_string($link, $_REQUEST['Postcode']);

// attempt insert query execution
$sql = "INSERT INTO customer ( CID,Username, Password , NIC, Email, Home_no, street, City, Postcode) VALUES ('$CID', '$Username', '$Password ', '$NIC', '$Email', '$Home_no', '$street', '$City' , '$Postcode' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>