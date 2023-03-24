<?php


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | About Us</title>
	<link rel="shortcut icon" href="./../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="./../css/bootstrap.css">

	<style type="text/css">
		* {box-sizing: border-box;}

		.logo {
			width: 200px;
			height: 150px;
			margin-left: 10px;
			margin-top: 15px;
		}

		.tab {
			float: left;
			border: 1px solid #ccc;
			background-color: f1f1f1;
			width: 30%;
			border-bottom: none;
		}

		.tab button {
			display: block;
			background-color: inherit;
			color: black;
			padding: 22px 16px;
			width: 100%;
			border: none;
			outline: none;
			text-align: left;
			cursor: pointer;
			transition: 0.3s;
		}

		.tab button:hover {
			background-color: #ddd;
		}

		.tab button.active {
			background-color: #ccc;
		}

		.tabcontent {
			float: left;
			padding: 0px 12px;
			border: 1px solid #ccc;
			width: 70%;
			border-left: none;
			border-bottom: none;
			display: none;
		}
		.tablinks {
			font-weight: bolder;
		}
		#ta {
			height: 200px;
		} 

		@media (max-device-width: 480px) {
			.logo {
			width: 250px;
			height: 200px;
			margin-left: 10px;
			margin-top: 15px;
		    }
			#btn {
				font-size: 45px;
			}
			#display-6 {
				font-size: 60px;
			}
			#em {
				font-size: 36px;
				height: 70px;
			}
			#ta {
				height: 450px;
				font-size: 36px;
			}
			.tab button.active {
			background-color: #ccc;
			font-size: 30px;
		    }
		    .tab button:hover {
			background-color: #ddd;
			font-size: 30px;
			color: darkblue;
		    }
			.icon {
				width: 40px;
				height: 40px;
			}
			.tab {
				border-bottom: none;
			}
			.tabcontent {
				border-bottom: none;
			}
			.tablinks {
				font-size: 30px;
			}
			p {
				font-size: 25px;
			}
			h5 {
				font-size: 35px;
			}
			h6 {
				font-size: 29px;
			}
		}

	</style>

	<script type="text/javascript">
		
		function openCity(evt, cityName) {

			//variable declaration 

			var i, tabcontent, tablinks;

			tabcontent = document.getElementsByClassName("tabcontent");

			for (i = 0; i < tabcontent.length; i++) {
				
				tabcontent[i].style.display = "none";

			}

			tablinks = document.getElementsByClassName("tablinks")

			for(i = 0; i < tablinks.length; i++) {
				tablinks[i].className.replace("active", "");
			}


			document.getElementById(cityName).style.display = "block";

			evt.currentTarget.className += "active";
		}

		document.getElementById("defaultOpen").click();


	</script>
</head>
<body>

	<div class="tab">
		<img src="./../imgs/photo.jpg" class="logo">
		<hr style="background-color: hotpink; height: 3px;" class="container">
		<button class="tablinks" onclick="openCity(event, 'Paris')" id="defaultOpen">About Jrey Library</button>
		<button class="tablinks" onclick="openCity(event, 'Nairobi')">Contact Us</button>
		<button class="tablinks" onclick="openCity(event, 'Kampala')">The developers</button>
	</div>

	<div id="Paris" class="tabcontent" style="background-color: beige;">
		<hr style="margin-top: 4px; background-color: hotpink; height: 7px;" class="container">
		<h3 class="display-6" id="display-6">About Jrey Library</h3>
		<p>
			Jrey Library is a site for students to interact academically. The site was created in 2022 and is meant to help students all over Kenya access revision materials of different range at different subscriptions, ranging from free services to paid services.
		</p>

		<p>
			Through our Platform, The student Creates their account and log in to access the services they want from our site. The student will then have to update their academic level to their current level of study (Primary School, Secondary School) and class they are in. They will then select the subjects that they take and thus their academic profile will be updated. The site will give them all the materials available for the selected level, class and all the subjects taken by the student.  We currently have past papers for Primary and Secondary Schools and we are looking forward to expand to tertiary level. We provide services needed for the students, with the help of several tutors, to give the students a wider view of knowledge, ranging from technological knowledge to tackling real life problems.
		</p>

		<p>
			<h5>Free subscription</h5>
			<p>
				We are currently offering free subscription and students will be able to access revision past papers and summary notes from different subjects that they take. After registering of an account, they simply log in and can download the sets of papers they need from their selected level, class and subjects. This gives them easy access to materials and they can also access it from anywhere they are.
			</p>
			<p>
				For any suggestions, queries or anything you want to put across, reach us by filling in the form below and we will get back to you via the submitted email address.
			</p>
		</p>

		<p>
			<script type="text/javascript">
				function formval() {
					var email = document.form.email.value;
					var bio = document.form.bio.value;

					if (email == "") {
						alert('Enter your Email address');
						return false;
					} else if (bio == "") {
						alert('Write something about your experience with Jrey Library');
						return false;
					}
				}
			</script>
			<h5 id="reach">Reach us today</h5>
			<h6>Fill in the form with the required fields</h6>
			<form action="server-comments.php" name="form" method="POST" onsubmit="return formval()">
				<p>Email:</p>
				<p>
					<input type="text" name="email" placeholder="Enter your Email Address" id="em" class="form-control">
				</p>

				<p>Write something in the below field:</p>
				<p>
					<textarea name="bio" placeholder="Words not more than 4000 ..." id="ta" class="form-control"></textarea>
				</p>

				<p>
					<input type="submit" name="" class="btn btn-success form-control" id="btn" value="Submit">
				</p>
			</form>

			<p>
				<p>
					You can also reach us via the below social media accounts and we will not hesitate getting back to you.
				</p>
				<h5>
					Follow Us: &nbsp;&nbsp;&nbsp;
				<a href="#"><img src="./../icons/facebook.svg" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"><img src="./../icons/twitter.svg" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"><img src="./../icons/instagram.svg" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"><img src="./../icons/youtube.svg" class="icon"></a>
			    </h5>
			</p>

		</p>
	</div>

	<div id="Nairobi" class="tabcontent" style="background-color: beige;">
		<hr style="margin-top: 4px; background-color: hotpink; height: 7px;" class="container">
		<h3 class="display-6">Contact Us</h3>
		<p>
			<h6>You can reach Jrey Library via the following media</h6>

			<p>Call: <a href="tel:+254-7409-46326" class="alert-link" style="text-decoration: none;">+254 7409 46326</a></p>
			<p>Call: <a href="tel:+254-7958-82390" class="alert-link" style="text-decoration: none;">+254 7958 82390</a></p>

			<p>Email: <a href="mailto:library@jrey.co.ke" class="alert-link" style="text-decoration: none;">library@jrey.co.ke</a></p>
			<p>Email: <a href="mailto:librarycare@jrey.co.ke" class="alert-link" style="text-decoration: none;">librarycare@jrey.co.ke</a></p>

			<p>
			<h5>You can also reach us via the form below</h5>

			<script type="text/javascript">
				function myform() {
					var firstname = document.form2.firstname.value;
					var lastname = document.form2.lastname.value;
					var email = document.form2.email.value;
					var bio = document.form2.bio.value;

					if (firstname == "") {
						alert('Enter your First Name');
						return false;
					} else if (lastname == "") {
						alert('Enter your Last Name');
						return false;
					} else if (email == "") {
						alert('Enter your Email address');
						return false;
					} else if (bio == "") {
						alert('Write something');
						return false;
					}
				}
			</script>
			
			<form method="POST" action="server-contact.php" name="form2" onsubmit="return myform()">
				<p>First Name:</p>
				<p>
					<input type="text" name="firstname" placeholder="Enter your First Name" id="em" class="form-control">
				</p>

				<p>Last Name</p>
				<p>
					<input type="text" name="lastname" placeholder="Enter your Last Name" id="em" class="form-control">
				</p>

				<p>Email:</p>
				<p>
					<input type="text" name="email" placeholder="Enter your Email Address" id="em" class="form-control">
				</p>

				<p>Write something in the below field:</p>
				<p>
					<textarea name="bio" placeholder="Write to us ..." id="ta" class="form-control"></textarea>
				</p>

				<p>
					<input type="submit" name="" class="btn btn-success form-control" id="btn" value="Submit">
				</p>
			</form>

			<p>
				<h5>
					Follow Us: &nbsp;&nbsp;&nbsp;
				<a href="#"><img src="./../icons/facebook.svg" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"><img src="./../icons/twitter.svg" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"><img src="./../icons/instagram.svg" class="icon"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"><img src="./../icons/youtube.svg" class="icon"></a>
			    </h5>

			</p>
		    </p>

		</p>
	</div>

	<div id="Kampala" class="tabcontent" style="background-color: beige;">
		<h3>About the developers</h3>
		<p>Developed and maintained by Team <a href="#" class="alert-link" style="text-decoration: none;">Jrey Technologies</a>.</p>
		<p>Email: <a href="mailto:tech@jrey.co.ke" class="alert-link" style="text-decoration: none;">tech@jrey.co.ke</a>
	</div>

	<div id="Arusha" class="tabcontent" style="background-color: beige;">
		<h3>Our Subscriptions</h3>
		<p>Kisumu City</p>
		<p>Maseno Town</p>
	</div>

</body>
</html>
