<?php

//pages required
require('./../requires/database-Config.php');

	// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['code'], $_POST['phonenumber'], $_POST['password'])) {
	// Could not get the data that should have been sent.
	echo 'Please complete the registration form!';
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['gender']) || empty($_POST['code']) || empty($_POST['phonenumber'])) {
	// One or more values are empty.
	echo 'Please complete the registration form';
}
	

// We need to check if the account with that username exists.
if ($stmt = $dbconnect->prepare('SELECT id, password FROM students WHERE email = ?')) {
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
        if ($stmt = $dbconnect->prepare('INSERT INTO students (profilepic, firstname, secondname, lastname, gender, email, code, phonenumber, password, terms, country)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $uniqid = uniqid();


    $check = $_POST['check'];

    //creating phone number with code
    $myNo = $_POST['phonenumber'];
    $code = $_POST['code'];
    $phonenumber = $code . $myNo ;

    //defining others ($others), i.e profile pic, country, level, class, school as no.

    $others = 'Not Yet Updated';
    $amount = '0';
    $account = 'Free Account';
    $datedue = 'Open';
    $profile = 'user.png';

    if ($code = '+254') {
       
       $country = 'Kenya';
    } else if ($code = '+256') {
       
       $country = 'Uganda';
    }

    
    $stmt->bind_param('sssssssssss', $profile, $_POST['firstname'], $_POST['secondname'], $_POST['lastname'], $_POST['gender'], $_POST['email'], $_POST['code'], $phonenumber, $password, $_POST['check'], $country);
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