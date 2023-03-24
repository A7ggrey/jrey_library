<?php

session_start();

if (!isset($_SESSION['currentAdmin'])) {
   header('location: ./../');
   exit;
}

//pages required
require('./../requires/database-Config.php');

$email = $_POST['email'];
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$code = $_POST['code'];
$myno = $_POST['phonenumber'];
$phonenumber = $code . $myno;
$idnumber = $_POST['idnumber'];
$null = '';
$dateregs = date('d/m/Y');
$regsby = $_SESSION['id'];
$password = $_POST['idnumber'];


$user_email = mysqli_real_escape_string($dbconnect,$email);

$query = "SELECT * FROM tutors WHERE email = '$user_email'";

$run = mysqli_query($dbconnect,$query);

if (mysqli_num_rows($run) > 0) {
   while ($rows = mysqli_fetch_assoc($run)) {
      
      $my_email = $rows['email'];

         echo "
               <script type='text/javascript'>
                        alert('An account exists with this email. Try again.');
                        history.go('-1');
               </script>";
      
   }
} else {


         $query1 = "INSERT INTO tutors (profilepic, firstname, secondname, lastname, gender, email, code, phonenumber, idnumber, subject1, subject2, subject3, dateregs, regsby, password) VALUES('users.png', '$firstname', '$secondname', '$lastname', '$gender', '$email', '$code', '$phonenumber', '$idnumber', '', '', '', '$dateregs', '$regsby', '$password')";

         if (mysqli_query($dbconnect, $query1)) {
            
            echo "
                  <script type='text/javascript'>
                         alert('The User Account has been created successfully.');
                         history.go('-1');
                  </script>
                  ";
         } else {
            echo "
                  <script type='text/javascript'>
                         alert('Account not created. Try again later.');
                         history.go('-1');
                  </script>
                         ";
         }
      }