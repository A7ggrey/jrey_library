<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {

	header('location: ./../');
}

	//pages required
require('./../requires/database-Config.php');

$currentUser = $_SESSION['name'];

//database sql query
$stmt = $dbconnect->prepare("SELECT id, sessionkey, subscription, datefro, datedue FROM subscription WHERE sessionkey = ?");

$stmt->bind_param('s', $_SESSION['name']);
$stmt->execute();
$stmt->bind_result($id, $sessionkey, $subscription, $datefro, $datedue);
$stmt->fetch();


$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Downloads</title>

	<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width ="0";
	}
</script>

<style type="text/css">
		.sidenav {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #aaaa55;
			overflow-x: hidden;
			padding-top: 60px;
			transition: 0.8s;
		}

		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #111;
			font-weight: bold;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover {
			color: #f1f1f1;
		}

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		.spa:hover {
			cursor: pointer;
			background-color: ;
		}

		.spa {
			width: 5%;
		}

		.di {
			background-color: black;
			width: 50px;
			margin-left: 10px;
			height: 8px;
			margin-top: 7px;
		}

		#main {
			transition: margin-left .5s;
			padding: 20px;
		}


		@media screen and (max-height:  450px) {
			.sidenav {
				padding-top: 15px;
			}
			.sidenav a {
				font-size: 18px;
			}
		}
	</style>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">

</head>
<body style="background-color: ;">
	<div><?php include('../includes/header-all.php'); ?></div>
    
    <div><?php require ('./a.php');?></div>
	
	<div id="main">
		<div class="list-group">
			<li class="list-group-item"><center><h4 class="display-6">Download Here!</h4></center></li>
			<li class="list-group-item"><a href="kc-se-pe-papers.php" class="alert-link text-decoration-none">KCPE and KCSE Past Papers</a></li>
			<li class="list-group-item"><a href="all-past-papers.php" class="alert-link text-decoration-none">Revision Papers</a></li>
			<li class="list-group-item"><a href="all-notes.php" class="alert-link text-decoration-none">Notes</a></li>
			<li class="list-group-item"><a href="regional-mocks.php" class="alert-link text-decoration-none">Regional Mocks</a></li>
			<li class="list-group-item"><a href="all-exams.php" class="alert-link text-decoration-none">Exams</a></li>
		</div>
	</div>
	</center>
	</div>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>