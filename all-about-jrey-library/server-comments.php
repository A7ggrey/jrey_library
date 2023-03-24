<?php

include('./../users/students/requires/database-Config.php');

$email = $_POST['email'];
$bio = $_POST['bio'];

$sql = "INSERT INTO comment (email, bio) VALUES('$email', '$bio')";

if (mysqli_query($dbconnect,$sql)) {

	echo "
	
	<script>
	    alert('Thanks for your comment. We will get back to you');
	    location.replace('./about-Us.php');
	</script>

	";
} else {
	echo "
	
	<script>
	    alert('An error has occured. Try again.');
	    location.replace('./about-Us.php');
	</script>

	";
}
mysqli_close($dbconnect);
?>