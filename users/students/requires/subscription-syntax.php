<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	header('location: ../');
	exit;
}

require ('databaseConfig.php');
//database sql query
$stmt = $dbconnect->prepare("SELECT id, sessionkey, subscription, datefro, datedue FROM subscription WHERE sessionkey = ?");

$stmt->bind_param('s', $_SESSION['name']);
$stmt->execute();
$stmt->bind_result($id, $sessionkey, $subscription, $datefro, $datedue);
$stmt->fetch();



	if ($subscription < '100.00') {
		
		echo "<script>

		alert('You have to make a subscription in order to access our services');

		location.replace('subscriptions.php');

		</script>";
	}


$stmt->close();