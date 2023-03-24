<?php


//pages required
require('./../requires/database-Config.php');

 $id = $_SESSION['id'];

 $query111 = "SELECT * FROM students WHERE id = '$id'";

 $result111 = mysqli_query($dbconnect, $query111);

 if (mysqli_num_rows($result111) > 0) {
     
     while ($rows111 = mysqli_fetch_assoc($result111)) {
         
         $
     }
 }
?>
