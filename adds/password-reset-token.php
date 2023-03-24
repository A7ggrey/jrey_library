<?php

if (isset($_POST['password-reset-token']) && $_POST['email']) {
	
	require('./databaseConfig.php');

	//variables
	$emailId = $_POST['email'];

	//sql query

	$sql = mysqli_query($dbconnect, "SELECT * FROM userstudents WHERE email = '" .$emailId. "'");

	$row = mysqli_fetch_array($sql);

	if ($row) {
		
		$token = md5($emailId).rand(10,9999);

		$expFormat = mktime( date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));

		$expDate = date("Y-m-d H:i:s", $expFormat);

		$update = mysqli_query($dbconnect,"UPDATE userstudents SET password='" .$password. "', reset_link_token='" .$token. "', exp_date='" .$expDate. "' WHERE email = '" .$emailId. "'");

		$link = ""
	}
}

?>