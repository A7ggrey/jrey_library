<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
    header('location: ./../');
    exit;
}

//pages required
require('./../requires/database-Config.php');

$currentUser = $_SESSION['id'];

$sub1 = $_POST['subject1'];
$sub2 = $_POST['subject2'];
$sub3 = $_POST['subject3'];
$sub4 = $_POST['subject4'];
$sub5 = $_POST['subject5'];
$sub6 = $_POST['subject6'];
$sub7 = $_POST['subject7'];
$sub8 = $_POST['subject8'];
$sub9 = $_POST['subject9'];
$sub10 = $_POST['subject10'];
$sub11 = $_POST['subject11'];
$sub12 = $_POST['subject12'];
$sub13 = $_POST['subject13'];

$sql = "UPDATE registered SET sub1='$sub1', sub2='$sub2', sub3='$sub3', sub4='$sub4', sub5='$sub5', sub6='$sub6', sub7='$sub7', sub8='$sub8', sub9='$sub9', sub10='$sub10', sub11='$sub11', sub12='$sub12' 
    WHERE id='$currentUser'";

if (mysqli_query($dbconnect, $sql)) {

	echo "<script>
    alert('Subjects Updated Successfully!');
    location.replace('dashboard.php');
        </script>";
} else {
    echo "Error updating record: " . mysqli_error($dbconnect);
}

mysqli_close($dbconnect);
?> 