<?php

session_start();
 
if (!isset($_SESSION['currentStudent'])) {

	header('location: ./../');
}

	//pages required
require('./../requires/database-Config.php');

$my_id = $_SESSION['id'];

$query888 = "SELECT * FROM registered WHERE stdid = '$my_id'";
$result888 = mysqli_query($dbconnect, $query888);

if (mysqli_num_rows($result888) < 0) {
	
	echo "<script>
    alert('Please update your academics and subjects to proceed!');
    location.replace('update-academics.php');
        </script>";
}

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
			#tdtd {
				overflow: hidden;
				white-space: nowrap;
				width:100%;
				text-overflow: inherit;
			}
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

		<div>

			<?php

			$currentUser = $_SESSION['id'];

			$my_id = mysqli_real_escape_string($dbconnect,$currentUser);

			$query1 = "SELECT * FROM students WHERE id = '$my_id'";

	$run1 = mysqli_query($dbconnect, $query1);

	if (mysqli_num_rows($run1) > 0) {
		while($rows1 = mysqli_fetch_assoc($run1)) {

			$profilepic = $rows1['profilepic'];
			$firstname = $rows1['firstname'];
			$lastname = $rows1['lastname'];
			
				}
			} 
?>

			<p>
				<span style="font-weight: bold; font-weight: 30px;">STUDENT</span><br>
				<img src="userProfile/<?=$profilepic?>" class="" style="width: 40px; height: 40px; border-radius: 100px;">&nbsp;
				
				<span style="color: blue; font-weight: bolder; font-size: 28px;"><?=$firstname?></span>&nbsp;
				<span style="font-size: 24px; font-weight: bold;"><?=$lastname?></span>

			</p>
		</div>

		<div id="tdtd">
		<table class="table table-striped">
				<tr class="bg-dark" style="color: whitesmoke;">
					<th colspan="12" class="th">Subjects I Take</th>
				</tr>
				<tr>
					<?php

					   $query2 = "SELECT * FROM registered WHERE stdid = '$my_id'";
					   $run2 = mysqli_query($dbconnect, $query2);

					   if (mysqli_num_rows($run2) > 0) {
					   	  while ($rows2 = mysqli_fetch_assoc($run2)) {
					   	  	$subject1 = $rows2['sub1'];
					   	  	$subject2 = $rows2['sub2'];
					   	  	$subject3 = $rows2['sub3'];
					   	  	$subject4 = $rows2['sub4'];
					   	  	$subject5 = $rows2['sub5'];
					   	  	$subject6 = $rows2['sub6'];
					   	  	$subject7 = $rows2['sub7'];
					   	  	$subject8 = $rows2['sub8'];
					   	  	$subject9 = $rows2['sub9'];
					   	  	$subject10 = $rows2['sub10'];
					   	  	$subject11 = $rows2['sub11'];
					   	  	$subject12 = $rows2['sub12'];
					   	  	$level = $rows2['levelid'];
					   	  	$class = $rows2['classid'];

					   	  	
					   ?>
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
					<?php
				}
					   }
					?>
				</tr>

			</table>
		</div>

		<br>
		

		<center><div class="div-display">
			<?php

			require('./../requires/database-Config.php');

			if (isset($level)) {

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
		level = '$my_Level' AND class = '$my_Class' AND subject = '$subj12'
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
					<?php echo $rows['class'] ?> <?php echo $rows['type'] ?></a>
				</p>
				
			</div><hr>



					<?php
				}

			}
		} else {

			echo "<script>
            alert('Please update your academics and subjects to proceed!');
            location.replace('update-academics.php');
                  </script>";
		}

			?>

		</div>
	</center>
	</div>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>