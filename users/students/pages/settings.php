<?php
session_start();

//pages required
require('./../requires/database-Config.php');

//variables declaration
//$username = $email OR $phonenumber

$msg = '';

//use $dbconnect for datase connection

if (!isset($_POST['password'])) {
	
	$msg = 'Please Fill in the form';
}

if (empty($_POST['password'])) {
	
	$msg = '';
} else {

	$user = $_SESSION['id'];

	if ($stmt = $dbconnect->prepare('SELECT id, password FROM userstudents WHERE id = "$user"')) {

		$stmt->execute();

		$stmt->store_result();

			$stmt->bind_result($id, $password);
			$stmt->fetch();

			//Password Verification

			if (password_verify($_POST['password'], $password)) { 

				echo "<script>

				alert('Password Match');
				location.replace('./settings.php');
				</script>";

			 } else {

				//incorrect password

				echo "<script>

				alert('Username or Password is incorrect. Pleasr try again.');
				location.replace('./settings.php');
				</script>";

			}

		$stmt->close();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div>
		<form method="POST" action="">
			<p><input type="password" name="password" placeholder="Enter Old Password"></p>
			<p><button type="submit" class="">Change Password</button></p>

		</form>
	</div>

</body>
</html>