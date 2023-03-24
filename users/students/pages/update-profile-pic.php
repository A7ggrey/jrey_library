<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	header('location: ./../');
}

require('./../requires/database-Config.php');

if (isset($_POST['submit'])) {


   $pname = rand(1000,100000000)."-".$_FILES['profilepic']['name'];

   $tname = $_FILES['profilepic']['tmp_name'];

   $uploads_dir = './userProfile';

   move_uploaded_file($tname, $uploads_dir.'/'.$pname);

   $currentUser = $_SESSION['id'];

   $sql = "UPDATE students SET profilepic='$pname' WHERE id='$currentUser'";

   if (mysqli_query($dbconnect,$sql)) {

   	echo       

   	        "<script>
                
                alert('Profile Photo Updated Successfully');
                location.replace('profile.php');

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

    <style type="text/css">
       @media (max-device-width: 480px) {
         #prof {
            font-size: 45px;
         }
         #bt {
            font-size: 45px;
         }
       }
    </style>
</head>

<body>

	    <div><?php include('../includes/header-all.php'); ?></div>


	<form method="POST" action="" class="container" enctype="multipart/form-data" style="margin-top: 40px;">
		<center><h4 class="display-4">Choose a photo</h4></center><br><br>
		<p><input type="file" id="prof" name="profilepic" class="form-control" accept="image/*"></p>

		<p><input type="submit" name="submit" id="bt" value="Upload Photo" class="btn btn-primary width-100"></p>
	</form>

	<div style="margin-top: 100px;"><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>