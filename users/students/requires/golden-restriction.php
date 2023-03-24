<?php 

require('./../requires/database-Config.php');

$id = $_SESSION['id'];

$my_id = mysqli_real_escape_string($dbconnect,$id);

$query = "SELECT subscription, accname FROM userstudents WHERE id = '$my_id'";

$run = mysqli_query($dbconnect,$query);

if (mysqli_num_rows($run) > 0) {

	while ($rows = mysqli_fetch_assoc($run)) {

		$subscription = $rows['subscription'];
		$accname = $rows['accname'];

		if ($accname == 'Free Account' OR $accname == 'Silver Account') {
			
			header('location: ./dashboard.php');
			exit;

		}
}

}

?>