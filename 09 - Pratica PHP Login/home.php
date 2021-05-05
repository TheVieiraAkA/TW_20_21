<?php

// iniciar sessao php
session_start();

if (isset($_SESSION['user'])) {
	// existe login feito
    $username = $_SESSION['user'];
} else {
	// login nao existe
	header("location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Olá <?php echo $username;?> </h1>
    <a href="logout.php"> logout </a>

</body>
</html>