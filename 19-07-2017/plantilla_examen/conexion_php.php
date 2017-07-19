<?php
//------------------------------------------------------------
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bbdd_t_sunhouse_renting";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// comprovar conexió
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
?>
