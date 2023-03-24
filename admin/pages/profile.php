<?php
session_start();

if (!isset($_SESSION['currentAdmin'])) {
	
	header('location: ./../');
}

//pages required
require('./../requires/database-Config.php');

 $stmt = $dbconnect->prepare('SELECT sessionkey, email, firstname, secondname, lastname, gender, code, phonenumber FROM admin WHERE sessionkey = ?');
            $stmt->bind_param('s', $_SESSION['name']);
            $stmt->execute();
            $stmt->bind_result($sessionkey, $email, $firstname, $secondname, $lastname, $gender, $code, $phonenumber);
            $stmt->fetch();
            $stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Students' Profile</title>

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
			width: 20%;
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

	<div id="mySidenav" class="sidenav">
		<div class="list-group">
		<a href="javascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>
		<li class="list-group-item"><a href="dashboard.php">
		<img src="./../../../icons/speedometer.svg">&nbsp;&nbsp;Dashboard</a></li>
		<li class="list-group-item"><a href="profile.php">
		<img src="./../../../icons/person-fill.svg">&nbsp;&nbsp;My Profile</a></li>
		<li class="list-group-item"><a href="subscriptions.php">
		<img src="./../../../icons/credit-card-2-back-fill.svg">&nbsp;&nbsp;Transactions</a></li>
		<li class="list-group-item">
			<a href="#"><img src="./../../../icons/download.svg">&nbsp;&nbsp;Downloads</a></li>
		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/cart4.svg">&nbsp;&nbsp;Products</a></li>
		<li class="list-group-item">
			<a href="#"><img src="./../../../icons/info-circle.svg">&nbsp;&nbsp;Discussion forums</a></li>
		<li class="list-group-item">
			<a href="#"><img src="./../../../icons/file-earmark-word.svg">&nbsp;&nbsp;Exams</a></li>
		<li class="list-group-item">
			<a href="#"><img src="./../../../icons/file-earmark-pdf.svg">&nbsp;&nbsp;Past Papers</a></li>
		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/file-earmark-pdf.svg">&nbsp;&nbsp;K.C.S.E Revision Papers</a></li>
	    <li class="list-group-item"><a href="#">
	    	<img src="./../../../icons/file-earmark-pdf.svg">&nbsp;&nbsp;Regional Mocks</a></li>
		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/tools.svg">&nbsp;&nbsp;Update Academics</a></li>
		<li class="list-group-item"><a href="#">
		    <img src="./../../../icons/tools.svg">&nbsp;&nbsp;Update Subjects</a></li>
		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/file-earmark-richtext-fill.svg">&nbsp;&nbsp;Notes</a></li>
		<li class="list-group-item"><a href="../../../all-about-jrey-library/about-Us.php">
			<img src="./../../../icons/people-fill.svg">&nbsp;&nbsp;About Us</a></li>
		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/files.svg">&nbsp;&nbsp;Terms and Conditions</a></li>
		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/headset.svg">&nbsp;&nbsp;Contact Us</a></li>
		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/exclamation-triangle-fill.svg">&nbsp;&nbsp;Report a Problem</a></li>
		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/share-fill.svg">&nbsp;&nbsp;Share</a></li>
		<li class="list-group-item"><a href="log-Out.php">
			<img src="./../../../icons/box-arrow-up-right.svg">&nbsp;&nbsp;Log Out</a></li></div>
			
		<br><hr><p style="text-align: center;">
			<img src="./../../../icons/facebook.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="./../../../icons/instagram.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="./../../../icons/twitter.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="./../../../icons/snapchat.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="./../../../icons/whatsapp.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</p><hr><br>
	</div>

	<span onclick="openNav()" class="spa">
		<div class="di"></div>
		<div class="di"></div>
		<div class="di"></div>
	</span>

	<div id="main">
		<div class="container">
			<h5 class="display-4">My Profile</h5></div><br>

	<table class="table table-striped">
		<tr>
			<td class=""><span style="font-weight: bold;">Name</span></td>
			<td>&nbsp;&nbsp;&nbsp;<?=$firstname?> &nbsp; <?=$secondname?> &nbsp; <?=$lastname?></td>
		</tr>

		<tr>
			<td class=""><span style="font-weight: bold;">Gender</span></td>
			<td>&nbsp;&nbsp;&nbsp;<?=$gender?></td>
		</tr>

		<tr>
			<td class=""><span style="font-weight: bold;">Email</span></td>
			<td>&nbsp;&nbsp;&nbsp;<?=$email?></td>
		</tr>
		<tr>
			<td class=""><span style="font-weight: bold;">Phone Number</span></td>
			<td>&nbsp;&nbsp;&nbsp;<?=$phonenumber?></td>
		</tr>
	</table><br>

	<div>
		<div class="btn-group width-100">
			<a href="#" class="btn btn-primary width-100">Friends List</a>
			<a href="#" class="btn btn-primary width-100">Update Profile</a>
			<a href="#" class="btn btn-danger width-100">Delete Profile</a>
		</div>
	</div>

	</div><br><br>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>