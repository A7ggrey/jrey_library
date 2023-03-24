<?php
session_start();

if (!isset($_SESSION['newUser'])) {
	header('location: log-new-user.php');
	exit;
}

//pages required
require('./../requires/database-Config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Instructor - Update password</title>
</head>
<body>

	<?php echo "I am id number " .$_SESSION['id']. "<br>";?>
	<div>
		<?php

		$id = $_SESSION['id'];

		$currentUser = mysqli_real_escape_string($dbconnect,$id);

		$query = "SELECT * FROM tutors WHERE id = '$currentUser'";
		$run = mysqli_query($dbconnect,$query);

		if (mysqli_num_rows($run) > 0) {
			
			while ($rows = mysqli_fetch_assoc($run)) {
				
				?>

				<div>
					<p><?php echo $rows['firstname']; ?></p>

				</div>

				<div>
					<form>
						<p><input type="text" name="" value="<?php echo $rows['firstname']; ?>"></p>
						<p><input type="text" name="" value="<?php echo $rows['lastname']; ?>"></p>
						<p><input type="text" name="" value="<?php echo $rows['email']; ?>"></p>
						<p><input type="text" name="" value="<?php echo $rows['password']; ?>"></p>
						<p><input type="submit" name="" value="Submit"></p>
					</form>

					<a href="out.php">LogOut</a>
				</div>

				<?php
			}
		}
		?>
	</div>

</body>
</html>