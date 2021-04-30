<!-- <?php
    
    $var1 = 1 + 1;
    echo $var1."<br>";

    $var2 = "1" + 1;
    echo $var2."<br>";

    $var3 = "1" . 1;
    echo $var3."<br>";
	
    $contador = 1;
	echo $contador."<br>";

    $dias = array(); //array('Domingo','Segunda','Terça') || ['Domingo','Segunda','Terça']
    $dias[] = 'Domingo';
    $dias[] = 'Segunda';
    $dias[] = 'Terça';

    function incrementar(&$valor) {
        return $valor = $valor + 1;
    }
    echo incrementar($contador)."<br>";
    echo incrementar($contador)."<br>";



    foreach($dias as &$diasemana) {
        echo $diasemana.'<br>';
    }

    print_r($dias);
    echo "<br>";

    foreach($dias as $diasemana) {
        echo $diasemana.'<br>';
    }

    print_r($dias);
    echo "<br>";

    $a = [
        'bananas'=>1,
        'laranjas'=>2,
        'limoes'=>3
    ];

    $b = [
        'laranjas'=>2,
        'limoes'=>3,
        'bananas'=>1
    ];

    if($a==$b) echo 'São iguais';
    else echo 'São diferentes';
	
	foreach($a as $key => $value) {
		echo "<p> tenho $value $key </p>";
	}

	$today = date('l');

?> -->
   
	<!-- <?php

		echo '<p> today is ' . $today .'</p>';
		echo "<p> today is $today </p>";
		echo '<p> today is $today </p>';
	?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3> primeira aula PHP</h3>


	<p id="name1"></p>
	<p id="name2"></p>



	<button id="euro">gerar chave euro milhoes</button>
	<div id="chaves"></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>

		// origem do pedido: http://localhost/php/
		$.ajax({
			url: 'users.php',
			method: 'GET',
			dataType: 'JSON',
			success: response => {
				console.log('success', response)
				$("#name1").text(response[0].name)
			},
			error: error => {
				console.log('error', error)
			}
		})

		// origem do pedido: http://localhost/php/
		$.ajax({
			url: 'users.php',
			method: 'GET',
			dataType: 'JSON',
			data: {
				asdasda: 'Filipe',
				age: 60
			},
			success: response => {
				console.log('success', response)
				$("#name2").text(response[1].name)
			},
			error: error => {
				console.log('error', error)
			}
		})

		$('#euro').on('click', () => {
			$.ajax({
				url: 'euromilhoes.php',
				method: 'GET',
				dataType: 'JSON',
				success: response => {
					console.log('success', response)
					$('#chaves').append(response.numeros.join('-') + ' - ' +response.estrelas.join('*'))
					$('#chaves').append('<br>')

				},
				error: error => {
					console.log('error', error)
				}
			})
		})
	
	</script>

</body>
</html>