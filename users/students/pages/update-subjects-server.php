<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
    header('location: ./../');
    exit;
}

//pages required
require('./../requires/database-Config.php');

$currentUser = $_SESSION['id'];

$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$subject4 = $_POST['subject4'];
$subject5 = $_POST['subject5'];
$subject6 = $_POST['subject6'];
$subject7 = $_POST['subject7'];
$subject8 = $_POST['subject8'];
$subject9 = $_POST['subject9'];
$subject10 = $_POST['subject10'];
$subject11 = $_POST['subject11'];
$subject12 = $_POST['subject12'];

$sql = "UPDATE registered SET sub1='$subject1', sub2='$subject2', sub3='$subject3', sub4='$subject4', sub5='$subject5', sub6='$subject6', sub7='$subject7', sub8='$subject8', sub9='$subject9', sub10='$subject10', sub11='$subject11', sub12='$subject12' 
    WHERE stdid='$currentUser' ";

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