<?php

	require_once('connect.php');

	try{

		
		$name = $_GET['name'] || "joao";
		$email = $_GET['email'] || "j.vieira@estg.ipvc.pt";

		// INICIO TRANSACTION
		$conn->beginTransaction();
		

		$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";

		$stmt = $conn->prepare($sql);

		$stmt->bindValue(':name', $name);
		$stmt->bindValue(':email', $email);

		$stmt->execute();

		// FIM E SUBMIT DA TRANSACTION
		$conn->commit();

		exit('Inserido com sucesso')

	} catch (PDOException $err) {
		echo 'erro ao inserir novo user: ' . $err->getMessage();
	}

?>