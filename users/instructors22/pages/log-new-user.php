<?php

session_start();


//pages required
require('./../requires/database-Config.php');

if (isset($_POST['submit'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$my_email = mysqli_real_escape_string($dbconnect,$email);

	$query = "SELECT * FROM tutors WHERE email = '$my_email'";
	$run = mysqli_query($dbconnect, $query);

	if (mysqli_num_rows($run) > 0) {
		while ($rows = mysqli_fetch_assoc($run)) {
			
			$user_email = $rows['email'];
			$password2 = $rows['password'];
			$id = $rows['id'];

			if ($password == $password2) {

				session_regenerate_id();
				$_SESSION['newUser'] = TRUE;
				$_SESSION['name'] = $email;
				$_SESSION['id'] = $id;
				
				header('location: update-details.php');
			} else {

				echo "<script>alert('Wrong Password. Try again!');</script>";
			}

		}
	} else {
		echo "<script>alert('Try again!');</script>";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Instructor - Login New users</title>
</head>
<body>

	<div>
		<h4>Login to update password</h4>
	</div>

	<form method="POST" action="">
		<p>
			<input type="text" name="email" placeholder="Enter your Email">
		</p>

		<p>
			<input type="password" name="password" placeholder="Enter your Password">
		</p>

		<p>
			<input type="submit" name="submit" value="Login">
		</p>
	</form>

</body>
</html>