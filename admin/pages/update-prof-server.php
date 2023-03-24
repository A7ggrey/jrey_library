<?php

session_start();

if (!isset($_SESSION['$sessionkey'])) {
    header('location: ./../');
    exit;
}

include 'databaseConfig.php';

$currentUser = $_SESSION['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];

$sql = "UPDATE userstudents SET firstname='$firstname', lastname='$lastname', gender='$gender', phonenumber='$phonenumber' WHERE id='$currentUser' ";

if (mysqli_query($con, $sql)) {

	echo "<script>
    alert('Profile Updated Successfully!');
    location.replace('students-update-profile.php');
        </script>";
} else {
    echo "Error updating record: " . mysqli_error($con);
}

mysqli_close($con);
?> 