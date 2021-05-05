<?php
session_start();

// se sessao ativa com login
if(isset($_SESSION['user'])) {
    header("location:home.php");
    exit();
}
//senao
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="login.php" method="post">
		<input type="text" name="username" id="username" required="required" minlength=3 maxlength=5 >
		<input type="password" name="password" id="password" required="required" minlength=3 maxlength=20 >

		<input type="submit" value="Login" >
		<input type="reset" value="Limpar form" >
	</form>
</body>
</html>