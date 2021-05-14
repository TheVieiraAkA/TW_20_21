<?php

class Chave {
	public $numeros = array();
	public $estrelas = array();

	public function __construct (){
		$this->numeros = $this->gerarChave(1, 50, 5); 
		$this->estrelas = $this->gerarChave(1, 12, 2); 
	}

	private function gerarChave($min, $max, $numeroElementos){
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

	public function asJson(){
		return  json_encode($this);
	}

}


?>