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
	<div class="btn-group" style="margin-left: 10px; width: 95%;">

	<?php
	$query = "SELECT * FROM students"; $result = mysqli_query($dbconnect, $query); $number = mysqli_num_rows($result);

	$query1 = "SELECT * FROM files"; $result1 = mysqli_query($dbconnect, $query1); $number1 = mysqli_num_rows($result1);

	$query2 = "SELECT * FROM contact"; $result2 = mysqli_query($dbconnect, $query2); $number2 = mysqli_num_rows($result2);

	$query3 = "SELECT * FROM pands WHERE type = 'News'"; $result3 = mysqli_query($dbconnect, $query3); $number3 = mysqli_num_rows($result3);

	$query4 = "SELECT * FROM registered"; $result4 = mysqli_query($dbconnect, $query4); $number4 = mysqli_num_rows($result4);

	?>
		<button class="btn btn-primary">
			<h3>Students</h3>
			
			<p class="display-4"><?=$number?></p>
			<a href="../../users/students/pages/our-users.php" style="color: whitesmoke;">more info</a>
		</button>

		<button class="btn btn-success">
			<h4>Documents</h4>

			<p class="display-4"><?=$number1?></p>
			<a href="../../users/students/pages/documents.php" style="color: whitesmoke;">more info</a>
		</button>

		<button class="btn btn-primary">
			<h3>Contacts</h3>
			
			<p class="display-4"><?=$number2?></p>
			<a href="#" style="color: whitesmoke;">more info</a>
		</button>

		<button class="btn btn-success">
			<h4>News</h4>

			<p class="display-4"><?=$number3?></p>
			<a href="#" style="color: whitesmoke;">more info</a>
		</button>

		<button class="btn btn-primary">
			<h4>Registered</h4>

			<p class="display-4"><?=$number4?></p>
			<a href="#" style="color: whitesmoke;">more info</a>
		</button>
	</div>

	<div id="main">
		</div><br>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>