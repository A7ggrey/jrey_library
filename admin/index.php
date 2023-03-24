<?php
session_start();

//pages required
require('./requires/database-Config.php');

//variables declaration
//$username = $email OR $phonenumber

$msg = '';

//use $dbconnect for datase connection

if (!isset($_POST['email'], $_POST['password'])) {
	
	$msg = 'Please Fill in the form';
}

if (empty($_POST['email']) || empty($_POST['password'])) {
	
	$msg = '';
} else {

	if ($stmt = $dbconnect->prepare('SELECT id, email, sessionkey, phonenumber, password FROM admin WHERE email = ?')) {
		$stmt->bind_param('s', $_POST['email']);
		$stmt->execute();

		$stmt->store_result();

		if ($stmt->num_rows > 0) {
			$stmt->bind_result($id, $email, $sessionkey, $phonenumber, $password);
			$stmt->fetch();

			//Password Verification

			if (password_verify($_POST['password'], $password)) {
				
				//create a session for the logged in user

				session_regenerate_id();
				$_SESSION['currentAdmin'] = TRUE;
				$_SESSION['name'] = $sessionkey;
				$_SESSION['id'] = $id;

				header('location: ./pages/dashboard.php');
			} else {

				//incorrect password

				$msg = 'Username or Password is incorrect. Pleasr try again.';
			}
		} else {
			//incorrect username

			$msg = 'Username does not exist. Try again.';
		}

		$stmt->close();
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey library | login</title>

	<!-- css bootstrap external links-->
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/jrey-library.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="./js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../favicon.ico" type="image/x-icon">
</head>
<body style=""><b>

	<div class="container" style="background-color: white; opacity: 85%">
		<?php include('./includes/header-1.php');?></div>
	<div class="" style="background-color: #aaaa55; opacity: 85%;">

		<h4 class="display-6">Login</h4>

		<form method="POST" action="" class="" style="">
		
		<p><label class="label-me" for="username">Username</label>
			<input type="text" name="email" placeholder="Enter your Email/Phone Number" class="form-control input-others" style="width: 50%;">
		</p>

		<p><label class="label-me" for="password">Password</label>
			<input type="password" name="password" placeholder="Enter your Password" class="form-control input-others" style="width: 50%;">
		</p>

		<p class="" style="color: red;"><?=$msg?></p>
		
		<p><input type="submit" name="" value="Login" class="btn btn-primary form-control btn-submit" style="width:50%;"></p>

		<p><a href="#" class="alert-link text-decoration-none link-me">Forgot Password?</a></p>

		<p><a href="./pages/register-Account.php" class="alert-link text-decoration-none link-me">Register Account.</a></p>

		</form>
		<hr>
	<?php include('./includes/footer-01.php');?>
</div>
</b>
</body>
</html>