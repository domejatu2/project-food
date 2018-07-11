<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "management_foodscience";
	
// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);
	$conn->query("SET NAMES UTF8");
?>