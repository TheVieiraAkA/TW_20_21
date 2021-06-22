<?php

	require_once('connect.php');


	$name = $_GET['name'] || "joao";
	$email = $_GET['email'] || "j.vieira@estg.ipvc.pt";

	$sql = "INSERT INTO users (name, email) VALUES (?, ?)";

	$ps = $conn->prepare($sql);
	
	$ps->bind_param("ss", $name, $email);

	if(!$conn->query($ps)){
        exit('error no insert: ' . $conn->error);
    }

	echo "Inserido com sucesso";
?>