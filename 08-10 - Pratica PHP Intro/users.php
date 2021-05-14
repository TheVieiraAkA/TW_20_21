<?php

	$listaUtilizadores = [
		0 => [
			'name'=> 'João',
			'age'=> 3,
			'city'=> 'Viana'
		],
		1 => [
			'name'=> isset($_GET['name']) ? $_GET['name'] : 'Pedro',
			'age'=> isset($_GET['age']) ? $_GET['age'] : 3,
			'city'=> 'Viana'
		],
	];


	echo json_encode($listaUtilizadores)
?>