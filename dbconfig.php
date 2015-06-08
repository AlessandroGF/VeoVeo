<?php
	$dbhost="localhost";
	$dbuser="c5000117_veoveo";
	$dbpass="95mugirePA";
	$dbname="c5000117_veoveo";
	if (!($con=@mysql_connect($dbhost,$dbuser,$dbpass))){
		echo "No puede conectar al Motor";
		die();
		}
	else{
		if(!(mysql_select_db($dbname))){
			echo "No existe la base de datos $dbname"; 
			die();
		}
	}
?>
