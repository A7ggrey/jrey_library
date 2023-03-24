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

		<h4 class="display-6" id="display-6" style="color: whitesmoke;">Register Instructors</h4>

		<p class="margin-left">Fields marked with an asterisk <span style="color: red;">(*)</span> are required.</p>

		<form method="POST" action="sign-server.php" class="" name="sign" onsubmit="return formval()">

			
		<div class="form-floating mb-3" style="margin-left: 20px;">
			<input type="text" name="firstname" placeholder="Enter First Name" id="floatingInput" class="form-control" style="width: 75%;">
			<label for="floatingInput">First Name<span style="color: red;">*</span></label>
		</div>

		<div class="form-floating mb-3" style="margin-left: 20px;">
			<input type="text" name="secondname" placeholder="Enter First Name" id="floatingSn" class="form-control" style="width: 75%;">
			<label for="floatingSn">Second Name</label>
		</div>

		<div class="form-floating mb-3" style="margin-left: 20px;">
			<input type="text" name="lastname" placeholder="Enter Last Name" id="floatingLn" class="form-control" style="width: 75%;">
			<label for="floatingln">Last Name<span style="color: red;">*</span></label>
		</div>

		<p class="margin-left"><label>Gender <span style="color: red;">*</span></label>
			<br>
			<input type="radio" name="gender" value="Male" id="g" class="form-check-input">&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" value="Female" id="g" class="form-check-input">&nbsp;&nbsp;Female
		</p>

		<div class="form-floating mb-3" style="margin-left: 20px;">
			<input type="text" name="email" placeholder="Enter First Name" id="floatingEa" class="form-control" style="width: 75%;">
			<label for="floatingEa">Email Address<span style="color: red;">*</span></label>
		</div>

		<div class="btn-group" style="width: 100%;">
			<div class="form-floating mb-3" style="margin-left: 20px;">
			<select class="form-select" name="code" id="floatingSelectGrid" aria-label="Floating label select example" style="width: 120%;">
				<option>-Select code-</option>
				<option>+254</option>
				<option>+256</option>
			</select>
			<label for="floatingSelectGrid">Country Code</label>
		</div>
		<div class="form-floating mb-3">
			<input type="text" name="phonenumber" placeholder="Enter Phone Number" id="floatingPn" class="form-control" style="width: 412%;">
			<label for="floatingPn">Phone Number<span style="color: red;">*</span></label>
		</div>
	</div>

		<div class="form-floating mb-3" style="margin-left: 20px;">
			<input type="text" name="idnumber" placeholder="Enter ID Number" id="floatingIdn" class="form-control" style="width: 75%;">
			<label for="floatingIdn">ID Number<span style="color: red;">*</span></label>
		</div>

		<p class="margin-left">
			<input type="submit" name="submit" value="Register Instructors" style="width: 75%;" class="btn btn-primary">
		</p>

	</form>

	    <hr>
	    <?php include('../includes/footer-1.php');?>	
	</div>
	
</b>
</body>
</html>