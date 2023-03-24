<?php
session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	header('location: ./../');
}

//pages required
require('./../requires/database-Config.php');

 $stmt = $dbconnect->prepare('SELECT profilepic, email, firstname, secondname, lastname, gender, code, phonenumber FROM students WHERE id = ?');

          $stmt->bind_param('i', $_SESSION['id']);
            $stmt->execute();
            $stmt->bind_result($profilepic, $email, $firstname, $secondname, $lastname, $gender, $code, $phonenumber);

            $stmt->fetch();
            $stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Student Profile</title>

	<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width ="0";
	}
</script>

<style type="text/css">

        .prof {
				width: 100px; 
				height: 100px; 
				border-radius: 100%;
			}
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

			.btn {
				height: ;
			}

			.data {
				font-size: 45px;
			}

			.icon {
				width: 40px;
				height: 40px;
			}

			.list-group-item {
				font-size: 35px;
			}

			.prof {
				width: 200px; 
				height: 200px; 
				border-radius: 100%;
			}

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
			font-size: 45px;
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

		.spa-li {
			font-size: 35px;
		}

		.di {
			background-color: black;
			width: 70px;
			margin-left: 10px;
			height: 12px;
			margin-top: 12px;
		}

		#main {
			transition: margin-left .5s;
			padding: 20px;
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
		<div class="container">
			<h5 class="display-4">My Profile</h5></div><br>

			

	<table class="table table-striped">
		<p>
			<a href="./userProfile/<?=$profilepic?>"><img src="./userProfile/<?=$profilepic?>" alt="My Photo" class="prof"></a>
		</p>
		
		<tr>
			<td class="data"><span style="font-weight: bold;">Name</span></td><td class="data"><?=$firstname?> &nbsp; <?=$secondname?> &nbsp; <?=$lastname?></td>
		</tr>

		<tr>
			<td class="data"><span style="font-weight: bold;">Gender</span></td><td class="data"><?=$gender?></td>
		</tr>

		<tr>
			<td class="data"><span style="font-weight: bold;">Email</span></td><td class="data"><?=$email?></td>
		</tr>

		<tr>
			<td class="data"><span style="font-weight: bold;">Phone Number</span></td><td class="data"><?=$phonenumber?></td>
		</tr>

		<?php

		   $sess = $_SESSION['id'];

		   $query = "SELECT registered.*, level.* FROM registered INNER JOIN level ON registered.levelid = level.id WHERE registered.stdid = '$sess'";

		   $result = mysqli_query($dbconnect, $query);

		   if (mysqli_num_rows($result) > 0) {
		   	
		   	    while ($rows = mysqli_fetch_assoc($result)) {

		   	    	$level = $rows['level'];
		   	    	$class = $rows['classid'];
		   	    	$school = $rows['school'];


		   	    	?>
		   	    	
		   	    	<tr>
			<td class="data"><span style="font-weight: bold;">Current Level of Study</span></td><td class="data"><?=$level?></td>
		</tr>

		<tr>
			<td class="data"><span style="font-weight: bold;">Current School</span></td><td class="data"><?=$school?></td>
		</tr>

		<tr>
			<td class="data"><span style="font-weight: bold;">Current Class</span></td><td class="data"><?=$class?></td>
		</tr>

		<?php
		   	    }
		   }



		?>

		

	</table><br>

	<div class="">
		<div class="btn-group width-100">
			<a href="update-academics.php" class="btn btn-success width-100"><span  class="spa-li">Academics</span></a>
			<a href="students-update-profile.php" class="btn btn-primary width-100"><span  class="spa-li">Update Profile</span></a>
			<a href="update-subjects.php" class="btn btn-success width-100"><span class="spa-li">Subjects</span></a>
		</div>
	</div>

	</div><br><br>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>