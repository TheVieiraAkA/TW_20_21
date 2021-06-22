<?php

	require_once('connect.php');

	try{

		$sql = "SELECT * FROM users";

		$result = $conn->query($sql)->fetchAll();

		echo json_encode($result);
		
	} catch (PDOException $err) {
		echo 'erro ao listar todos os users: ' . $err->getMessage();
	}

?>