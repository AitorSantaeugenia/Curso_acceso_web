<?php
//------------------------------------------------------------
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quinela_futbol";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$conn2 = mysqli_connect($servername, $username, $password, $dbname);
	$conn3 = mysqli_connect($servername, $username, $password, $dbname);

	// comprovar conexió
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
?>
