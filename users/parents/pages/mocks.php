<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {

	header('location: ./../');
}

	//pages required
require('./../requires/database-Config.php');

require('./../requires/prof-me.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Download Notes</title>

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
		
			<table class="table table-striped" style="margin-top: 10px;">
				<thead>
					<tr><th colspan="3">
					<center><h4 class="display-6">Download Regional Mocks Here.</h4></center></li></th></tr></thead>

				<tbody>
		
		<?php

		//pages required
require('./../requires/database-Config.php');
		
		    $my_Level = mysqli_real_escape_string($dbconnect, $level);
		    $my_Class = mysqli_real_escape_string($dbconnect, $class);
		    $subj1 = mysqli_real_escape_string($dbconnect, $subject1);
			$subj2 = mysqli_real_escape_string($dbconnect, $subject2);
			$subj3 = mysqli_real_escape_string($dbconnect, $subject3);
			$subj4 = mysqli_real_escape_string($dbconnect, $subject4);
			$subj5 = mysqli_real_escape_string($dbconnect, $subject5);
			$subj6 = mysqli_real_escape_string($dbconnect, $subject6);
			$subj7 = mysqli_real_escape_string($dbconnect, $subject7);
			$subj8 = mysqli_real_escape_string($dbconnect, $subject8);
			$subj9 = mysqli_real_escape_string($dbconnect, $subject9);
			$subj10 = mysqli_real_escape_string($dbconnect, $subject10);
			$subj11 = mysqli_real_escape_string($dbconnect, $subject11);
			$subj12 = mysqli_real_escape_string($dbconnect, $subject12);
			$subj13 = mysqli_real_escape_string($dbconnect, $subject13);
			$subj14 = mysqli_real_escape_string($dbconnect, $subject14);
			$subj15 = mysqli_real_escape_string($dbconnect, $subject15);

		$query2 = "SELECT * FROM files WHERE 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj2' OR
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj1' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj3' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj4' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj5' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj6' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj7' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj8' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj9' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj10' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj11' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj12' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj13' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj14' OR 
		type = 'Mocks' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj15' 
		ORDER BY subject ASC";
		$run2 = mysqli_query($dbconnect,$query2);

					if (mysqli_num_rows($run2) > 0) {

		while ($rows = mysqli_fetch_assoc($run2)) { ?>

			<tr><td><b><?php echo $rows['title'] ?></b></td>
			<td><a href="download-docs.php?docs=<?php echo $rows['docs'] ?>" class="alert-link text-decoration-none"><img src="./../../../icons/file-earmark-pdf.svg">&nbsp;&nbsp;Download <?php echo $rows['subject']?> <?php echo $rows['class'];?> <?php echo $rows['type'];?></a></td>
			<td><spanx><b>Updated on </b> <?php echo $rows['uplddate']?></span></td></tr>

		<?php
	}

}

		?>

	</tbody></table>
	</div>

	<div style="margin-top: 20px;"><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>