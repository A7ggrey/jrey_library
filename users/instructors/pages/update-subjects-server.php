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
$subject13 = $_POST['subject13'];

$sql = "UPDATE userstudents SET subject1='$subject1', subject2='$subject2', subject3='$subject3', subject4='$subject4', subject5='$subject5', subject6='$subject6', subject7='$subject7', subject8='$subject8', subject9='$subject9', subject10='$subject10', subject11='$subject11', subject12='$subject12' 
    WHERE id='$currentUser' ";

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