<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {

	header('location: ./../');
}

	//pages required
require('./../requires/database-Config.php');

$id111 = $_SESSION['id'];

 $query111 = "SELECT * FROM registered WHERE stdid = '$id111'";

 $result111 = mysqli_query($dbconnect, $query111);

 if (mysqli_num_rows($result111) > 0) {
     
     while ($rows111 = mysqli_fetch_assoc($result111)) {
         
         $levelid = $rows111['levelid'];
       

     }
 } else {
 	
 	echo "<script>
    alert('Update your academics level to proceed!');
    location.replace('update-academics.php');
        </script>";
 }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Update Subjects</title>

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

		@media (max-device-width: 480px) {
			#btn {
				font-size: 45px;
			}
			#check {
				border-color: blue;
				width: 45px;
				height: 45px;
			}
			.bb {
				font-size: 35px;
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

	<form method="POST" action="update-subjects-server.php">
		
			<table class="table table-striped container" style="margin-top: 10px;">
				<thead>
					<tr><th colspan="3">
					<center><h4 class="display-6">Select Your Subjects</h4></center></li></th></tr></thead>

				<tbody>

					<?php

		//pages required
require('./../requires/database-Config.php');

		$my_Level = mysqli_real_escape_string($dbconnect, $levelid);

		$query2 = "SELECT * FROM subjects WHERE level = '$my_Level' ";
		$run2 = mysqli_query($dbconnect,$query2);

					if (mysqli_num_rows($run2) > 0) {

		while ($rows = mysqli_fetch_assoc($run2)) { ?>

			<tr><td><b><input type="checkbox" id="check" class="form-check-input" name="<?php echo $rows['subject'] ?>" value="<?php echo $rows['id'] ?>"></b><td><b class="bb"><?php echo $rows['subject'] ?></b></td>
			</tr>

		<?php
	}

}

		?>

	</tbody></table>

	<p class="container">
		<input type="submit" name="" value="Submit" id="btn" class="btn btn-primary width-100">
	</p>
</form>

	</div>

	<div style="margin-top: 20px;"><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>