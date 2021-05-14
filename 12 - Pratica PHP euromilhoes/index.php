<?php
	// require_once('chave.php');
	// print_r($numeros);
	// echo '<br>';
	// print_r($estrelas);
	
	// require_once('chaveClass.php');
	// $result = new Chave();
    // $jsonString = $result->asJson();
	// $chave = json_decode($jsonString);
	// echo $jsonString;
	// echo '<br>';
	// print_r( $chave->numeros);
	// echo '<br>';
	// print_r( $chave->estrelas);

	$url= "http://localhost/php/apiChave.php";
	$result = file_get_contents($url);
	$chave = json_decode($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./jquery/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="./style.css">
	<title>Document</title>
</head>
<body>
	<div id="pagehead">
        <h1>Euro Milhões</h1>
    </div>
		<button onclick="fetchNewKey()">get new key</button>
	<div class="chave">
        <ul class="numeros">
            <?php
                foreach ($chave->numeros as $value) {
                    echo "<li>$value</li>";
                }
            ?>
        </ul>
        <ul class="estrelas">
            <?php
                foreach ($chave->estrelas as $value) {
                    echo "<li>$value</li>";
                }
            ?>
        </ul>
    </div>
	<script>
		const fetchNewKey = () => {
			
			// ajax request
			$.ajax({
				url: 'http://localhost/php/apiChave.php',
				method: 'GET',
				dataType: 'JSON',
				success: response => {
					console.log(response);
					// div para agrupar a lista dos numeros e lista das estrelas
					const div = $("<div>").attr('class', 'chave');
					
					// criar lista dos numeros vazia
					const ulNumeros = $("<ul>").attr('class', 'numeros');
					
					// criar lista das estrelas vazia
					const ulEstrelas = $("<ul>").attr('class', 'estrelas');

					// loop pelos numeros que vem da resposta, e adicionar à lista dos numeros
					response.numeros.forEach(payload => {
						const item = $('<li>').html(payload);
						ulNumeros.append(item);
					});

					// loop pelas estrelas que vem da resposta, e adicionar à lista das estrelas
					response.estrelas.forEach(payload => {
						const item = $('<li>').html(payload);
						ulEstrelas.append(item);
					});

					// adicionar lista dos numeros à div 
					div.append(ulNumeros);

					// adicionar lista das estrelas à div 
					div.append(ulEstrelas);

					// adicionar div ao body da pagina
					$('body').append(div);
				}
			});
		};
	</script>
</body>
</html>