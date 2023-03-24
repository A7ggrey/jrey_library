<?php

session_start();

if (!isset($_SESSION['currentAdmin'])) {

	header('location: ./../');
	exit;
}

	//pages required
require('./../requires/database-Config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jrey Library | Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../faon.ico" type="image/x-icon">
    <link rel="icon" href="./../../favicon.ico" type="image/x-icon">

</head>
<body style="background-color: ;">
	<div><?php include('../includes/header-all.php'); ?></div>

	<div><?php include('./a.php'); ?></div>
	<br>

	<div id="main">
		
		<br>

	<div style="background-color: #aaaa55; width: 100%;">
		<?php include('../includes/footer-all.php'); ?></div>

</body>
</html>