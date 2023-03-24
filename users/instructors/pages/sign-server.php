<?php

//pages required
require('./../requires/database-Config.php');

	// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['email'], $_POST['firstname'], $_POST['secondname'], $_POST['lastname'], $_POST['gender'], $_POST['code'], $_POST['phonenumber'], $_POST['password'])) {
	// Could not get the data that should have been sent.
	echo 'Please complete the registration form!';
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['firstname']) || empty($_POST['secondname']) || empty($_POST['lastname']) || empty($_POST['gender']) || empty($_POST['code']) || empty($_POST['phonenumber'])) {
	// One or more values are empty.
	echo 'Please complete the registration form';
}
	

// We need to check if the account with that username exists.
if ($stmt = $dbconnect->prepare('SELECT id, password FROM userstudents WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo "<script type='text/javascript'>
                         alert('An account exists with this email, your can log in.');
                         location.replace('register-Account.php');
                         </script>";
        } else {
		
        // Username doesnt exists, insert new account
        if ($stmt = $dbconnect->prepare('INSERT INTO userstudents (sessionkey, profilepic, firstname, secondname, lastname, gender, email, code, phonenumber, password, terms, country, level, class, school, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subject8, subject9, subject10, subject11, subject12, subject13, subject14, subject15)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $uniqid = uniqid();


    $check = $_POST['check'];

    //creating phone number with code
    $myNo = $_POST['phonenumber'];
    $code = $_POST['code'];
    $phonenumber = $code . $myNo ;

    //creating a session key
    $email = $_POST['email'];
    $lname = $_POST['lastname'];
    $rand = $lname . $email;

    $sessionkey = md5($rand);

    //defining others ($others), i.e profile pic, country, level, class, school as no.

    $others = 'Not Yet Updated';

    
    $stmt->bind_param('ssssssssssssssssssssssssssssss', $sessionkey, $others, $_POST['firstname'], $_POST['secondname'], $_POST['lastname'], $_POST['gender'], $_POST['email'], $_POST['code'], $phonenumber, $password, $check, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others, $others);
    $stmt->execute();

echo "<script type='text/javascript'>
                         alert('Your Account has been created successfully. you can now login!');
                         location.replace('./../');
                         </script>";

} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement';
}
}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$dbconnect->close();


?>