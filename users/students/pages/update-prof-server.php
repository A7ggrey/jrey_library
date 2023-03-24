<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
    header('location: ./../');
    exit;
}

//pages required
require('./../requires/database-Config.php');

$currentUser = $_SESSION['id'];
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

$sql = "UPDATE students SET firstname='$firstname', secondname='$secondname', lastname='$lastname', gender='$gender', email='$email', phonenumber='$phonenumber' WHERE id='$currentUser' ";

if (mysqli_query($dbconnect, $sql)) {

	echo "<script>
    alert('Profile Updated Successfully!');
    location.replace('profile.php');
        </script>";
} else {
    echo "Error updating record: " . mysqli_error($dbconnect);
}

mysqli_close($dbconnect);
?> 