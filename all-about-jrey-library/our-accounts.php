<?php
session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	echo "
	<script>
	alert('Login to proceed');
	location.replace('');";
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Library | Accounts</title>
</head>
<body>

</body>
</html>