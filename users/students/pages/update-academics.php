<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	header('location: ./../');
	exit;
}

//pages required
require('./../requires/database-Config.php');


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Update Academics</title>

	<script type="text/javascript">
	function sub() {
		var school = document.acads.school.value;
		var level = document.acads.level.value;
		
		if (school == "") {
			alert('Fill in your School');
			return false;
		} else if (level == 'NULL') {
			alert('Select your current level of study');
			return false;
		}
	}
</script>

	<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width ="0";
	}

	function my_fun(str) {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function() {

			if (this.readyState==4 && this.status==200) {
				document.getElementById('poll').innerHTML = this.responseText;
			}
		}

		xmlhttp.open("GET","helper.php?value="+str, true);
		xmlhttp.send();
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

		@media (max-device-width: 480px) {
			#btn {
				font-size: 35px;
				font-weight: bold;
				height: 90px;
			}
			#in {
				font-size: 30px;
				color: darkblue;
			}
			#SelectA {
				font-size: 30px;
				color: darkblue;
			}

			.p {
				font-size: 20px;
				font-weight: bolder;
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
		
		<center><h2 class="display-4">Update Your Academics</h2></center>
		<br><br>

		<div class="container">

			<form method="POST" action="update-academics-server.php" name="acads" onsubmit="return sub()">

			<p class="p">Select Your School:</p>
			<p><input type="text" name="school" id="in" placeholder="Select Current School" class="form-control"></p>

			<p class="p">Select Current Level of Studies:</p>
			<p>
				<select class="form-control" name="level" id="SelectA" onchange="my_fun(this.value);">
					<option value="NULL">--Select Current Level--</option>
					<option value="1">Primary School</option>
					<option value="2">Secondary School</option>
				</select>
			</p>

		<div id="poll">
			<p class="p">Select Current Class:</p>
			<p>
				<select class="form-control" name="class" id="in">
					<option>--Select Current Class--</option>
				</select>
			</p>
		</div>

			<p><input type="submit" name="" value="Update" id="btn" class="btn btn-primary width-100"></p>
			</form>

			<br><br>
		</div>
	</div>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>