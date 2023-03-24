<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	header('location: ./../');
	exit;
}

require('./../requires/database-Config.php');

$idk = $_GET['idk'];
$msg = $_GET['msg'];
$my = $_SESSION['id'];

$reciever = mysqli_real_escape_string($dbconnect,$idk);
$sender = mysqli_real_escape_string($dbconnect,$my);

$query = "INSERT INTO messages(rid, msg, sid, time) VALUES('$sender', '$msg', '$reciever', NULL)";

if (mysqli_query($dbconnect,$query)) {
	
	header('location: ./message-reader.php?id=');
	exit;
} else {

	echo "Error deleting record: " . mysqli_error($dbconnect);
}
?>