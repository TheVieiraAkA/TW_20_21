<?php

	$host="localhost";
	$user="php";
	$pass="php";
	$dbname="tw";
	$port="3306";

	try {
		$dataBase = "mysql:host=$host;dbname=$dbname;port=$port;" 
		$conn = new PDO($dataBase, $user, $pass);
		

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		echo "connected"

	} catch (PDOException $err) {
		echo 'Error: ' . $err->getMessage();
	}


?>