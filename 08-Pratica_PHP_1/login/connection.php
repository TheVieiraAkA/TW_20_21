<?php

$dbHost = 'localhost';
$dbName = 'tw';
$dbUser = 'php';
$dbPass = 'php';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName); 

if($conn->connect_errno){

	die('Error: ' . $conn->connect_error);

} else {

	echo 'Connected';

}
?>