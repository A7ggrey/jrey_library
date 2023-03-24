<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta charset="utf-8">
	<title>Jrey Library | Admin Dashboard</title>

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
	<link rel="shortcut icon" href="./../../faon.ico" type="image/x-icon">
    <link rel="icon" href="./../../favicon.ico" type="image/x-icon">

</head>
<body>

	<div id="mySidenav" class="sidenav">
		<div class="list-group">
		<a href="javascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>
		<li class="list-group-item"><a href="dashboard.php">
		<img src="./../../icons/speedometer.svg">&nbsp;&nbsp;Dashboard</a></li>
		<li class="list-group-item"><a href="profile.php">
		<img src="./../../icons/person-fill.svg">&nbsp;&nbsp;My Profile</a></li>

		<li class="list-group-item"><a href="./../../users/instructors22/pages/register-tutors.php">
		    <img src="./../../icons/person-fill.svg">&nbsp;&nbsp;Register tutors</a>
		</li>
		<li class="list-group-item"><a href="../../users/students/pages/update-news.php">
		<img src="./../../icons/credit-card-2-back-fill.svg">&nbsp;&nbsp;Upload News alerts</a></li>
		<li class="list-group-item"><a href="../../users/students/pages/uploads.php">
			<img src="./../../icons/download.svg">&nbsp;&nbsp;Upload a Document</a></li>
		<li class="list-group-item"><a href="../../users/students/pages/our-users.php">
			<img src="./../../icons/cart4.svg">&nbsp;&nbsp;Our Subscribers</a></li>
		
		<li class="list-group-item">
			<a href="./user-logs.php"><img src="./../../icons/file-earmark-word.svg">&nbsp;&nbsp;User Login logs</a></li>
		
		<li class="list-group-item"><a href="../../../all-about-jrey-library/about-Us.php">
			<img src="./../../icons/people-fill.svg">&nbsp;&nbsp;About Us</a></li>

		<li class="list-group-item"><a href="#">
			<img src="./../../icons/files.svg">&nbsp;&nbsp;Terms and Conditions</a></li>

		<li class="list-group-item"><a href="#">
			<img src="./../../icons/headset.svg">&nbsp;&nbsp;Contact Us</a></li>

		<li class="list-group-item"><a href="#">
			<img src="./../../icons/exclamation-triangle-fill.svg">&nbsp;&nbsp;Report a Problem</a></li>
		
		<li class="list-group-item"><a href="#">
			<img src="./../../icons/share-fill.svg">&nbsp;&nbsp;Share</a></li>
		
		<li class="list-group-item"><a href="log-Out.php">
			<img src="./../../icons/box-arrow-up-right.svg">&nbsp;&nbsp;Log Out</a></li></div>
			
		<br><hr><p style="text-align: center;">
			<img src="./../../icons/facebook.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="./../../icons/instagram.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="./../../icons/twitter.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="./../../icons/snapchat.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="./../../icons/whatsapp.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</p><hr><br>
	</div>

	<div onclick="openNav()" class="spa">
		<div class="di"></div>
		<div class="di"></div>
		<div class="di"></div>
	</div>

</body>
</html>