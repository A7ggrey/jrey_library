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

$query = "SELECT * FROM registered WHERE stdid = '$currentUser'";

$result = mysqli_query($dbconnect,$query);

if (mysqli_num_rows($result) > 0) {
    
$sql = "UPDATE registered SET school='$school', levelid='$level', classid='$class' WHERE stdid='$currentUser' ";

if (mysqli_query($dbconnect, $sql)) {

	echo "<script>
    alert('Academics Updated Successfully. Please update your Subjects.');
    location.replace('update-subjects.php');
        </script>";
} else {
    echo "Error updating record: " . mysqli_error($dbconnect);
}


} else {
    $query2 = "INSERT INTO registered(stdid, levelid, classid, school, sub1, sub2, sub3, sub4, sub5, sub6, sub7, sub8, sub9, sub10, sub11, sub12) VALUES('$currentUser', '$level', '$class', '$school', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";

    $result2 = mysqli_query($dbconnect, $query2);

    if ($result2) {
        
        echo "<script>
    alert('You have registered Successfully!');
    location.replace('update-subjects.php');
        </script>";
    } else {

        echo "Error inserting record: " . mysqli_error($dbconnect);
    }
}


mysqli_close($dbconnect);
?> 