<?php

	// iniciar sessao php
	session_start();

	// validar se o login já existe
	if(isset($_SESSION['user'])){
		//  utilizador já está com login feito
		header('location:home.php');
		exit();
	}
	// login nao existe |
	// 					V

	// importar ligação à base de dados do ficheiro connection.php
	require_once("connection.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	// 1- criar query para a base de dados
	$sqlQuery = "SELECT * FROM users WHERE username=? && password=?";

	// 2 - inicializar a query com a base de dados (prepare statement)
	$ps = $conn->prepare($sqlQuery);

	/* Binds variables to prepared statement

        i    corresponding variable has type integer
        d    corresponding variable has type double
        s    corresponding variable has type string
        b    corresponding variable is a blob and will be sent in packets
   */
	// 3 - associar os parametros de input
	$ps->bind_param("ss", $username, $password);

	// 4 - executar a query com os parametros associados
	$ps->execute();

	// 5 - apanhar os resultados
	$result = $ps->get_result();

	//6 - vamos interpretar o numero de resultados
	$numberOfRows = $result->num_rows;

	if($numberOfRows == 1){
		// login valido, o username existe e a password corresponde 
		$_SESSION['user'] = $username;
		header('location:home.php');
		exit();
	} 
	
	//  libertar a memoria do resultado da query
	$ps->free_result();

	// encerrar a variavel
	$ps->close();

	// terminar a ligação à base de dados
	$conn->close();
	
	//encerrar as sessoes
	session_write_close();

?>