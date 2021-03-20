<?php
	//Set up connection creds
	$user = "root";
	$password = ""; //pc
	//$password = "root"; //for mac
	$url = "localhost"; //could change with hosting
	$db = "db_cangelina";

	//Everything below does not need to be changed...
	$link = mysqli_connect($url, $user, $password, $db); //pc
	//$link = mysqli_connect($url, $user, $password, $db, "8889"); //mac


	//Check Connection

	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();

	}

?>
