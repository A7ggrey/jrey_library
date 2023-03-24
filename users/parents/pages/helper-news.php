<?php

session_start();
if (!isset($_SESSION['currentAdmin'])) {
	
	header('location: ./../');
	exit;
}
//pages required
require('./../requires/database-Config.php');

$val = $_GET['value'];

$val_M = mysqli_real_escape_string($dbconnect, $val);

$sql = "SELECT * FROM links WHERE type = '$val_M'";
$result = mysqli_query($dbconnect, $sql);

echo '<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">';

    echo "<p>Select the link for the news:</p>";

if (mysqli_num_rows($result) > 0) {
	
	echo "<p><select class='form-control' name='link'>"; 

	while ($rows = mysqli_fetch_assoc($result)) {
		echo "<option>" .$rows['link']. "<?option>";
	}

	echo "</select></p>";
}

?>