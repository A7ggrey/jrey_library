<?php

session_start();

if (!isset($_SESSION['currentAdmin'])) {
	
	header('location: ./../');
	exit;
}

require('./../requires/database-Config.php');

if (isset($_POST['submit'])) {
   
   $title = $_POST['fname'];
   $type = $_POST['type'];
   $level = $_POST['level'];
   $class = $_POST['class'];
   $subject = $_POST['subject'];

   $pname = rand(1000,100000000)."-".$_FILES['docs']['name'];

   $tname = $_FILES['docs']['tmp_name'];

   $uploads_dir = './documents';

   $currentUser = $_SESSION['name'];

   move_uploaded_file($tname, $uploads_dir.'/'.$pname);

   $sql = "INSERT INTO files(title,docs,type,uplddate,level,class,subject,upldby) VALUES('$title','$pname','$type',NULL,'$level','$class','$subject','$currentUser')";

   if (mysqli_query($dbconnect,$sql)) {
   	
   	echo "

   	   <script>
   	   alert('Document Uploaded Successfully');
   	   location.replace('./uploads.php');
   	   </script>

   	      ";
   } else {

   	echo "Error";
   }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Upload Document</title>

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
				document.getElementById('poll3').innerHTML = this.responseText;
			}
		}

		xmlhttp.open("GET","upload-files-helper.php?value="+str, true);
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

	<div id="main">
		<form method="POST" action="" enctype="multipart/form-data">

			<center><h3 class="display-4">Upload a file:</h3></center>
			<br><br>

			<p><label>Choose a File Document to Upload:</label></p>
			<p><input type="file" name="docs" class="form-control" accept=""></p>

			<p><label>Document Name:</label></p>
			<p><input type="text" name="fname" placeholder="Enter document name" class="form-control"></p>

			<p><label>Subject:</label></p>
			<p><input type="text" name="subject" placeholder="Enter Subject name" class="form-control"></p>

			<p><label>Type (Exams, notes, revision papers e.t.c):</label></p>
			<p><select name="type" class="form-control">
				   <option>--Select Type of document to upload--</option>
				   <option>Exams</option>
				   <option>KCSE</option>
				   <option>Mocks</option>
				   <option>Notes</option>
				   <option>Past Papers</option>
				</select>
			</p>

			<p><label>Level of Education:</label></p>
			<p><select name="level" class="form-control" id="SelectA" onchange="my_fun(this.value);">
				   <option>--Select Level of Study--</option>
				   <option value="Primary School">Primary School</option>
				   <option value="Secondary School">Secondary School</option>
				</select>
			</p>
         
         <div id="poll3">
			<p><label>Select Class:</label></p>
			<p><select name="type" class="form-control">
				   <option>--Select Class of Study--</option>
				</select>
			</p>

			</div>

			<p><button type="submit" name="submit" class="btn btn-primary width-100">Upload Document</button></p>
		</form>
	</div>

	   <div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>
