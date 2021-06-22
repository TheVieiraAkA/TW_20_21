<?php

	$host="localhost";
	$user="php";
	$pass="php";
	$dbname="tw";
	$port="3306";

	$conn = new mysqli($host, $user, $pass, $dbname, $port);

	if($conn->connect_errno){
		die('Error: '.$conn->connect_error);
	}
	$conn->set_charset('utf8');

	echo "connected"

?>