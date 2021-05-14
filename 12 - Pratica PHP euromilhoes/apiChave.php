<?php

	header("Content-Type: application/json");
	require_once('chaveClass.php');
	$result = new Chave();
    $chave = $result->asJson();
	echo $chave;

?>