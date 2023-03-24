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
	<link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">

    <style type="text/css">
    	.id-input {
    		width: 75px;
    		border-left: none;
    		border-right: none;
    		border-bottom: none;
    		border-top: none;
    		background-color: transparent;
    	}
    </style>
</head>

<body>
	<div><?php include('../includes/header-all.php'); ?></div>

	<div id="div-h"><h3 class="display-6">Manage Documents</h3></div>

	<div id="div-table">
		<table class="table table-striped" id="table">
<tr class="bg-dark" id="tr">
<th>Title</th>
<th>#id</th>
<th>Type</th>
<th>Uploaded Date</th>
<th>Level</th>
<th>Class</th>
<th>Subject</th>
<th>Action</th>
</tr>

<?php

require('./../requires/database-Config.php');

$query = "SELECT * FROM files ORDER BY uplddate DESC";

$run = mysqli_query($dbconnect,$query);
if (mysqli_num_rows($run) > 0) {
	while ($rows = mysqli_fetch_assoc($run)) {
		?>
		<tr>
			<form method="GET" action="./documents/delete-docs.php" onsubmit="return sub();">
			<td><?php echo $rows['title'] ?></td>
			<td><input type="text" name="id" value="<?php echo $rows['id'] ?>" class="id-input" readonly></td>
			<td><?php echo $rows['type'] ?></td>
			<td><?php echo $rows['uplddate'] ?></td>
			<td><?php echo $rows['level'] ?></td>
			<td><?php echo $rows['class'] ?></td>
			<td><?php echo $rows['subject'] ?></td>
			<td><button type="submit" class="btn btn-danger">Delete</button></td>
			</form>
		</tr>
		
		<?php 
	}
}
?>

</table></div>

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

