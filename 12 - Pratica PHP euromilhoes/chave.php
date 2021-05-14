<?php 

	$numeros = array();
	$estrelas = array();

	function gerarChave($min, $max, $numeroElementos){
		$chaveGerada = array();

		while(count($chaveGerada) < $numeroElementos){
			// gerar um numero unico
			$genNumber = rand($min, $max);
			if( !in_array($genNumber, $chaveGerada)){
				array_push($chaveGerada, $genNumber);
				// $chaveGerada[] = $genNumber;
			}
		}
		//  ja temos a chave completa
		sort($chaveGerada);
		return $chaveGerada;
	} 

	$numeros = gerarChave(1, 50, 5);
	$estrelas = gerarChave(1, 12, 2);
?>



