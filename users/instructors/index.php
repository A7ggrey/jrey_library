<?php
session_start();

//pages required
require('./requires/database-Config.php');

//variables declaration
//$username = $email OR $phonenumber

$msg = '';

//use $dbconnect for datase connection

if (!isset($_POST['email'], $_POST['password'])) {
	
	$msg = 'Please Fill in the form';
}

if (empty($_POST['email']) || empty($_POST['password'])) {
	
	$msg = '';
} else {

	if ($stmt = $dbconnect->prepare('SELECT id, email, sessionkey, phonenumber, password FROM userstudents WHERE email = ?')) {
		$stmt->bind_param('s', $_POST['email']);
		$stmt->execute();

		$stmt->store_result();

		if ($stmt->num_rows > 0) {
			$stmt->bind_result($id, $email, $sessionkey, $phonenumber, $password);
			$stmt->fetch();

			//Password Verification

			if (password_verify($_POST['password'], $password)) {
				
				//create a session for the logged in user

				session_regenerate_id();
				$_SESSION['currentStudent'] = TRUE;
				$_SESSION['name'] = $sessionkey;
				$_SESSION['id'] = $id;

				header('location: ./pages/dashboard.php');
			} else {

				//incorrect password

				echo "<script>

				alert('Username or Password is incorrect. Pleasr try again.');
				location.replace('./');
				</script>";

			}
		} else {
			//incorrect username

			echo "<script>

				alert('Username does not exist. Try again.');
				location.replace('./');
				</script>";
		}

		$stmt->close();
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey library | login</title>

	<!-- css bootstrap external links-->
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/jrey-library.cs">
	<link rel="stylesheet" type="text/css" href="./css/library-jrey.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="./js/bootstrap.js"></script>
	<script type="text/javascript" src="./js/library-jrey.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../favicon.ico" type="image/x-icon">

    <style type="text/css">

    	    .logo {
			width: 160px;
			height: 125px;
		    }

		    .margin-left {
		    	margin-left: 20px;
		    }

		    .input-others {
		    	width: 60%;
		    }


@media (max-device-width: 480px) {

    		.btn-submit {
    			width: 97%;
    			margin: 0 auto;
    			height: 90px;
    			font-size: 40px;
    		}
    		.body {
    			background-image: url('./../../imgs/myBackground1.jp');
    			background-attachment: fixed;
    			background-size: cover;"
    		}

    		.display-6 {
    			font-size: 100px;
    		}

    		.small {
    			height: ;
    		}

    		.form-control {
    			height: 90px;
    			width: 100%;
    			font-size: 35px;
    			font-weight: bolder;
    		}

    		.label-me {
    			font-size: 30px;
    		}

    		.link-me {
    			font-size: 35px;
    			color: whitesmoke;
    		}

    		.msg {
    			font-size: 30px;
    		}

    		.alert-link {
				font-size: 35px;
			}

			.spn {
				font-size: 27px;
			}

			.icon {
				width: 40px;
				height: 40px;
				margin-left: 60px;
			}

			.input-others {
				width: 97%;
			}

			.margin-left {
				margin-left: 15px;
			}

			.logo {
			width: 280px;
			height: 195px;
			margin-top: 5px;
		}

		.display-4 {
			font-size: 100px;
		}

		.p {
			font-size: 27px;
		}

		.p-btn {
			margin: 0 auto;
		}
    	}
    	
    </style>

    <script type="text/javascript">
    	function formval() {
    		var email = document.log.email.value;
    		var password = document.log.password.value;

    		if (email == "") {
    			alert('Username is required to proceed');
    			return false;
    		} else if (password == "") {
    			alert('Password is required to proceed');
    			return false;
    		}
    		}


        function passwordS() {
    var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";

        } else {
            x.type = "password";
        }
    }

    </script>

</head>
<body class="body"><b>

	<div class="" style="background-color: white; opacity: 85%">
		<?php include('./includes/header-1.php');?></div>
	<div class="small" style="background-color: #aaaa55; opacity: 85%;">

		<h4 class="display-6" style="color: whitesmoke;">Login</h4>

		<form method="POST" action="" class="" id="form" style="" name="log" onsubmit="return formval()">
		
		<p class="margin-left">
			<img src="./../../icons/person-fill.svg" class="icon">
			<label class="label-me">Username</label>
			<input type="text" name="email" placeholder="Enter your Email" class="form-control input-others" id="email">
		</p>

		<p class="margin-left">
			<img src="./../../icons/lock-fill.svg" class="icon">
			<label class="label-me">Password</label>
			<input type="password" name="password" placeholder="Enter your Password" class="form-control input-others" id="password">
		</p>

		<p class="margin-left"><input type="checkbox" name="" onclick="passwordS()" class="form-check-input">&nbsp; 
            <label class="form-label">Show Password</label></p>
		
		<p class="margin-left"><input type="submit" name="" id="submit" value="Login" class="btn btn-primary btn-submit input-others"></p>

		<p class="margin-left">
			<a href="#" class="alert-link text-decoration-none link-me">Forgot Password?</a>
		</p>

		<p class="margin-left">
			<a href="./pages/register-Account.php" class="alert-link text-decoration-none link-me">Register Account.</a>
		</p>

		</form>
		<hr>
	<?php include('./includes/footer-01.php');?>
</div>
</b>
</body>
</html>