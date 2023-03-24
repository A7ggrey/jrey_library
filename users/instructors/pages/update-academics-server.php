<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
    header('location: ./../');
    exit;
}

//pages required
require('./../requires/database-Config.php');

$currentUser = $_SESSION['id'];
$school = $_POST['school'];
$level = $_POST['level'];
$class = $_POST['class'];

$sql = "UPDATE userstudents SET school='$school', level='$level', class='$class' WHERE id='$currentUser' ";

if (mysqli_query($dbconnect, $sql)) {

	echo "<script>
    alert('Academics Updated Successfully!');
    location.replace('profile.php');
        </script>";
} else {
    echo "Error updating record: " . mysqli_error($dbconnect);
}

mysqli_close($dbconnect);
?> 