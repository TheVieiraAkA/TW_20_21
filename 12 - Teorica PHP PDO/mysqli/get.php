<?php

	require_once('connect.php');

	$sql = "SELECT * FROM users";

	$result = $conn->query($sql);

	$list = [];

	foreach ($result->fetch_assoc() as $user){
		$list[] = $user;
	} 


	echo json_encode($list);
	

?>