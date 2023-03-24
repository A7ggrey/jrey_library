<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {

	header('location: ./../');
}

	//pages required
require('./../requires/database-Config.php');

$currentUser = $_SESSION['name'];

$stmt = $dbconnect->prepare('SELECT id, sessionkey, profilepic, email, firstname, secondname, lastname, gender, code, phonenumber, level, class, school, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subject8, subject9, subject10, subject11, subject12, subject13, subject14, subject15 FROM userstudents WHERE sessionkey = ?');

            $stmt->bind_param('s', $_SESSION['name']);
            $stmt->execute();
            $stmt->bind_result($id, $sessionkey, $profilepic, $email, $firstname, $secondname, $lastname, $gender, $code, $phonenumber, $level, $class, $school, $subject1, $subject2, $subject3, $subject4, $subject5, $subject6, $subject7, $subject8, $subject9, $subject10, $subject11, $subject12, $subject13, $subject14, $subject15);
            $stmt->fetch();
            $stmt->close();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Students' Dashboard</title>

	<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width ="0";
	}
</script>

<style type="text/css">
		
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

		.img {
			width: 600px;
			height: 375px;
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

			.special-icon {
				width: 60px;
				height: 60px;
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
		    .th {
		    	font-size: 35px;
		    }

		    .td {
		    	font-size: 19px;
		    	color: blue;
		    	font-weight: bold;
		    }

		    .img {
			width: 80%;
			height: 500px;
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
		<br>

		<table class="table table-striped">
				<tr class="bg-dark" style="color: whitesmoke;">
					<th colspan="12" class="th"><center>Subjects I Take</center></th>
				</tr>
				<tr>
					<td class="td"><?=$subject1?></td>
					<td class="td"><?=$subject2?></td>
					<td class="td"><?=$subject3?></td>
					<td class="td"><?=$subject4?></td>
					<td class="td"><?=$subject5?></td>
					<td class="td"><?=$subject6?></td>
					<td class="td"><?=$subject7?></td>
					<td class="td"><?=$subject8?></td>
					<td class="td"><?=$subject9?></td>
					<td class="td"><?=$subject10?></td>
					<td class="td"><?=$subject11?></td>
					<td class="td"><?=$subject12?></td>
				</tr>

			</table>

		<br>
		

		<center><div class="div-display">
			<?php

			require('./../requires/database-Config.php');

			$my_Level = mysqli_real_escape_string($dbconnect, $level);

			$my_Class = mysqli_real_escape_string($dbconnect, $class);

			//subjects taken by current user
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

			$query3 = "SELECT * FROM pands WHERE 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj2' OR
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj1' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj3' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj4' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj5' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj6' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj7' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj8' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj9' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj10' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj11' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj12' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj13' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj14' OR 
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj15' 
		ORDER BY uplddate ASC";

			$run = mysqli_query($dbconnect,$query3);

			if (mysqli_num_rows($run) > 0) {
			while ($rows = mysqli_fetch_assoc($run)) { ?>

		
			<div>
				<p><?php echo $rows['bio'] ?></p>
				
				<p><a href="<?php echo $rows['link'] ?>">
					<img src="news/<?php echo $rows['img'] ?>" class="img"></a>
				</p>
				
				<p><a href="<?php echo $rows['link'] ?>">
					Download <?php echo $rows['class'] ?> <?php echo $rows['type'] ?> here</a>
				</p>
				
			</div><hr>



					<?php
				}

			}

			?>

		</div>
	</center>
	</div>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>