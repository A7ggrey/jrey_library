<?php

require('./../requires/database-Config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Sign Up</title>

	<!-- css bootstrap external links-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">
    <script type="text/javascript">
    	function formval() {
    		var firstname = document.sign.firstname.value;
    		var lastname = document.sign.lastname.value;
    		var gender = document.sign.gender.value;
    		var email = document.sign.email.value;
    		var code = document.sign.code.value;
    		var phonenumber = document.sign.phonenumber.value;
    		var password = document.sign.password.value;
    		var password1 = document.sign.password1.value;
    		var check = document.sign.check.value;

    		if (firstname == "") {
    			alert('First Name is required');
    			return false;
    		} else if (lastname == "") {
    			alert('Last Name is required');
    			return false;
    		} else if (gender == "") {
    			alert('Choose your gender');
    			return false;
    		} else if (email == "") {
    			alert('Email address is required');
    			return false;
    		} else if (code == "-Select code-") {
    			alert('Select your country code');
    			return false;
    		} else if (phonenumber == "") {
    			alert('Enter phone Number');
    			return false;
    		} else if (password == "") {
    			alert('Password is required');
    			return false;
    		} else if (password.length < 7) {
    			alert('Password must be atleast 7 characters long');
    			return false;
    		} else if (password !== password1) {
    			alert('Your Password do not match');
    			return false;
    		} else if (check == "") {
    			alert('You need to agree with the Terms and conditions');
    			return false;
    		}
    	}
    </script>
    <style type="text/css">
    	.logo {
			width: 160px;
			height: 125px;
		    }

		    .margin-left {
		    	margin-left: 20px;
		    }

		    .input-others {
		    	width: ;
		    }
		    #e {
		    	width: 50%;
		    }
		    #pass {
		    	width: 50%;
		    }
		    #cod {
    			width: 145px;
    		}
    		#phone {
    			width: 598px;
    		}
    		#btn {
    			width: 50%;
    		}


@media (max-device-width: 480px) {

    		.btn-submit {
    			width: 97%;
    			margin: 0 auto;
    			height: 90px;
    			font-size: 40px;
    		}
    		.body {
    		}

    		#display-6 {
    			font-size: 100px;
    		}
    		#e {
    			font-size: 40px;
    			width: 97%;
    		}
    		#pass {
    			width: 97%;
    			font-size: 40px;
    		}
    		#cod {
    			font-size: 38px;
    			width: 250px;
    		}
    		#phone {
    			font-size: 38px;
    			width: 690px;
    		}
    		#g {
    			width: 40px;
    			height: 40px;
    		}
    		#btn {
    			width: 97%;
    			font-size: 45px;
    		}

    		.small {
    			height: ;
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

			.margin-left {
				margin-left: 15px;
				font-size: 35px;
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
</head>
<body><b>
	

	<div class="">
		<?php include('../includes/header-all.php');?>	
	</div>
     	<div class="" style="background-color: #aaaa55; opacity: 85%;">

		<h4 class="display-6" id="display-6" style="color: whitesmoke;">Sign Up</h4>

		<p class="margin-left">Fields marked with an asterisk <span style="color: red;">(*)</span> are required.</p>

		<form method="POST" action="sign-server.php" class="" name="sign" onsubmit="return formval()">

			
		<p class="margin-left"><label for="firstname">First Name <span style="color: red;">*</span></label>
			<input type="text" name="firstname" placeholder="Enter First Name" id="e" class="form-control">
		</p>

		<p class="margin-left"><label>Second Name <span style="color: red;">(Optional)</span></label>
			<input type="text" name="secondname" placeholder="Enter Second Name" id="e" class="form-control">
		</p>

		<p class="margin-left"><label>Last Name <span style="color: red;">*</span></label>
			<input type="text" name="lastname" placeholder="Enter Last Name" id="e" class="form-control">
		</p>

		<p class="margin-left"><label>Gender <span style="color: red;">*</span></label>
			<br>
			<input type="radio" name="gender" value="Male" id="g" class="form-check-input">&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" value="Female" id="g" class="form-check-input">&nbsp;&nbsp;Female
		</p>

		<p class="margin-left"><label>Email <span style="color: red;">*</span></label>
			<input type="text" name="email" placeholder="Enter Your Email" id="e" class="form-control">
		</p>

		<p class="margin-left"><label>Phone Number <span style="color: red;">*</span></label>
			<div class="btn-group margin-left">
				<select name="code" id="cod" class="form-control">
				<option>-Select code-</option>
				<option>+254</option>
				<option>+256</option>
			</select>

			<input type="text" name="phonenumber" placeholder="e.g 795882390" id="phone" class="form-control">
			</div>
		</p>

		<p class="margin-left"><label>Password <span style="color: red;">*</span></label>
			<input type="password" name="password" class="form-control" id="pass">
		</p>

		<p class="margin-left"><label>Confirm Password <span style="color: red;">*</span></label>
			<input type="password" name="password1" class="form-control" id="pass">
		</p>

		<p class="margin-left">
			<input type="checkbox" name="check" value="I agree to Jrey Library Terms and Conditions" class="form-check-input" checked="true" required>
			<span>I agree with <a href="./privacy-policy.php" class="alert-link text-decoration-none">Jrey library's Privacy Policy.</a></span>
		</p>

		<p class="margin-left"><input type="submit" name="submit" value="Sign Up" id="btn" class="btn btn-primary"></p>

		<p class="margin-left"><a href="../" class="alert-link text-decoration-none">I have an Account.</a></p>
	    </form>

	    <hr>
	    <?php include('../includes/footer-1.php');?>	
	</div>
	
</b>
</body>
</html>