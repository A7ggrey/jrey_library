<?php
     
     session_start();
     if (!isset($_SESSION['currentAdmin'])) {
     	
     	header('location: ./../');
     	exit;
     }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Library | Comments</title>
</head>
<body>

	<table border="1">
			<tr>
			<td>#id</td>
			<td>Email Address</td>
			<td>Comments</td>
		</tr>


	<?php

	require ('./../requires/database-Config.php');

	$sql = "SELECT * FROM comment";

	$run = mysqli_query($dbconnect,$sql);

	while ($rows = mysqli_fetch_assoc($run)) {
		
		?>

		<tr>
			<td><?php echo $rows['id']?></td>
			<td><?php echo $rows['email']?></td>
			<td><?php echo $rows['bio']?></td>
		</tr>

		<?php
	}

	?>
	</table>

</body>
</html>