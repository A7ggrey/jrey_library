<?php

session_start();

if (!isset($_SESSION['currentAdmin'])) {

	header('location: ./../../../admin/');
}

	//pages required
require('./../requires/database-Config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Admin Dashboard</title>

	<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width ="0";
	}

	function sFunction() {
		var input, filter, table, tr, td, i, txtValue;

		input = document.getElementById("searchInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");

		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td") [0];

			if (td) {
				txtValue = td.textContent || td.innerText;

				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}
</script>

<style type="text/css">
	.divdd {
		width: 75%;
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

		.prof {
			width: 50px;
			height: 50px;
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
		#tbl {
			font-size: 11px;
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
<body style="background-color: ;">
	<div><?php include('../includes/header-all.php'); ?></div>

	<br>

	<div id="main">
		<center>
		
		<form method="GET">
			<div class="btn-group">
				<input type="search" name="k" placeholder="Search..." id="searchInput" onkeyup="sFunction()" class="form-control">
			</div>
		</form>
		</center><br>
		

		<div class="divdd">
			<table class="table table-striped" id="myTable">
				<tr class="bg-dark" style="color: whitesmoke;">
					<th>Email</th>
					<th>#id</th>
					<th>Profile Photo</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Phone Number</th>
					
				</tr>

				<?php

				require ('./../requires/database-Config.php');

				if (isset($_GET['k'])) {
					
				$email = $_GET['k'];

				$my_Email = mysqli_real_escape_string($dbconnect,$email);

				$query = "SELECT * FROM students WHERE email LIKE '%$my_Email%'";

				$run = mysqli_query($dbconnect,$query);

				if (mysqli_num_rows($run) > 0) {
					
				while ($rows = mysqli_fetch_assoc($run)) { ?>

					<tr>
						
						
						<td><?php echo $rows['email']?></td>
						<td><?php echo $rows['id']?></td>
						<td>
							<img src="userProfile/<?php echo $rows['profilepic'] ?>" alt="My Photo" class="prof">
						</td>
						<td><?php echo $rows['firstname']?></td>					
						<td><?php echo $rows['lastname']?></td>
						<td><?php echo $rows['gender']?></td>
						<td><?php echo $rows['phonenumber']?></td>
					</tr>
					
					<?php
				}
				}
			} else {
				$query2 = "SELECT * FROM students";
				$run2 = mysqli_query($dbconnect,$query2);

				if (mysqli_num_rows($run2) > 0) {
					while ($rows = mysqli_fetch_assoc($run2)) {
						?>

						<tr>
						<td><?php echo $rows['email']?></td>
						<td><?php echo $rows['id']?></td>
						<td>
							<img src="userProfile/<?php echo $rows['profilepic'] ?>" alt="My Photo" class="prof">
						</td>
						<td><?php echo $rows['firstname']?></td>
						<td><?php echo $rows['lastname']?></td>
						<td><?php echo $rows['gender']?></td>
						<td><?php echo $rows['phonenumber']?></td>
					</tr>

						<?php
					}
				}
			}
				?>
			</table>

			<div><?php?></div>
		</div>
	</div>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>