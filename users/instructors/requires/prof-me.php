<?php


//pages required
require('./../requires/database-Config.php');

 $stmt = $dbconnect->prepare('SELECT id, sessionkey, profilepic, email, firstname, secondname, lastname, gender, code, phonenumber, level, class, school, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subject8, subject9, subject10, subject11, subject12, subject13, subject14, subject15 FROM userstudents WHERE sessionkey = ?');

            $stmt->bind_param('s', $_SESSION['name']);
            $stmt->execute();
            $stmt->bind_result($id, $sessionkey, $profilepic, $email, $firstname, $secondname, $lastname, $gender, $code, $phonenumber, $level, $class, $school, $subject1, $subject2, $subject3, $subject4, $subject5, $subject6, $subject7, $subject8, $subject9, $subject10, $subject11, $subject12, $subject13, $subject14, $subject15);
            $stmt->fetch();
            $stmt->close();
?>
