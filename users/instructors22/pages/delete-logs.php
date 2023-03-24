<?php 

session_start();
if (!isset($_SESSION['currentAdmin'])) {
	header('location: ./../');
	exit;
}
require('./../requires/database-Config.php');

$users = $_GET['id'];
$del_Log = mysqli_real_escape_string($dbconnect,$users);

$query = "DELETE FROM logs WHERE id = '$del_Log'";

if (mysqli_query($dbconnect,$query)) {
	
	echo "
	<script>
	alert('User log deleted successfully.');
	history.go('-1');
	</script>";
} else {
	echo "Error deleting record: " . mysqli_error($dbconnect);
}

?>