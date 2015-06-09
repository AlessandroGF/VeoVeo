<?php
	$dbhost="localhost";
	$dbuser="c5000117_veoveo";
	$dbpass="95mugirePA";
	$dbname="c5000117_veoveo";

	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if (mysqli_connect_errno()) {
    	printf("Falló la conexión: %s\n", $con->connect_error);
    	exit();
	}	
?>

