<?php 

session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	header('location: ./../');
	exit;
}

session_destroy();

header('location: ./../');

?>

