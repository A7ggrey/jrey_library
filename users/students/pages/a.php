<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

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

		.special-icon {
				width: 40px;
				height: 40px;
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
			.btn-group {
				width: 65%;
			}

			.btn-success {
				font-size: 35px;
			}
			.di {
				background-color: black;
			    width: 70px;
			    margin-left: 10px;
			    height: 12px;
			    margin-top: 12px;
			}

			.div-display {
				font-size: 30px;
			}

			.icon {
				width: 40px;
				height: 40px;
			}

			.icon-2 {
				width: 40px;
				height: 40px;
				margin-left: 40px;
			}

			.special-icon {
				width: 70px;
				height: 70px;
			}

			.search {
				font-weight: bold;
				font-size: 35px;
				width: 65%;
			}

			.list-group-item {
				font-size: 35px;
			}

			.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 45px;
			color: #111;
			font-weight: bold;
			display: block;
			transition: 0.3s;
		}
		    .times {
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


<?php

/*$id = $_SESSION['id'];

$currentStudent = mysqli_real_escape_string($dbconnect,$id);
$sql = "SELECT subscription, accname, datefro, datedue FROM userstudents WHERE id = '$currentStudent'";

$run = mysqli_query($dbconnect,$sql);

if (mysqli_num_rows($run) > 0) {

	while($rows = mysqli_fetch_assoc($run)) {

		$account = $rows['accname'];

		if ($account == 'Free Account') {*/

/*} else if ($account == 'Platinum Account') {*/

	?>

	<!--PLATINUM ACCOUNT-->
	<div id="mySidenav" class="sidenav">
		<div class="list-group">
		<p><a href="javascript:void(0)" onclick="closeNav()" class="closebtn"><span><img src="./../../../icons/snow2.svg" class="special-icon"></span></a></p>

		<li class="list-group-item"><a href="dashboard.php">
		<img src="./../../../icons/speedometer.svg" class="icon">&nbsp;&nbsp;Dashboard</a></li>

		<li class="list-group-item"><a href="profile.php">
		<img src="./../../../icons/person-fill.svg" class="icon">&nbsp;&nbsp;My Profile</a></li>

		<li class="list-group-item"><a href="update-academics.php">
			<img src="./../../../icons/tools.svg" class="icon">&nbsp;&nbsp;Update Academics</a></li>

		<li class="list-group-item"><a href="update-subjects.php">
		    <img src="./../../../icons/tools.svg" class="icon">&nbsp;&nbsp;Update Subjects</a></li>

		<li class="list-group-item"><a href="downloads.php">
			<img src="./../../../icons/download.svg" class="icon">&nbsp;&nbsp;Downloads</a></li>

		<li class="list-group-item"><a href="revision-cats.php">
			<img src="./../../../icons/file-earmark-pdf.svg" class="icon">&nbsp;&nbsp;Revision C.A.T.S</a></li>

		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/file-earmark-richtext-fill.svg" class="icon">&nbsp;&nbsp;Notes</a></li>

		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/file-earmark-word.svg" class="icon">&nbsp;&nbsp;Exams</a></li>


		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/file-earmark-pdf.svg" class="icon">&nbsp;&nbsp;K.C.S.E and K.C.P.E Revision Papers</a></li>

			<li class="list-group-item"><a href="#">
	    	<img src="./../../../icons/file-earmark-pdf.svg" class="icon">&nbsp;&nbsp;Discussion Forums</a></li>

	    <li class="list-group-item"><a href="#">
	    	<img src="./../../../icons/file-earmark-pdf.svg" class="icon">&nbsp;&nbsp;Vitual Classes</a></li>

	    	<li class="list-group-item"><a href="#">
	    	<img src="./../../../icons/file-earmark-pdf.svg" class="icon">&nbsp;&nbsp;Virtual Discussion forums</a></li>

	    	<li class="list-group-item"><a href="#">
	    	<img src="./../../../icons/file-earmark-pdf.svg" class="icon">&nbsp;&nbsp;Examiner guides</a></li>

	    	<li class="list-group-item"><a href="#">
	    	<img src="./../../../icons/file-earmark-pdf.svg" class="icon">&nbsp;&nbsp;Regional Mocks</a></li>

		<li class="list-group-item"><a href="../../../all-about-jrey-library/about-Us.php">
			<img src="./../../../icons/people-fill.svg" class="icon">&nbsp;&nbsp;About Us</a></li>

		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/files.svg" class="icon">&nbsp;&nbsp;Terms and Conditions</a></li>

		<li class="list-group-item"><a href="../../../all-about-jrey-library/about-Us.php">
			<img src="./../../../icons/headset.svg" class="icon">&nbsp;&nbsp;Contact Us</a></li>

		<li class="list-group-item"><a href="../../../all-about-jrey-library/about-Us.php">
			<img src="./../../../icons/exclamation-triangle-fill.svg" class="icon">&nbsp;&nbsp;Report a Problem</a></li>

		<li class="list-group-item"><a href="#">
			<img src="./../../../icons/share-fill.svg" class="icon">&nbsp;&nbsp;Share</a></li>

		<li class="list-group-item"><a href="log-Out.php">
			<img src="./../../../icons/box-arrow-up-right.svg" class="icon">&nbsp;&nbsp;Log Out</a></li>

		</div>
			
		<br><hr><p>
			<img src="./../../../icons/facebook.svg" class="icon-2">&nbsp;Facebook&nbsp;&nbsp;&nbsp;
			<img src="./../../../icons/instagram.svg" class="icon-2">&nbsp;Instagram&nbsp;&nbsp;&nbsp;
			<img src="./../../../icons/twitter.svg" class="icon-2">&nbsp;Twitter&nbsp;&nbsp;&nbsp;
			<img src="./../../../icons/snapchat.svg" class="icon-2">&nbsp;Snapchat&nbsp;&nbsp;&nbsp;
			<img src="./../../../icons/whatsapp.svg" class="icon-2">&nbsp;Whatsapp&nbsp;&nbsp;&nbsp;
		</p><hr><br>
	</div>

	<div onclick="openNav()" class="spa">
		<div class="di"></div>
		<div class="di"></div>
		<div class="di"></div>
	</div>


<?php 
/*}

}

}
*/
	 ?>
	 </html>