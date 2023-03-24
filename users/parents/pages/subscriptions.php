<?php
session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	header('location: ./../');

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Student Subscription</title>
</head>
<body>

	<div>
		<p>Subscribe!!!</p>
	</div>

</body>
</html>