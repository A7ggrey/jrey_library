<?php 

session_start();
if (!isset($_SESSION['currentAdmin'])) {
	header('location: ./../../../admin/');
	exit;
}
require('./../requires/database-Config.php');

$news = $_GET['id'];
$del_News = mysqli_real_escape_string($dbconnect,$news);

$query = "DELETE FROM pands WHERE id = '$del_News'";

if (mysqli_query($dbconnect,$query)) {
	
	echo "
	<script>
	alert('News alert deleted successfully.');
	history.go('-1');
	</script>";
} else {
	echo "Error deleting record: " . mysqli_error($dbconnect);
}

?>