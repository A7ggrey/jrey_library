<?php

include('./../users/students/requires/database-Config.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$bio = $_POST['bio'];

$sql = "INSERT INTO contact (firstname, lastname, email, bio) VALUES('$firstname', '$lastname', '$email', '$bio')";

if (mysqli_query($dbconnect,$sql)) {

	echo "
	
	<script>
	    alert('Thanks for contacting us. We will get back to you');
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