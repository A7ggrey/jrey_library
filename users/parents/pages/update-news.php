<?php

session_start();

if (!isset($_SESSION['currentAdmin'])) {
	
	header('location: ./../../../admin/');
	exit;
}

require('./../requires/database-Config.php');

if (isset($_POST['submit'])) {

   $pname = rand(1000,100000000)."-".$_FILES['img']['name'];

   $tname = $_FILES['img']['tmp_name'];

   $uploads_dir = './news';

   $type = $_POST['type'];
   $bio = $_POST['bio'];
   $link = $_POST['link'];
   $level = $_POST['level'];
   $class = $_POST['class'];
   $subject = $_POST['subject'];

   move_uploaded_file($tname, $uploads_dir.'/'.$pname);

   $currentUser = $_SESSION['id'];

   $sql = "INSERT INTO pands (img, type, bio, link, level, class, subject, uplddate) VALUES ('$pname', '$type', '$bio', '$link', '$level', '$class', '$subject', NULL)";

   if (mysqli_query($dbconnect,$sql)) {

   	echo       

   	        "<script>
                
                alert('Your News has been Uploaded Successfully');
                location.replace('update-news.php');

   	        </script>";
   } else {

   	echo "Error";
   }
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Update Profile Pic</title>

	<link rel="stylesheet" type="text/css" href="./..css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./..css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./..css/jrey-library.css">

    <!-- js bootstrap external links-->
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <!--Favicon links-->
    <link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">

    <script type="text/javascript">
    	function my_fun(str) {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function() {

			if (this.readyState==4 && this.status==200) {
				document.getElementById('poll2').innerHTML = this.responseText;
			}
		}

		xmlhttp.open("GET","helper-news.php?value="+str, true);
		xmlhttp.send();
	}

	function my_fun2(str) {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function() {

			if (this.readyState==4 && this.status==200) {
				document.getElementById('poll').innerHTML = this.responseText;
			}
		}

		xmlhttp.open("GET","helper-2.php?value="+str, true);
		xmlhttp.send();
	}
    </script>
</head>

<body>

	    <div><?php include('../includes/header-all.php'); ?></div>


	<form method="POST" action="" class="container" enctype="multipart/form-data" style="margin-top: 40px;">
		<center><h4 class="display-4">Choose a photo</h4></center><br><br>
		<p><input type="file" name="img" class="form-control" accept="image/*"></p>

		<p>Select a subject:</p>
		<p><input type="text" name="subject" placeholder="Input a Subject" class="form-control"></p>

		<p>Select type of News to upload:</p>
			<p>
				<select class="form-control" name="type" id="SelectA" onchange="my_fun(this.value);">
					<option>--Select Type of News--</option>
					<option value="Notes">Notes</option>
					<option value="Exams">Exams</option>
				</select>
			</p>

		<div id="poll2">
			<p>Select the link for the news:</p>
			<p>
				<select class="form-control" name="link">
					<option>--Select Link--</option>
				</select>
			</p>

		</div>

		<p>Select Current Level of Studies:</p>
			<p>
				<select class="form-control" name="level" id="SelectA" onchange="my_fun2(this.value);">
					<option>--Select Current Level--</option>
					<option value="Primary School">Primary School</option>
					<option value="Secondary School">Secondary School</option>
				</select>
			</p>

		<div id="poll">
			<p>Select Current Class:</p>
			<p>
				<select class="form-control" name="class">
					<option>--Select Current Class--</option>
				</select>
			</p>
		</div>

		<div>
			<p>Write Something about the update:</p>
			<p>
				<textarea class="form-control" name="bio" style="height: 60px;"></textarea>
			</p>
		</div>

		<p><input type="submit" name="submit" value="Upload News" class="btn btn-primary form-control"></p>
	</form>

	<div style="margin-top: 100px;"><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>