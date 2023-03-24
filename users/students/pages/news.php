<?php 
session_start();
if (!isset($_SESSION['currentAdmin'])) {
	header('location: ./../../../admin/');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel | Manage Documents</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">
	<link rel="stylesheet" type="text/css" href="../../../admin/css/admin-display.css">

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

	<div id="div-h"><h3 class="display-6">Manage News Updates</h3></div>

	<div id="div-table">
		<table class="table table-striped" id="table">
<tr class="bg-dark" id="tr">
<th>Image</th>
<th>Type</th>
<th>About</th>
<th>Level</th>
<th>Class</th>
<th>Subject</th>
<th>Date Uploaded</th>
<th>Action</th>
</tr>

<?php

require('./../requires/database-Config.php');

$query = "SELECT * FROM pands";

$run = mysqli_query($dbconnect,$query);
if (mysqli_num_rows($run) > 0) {
	while ($rows = mysqli_fetch_assoc($run)) {
		?>
		<form method="GET" action="delete-news.php" onsubmit="return sub()">
		<tr>
			<td><img src="news/<?php echo $rows['img'] ?>" class="img"></td>
			<td><?php echo $rows['type'] ?></td>
			<td><?php echo $rows['bio'] ?></td>
			<td><?php echo $rows['level'] ?></td>
			<td><?php echo $rows['class'] ?></td>
			<td><?php echo $rows['subject'] ?></td>
			<td><?php echo $rows['uplddate'] ?></td>
			<td><button type="submit" class="btn btn-danger" name="id" value="<?php echo $rows['id'] ?>">Delete</button></td>
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

var r = confirm("Do you really want to Delete the Document?");
if (r == true) {
    return true;
} else {
    return false;
} 
	}
</script>
</html>

