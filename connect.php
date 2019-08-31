<?php 
$servername = "localhost";
$ussername = "root";
$password = "";
$dbname = "eshopperdb";

$connect = mysqli_connect($servername, $ussername, $password, $dbname);

// check connection
if (!$connect) {
	die("connection fialed:" . mysqli_connect_error() );

	
}

?>