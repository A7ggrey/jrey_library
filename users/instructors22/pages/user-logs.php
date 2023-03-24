<?php

session_start();

if (!isset($_SESSION['currentAdmin'])) {
	header('location: ./../');
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
	<title>Admin Panel | User Logs</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">
	<link rel="stylesheet" type="text/css" href="../css/admin-display.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../faon.ico" type="image/x-icon">
    <link rel="icon" href="./../../favicon.ico" type="image/x-icon">
    <style type="text/css">
    </style>
</head>
<body>

	<div><?php include('../includes/header-all.php'); ?></div>

	<div id="div-h">
		<h4 class="display-6">Manage User Login logs</h4>
	</div>

	<div id="div-table">
		<table class="table table-striped" id="table">

		<tr class="bg-dark" id="tr">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Action</th>
			<th>Status</th>
			<th>Date</th>
			<th>Time</th>
			<th>Terminate</th>
		</tr>

	<?php

	$query = "SELECT logs.*, userstudents.firstname, userstudents.lastname, userstudents.email FROM userstudents INNER JOIN logs WHERE userstudents.id = logs.uid ORDER BY logs.logtime DESC";

	$run = mysqli_query($dbconnect,$query);

	if (mysqli_num_rows($run) > 0) {
		while ($rows = mysqli_fetch_assoc($run)) {
			?>

			<form method="GET" action="delete-logs.php" onsubmit="return sub()">
			<tr>
				<td><?php echo $rows['firstname'] ?></td>
				<td><?php echo $rows['lastname'] ?></td>
				<td><?php echo $rows['email'] ?></td>
				<td><?php echo $rows['action'] ?></td>
				<td><?php echo $rows['status'] ?></td>
				<td><?php echo $rows['logtime'] ?></td>
				<td><?php echo $rows['logtime'] ?></td>
				<td><button type="submit" name="id" value="<?php echo $rows['id'] ?>" class="btn btn-danger">Delete</button></td>
			</tr>

			</form>

			<?php

		}
	}
	?>

	</table>
	</div>

	<div><?php include('../includes/footer-all.php'); ?></div>

</body>
<script type="text/javascript">
	function sub() {

var r = confirm("Do you really want to Delete the selected log?");
if (r == true) {
    return true;
} else {
    return false;
} 
	}
</script>
</html>