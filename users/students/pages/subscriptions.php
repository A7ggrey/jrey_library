<?php
session_start();

//pages required
require('./../requires/database-Config.php');

require('./b.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library | Student Subscription</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">

    <style type="text/css">

    	.bs {
    		color: red;
    		font-style: italic;
    	}
    	.di {
			background-color: black;
			width: 50px;
			margin-left: 10px;
			height: 8px;
			margin-top: 7px;
		}
		.ddiv {
			margin-top: 20px;
		}

		#main {
			transition: margin-left .5s;
			padding: 20px;
		}

		.img {
			width: 600px;
			height: 375px;
		}
		.main-container {
			margin-left: 20px;
			width: 90%;
		}
		#btn {
			width: 100%;
		}


		@media screen and (max-height:  450px) {
			.sidenav {
				padding-top: 15px;
			}
			.sidenav a {
				font-size: 18px;
			}
		}

		@media (max-device-width: 480px) {
			#tdtd {
				overflow: hidden;
				white-space: nowrap;
				width:100%;
				text-overflow: inherit;
			}
			.btn-group {
				width: 65%;
			}

			.btn-success {
				font-size: 35px;
			}
			.di {
				background-color: black;
			    width: 70px;
			    margin-left: 10px;
			    height: 12px;
			    margin-top: 12px;
			}

			.div-display {
				font-size: 30px;
			}

			.icon {
				width: 40px;
				height: 40px;
			}

			.special-icon {
				width: 60px;
				height: 60px;
			}

			.search {
				font-weight: bold;
				font-size: 35px;
				width: 65%;
			}

			.list-group-item {
				font-size: 35px;
			}

			.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 45px;
			color: #111;
			font-weight: bold;
			display: block;
			transition: 0.3s;
		}
		    .th {
		    	font-size: 35px;
		    }

		    .td {
		    	font-size: 19px;
		    	color: blue;
		    	font-weight: bold;
		    }

		    .img {
			width: 80%;
			height: 500px;
		}

		}
    </style>
</head>
<body>

	<div><?php include('../includes/header-all.php'); ?></div>

	<div class="main-container">

	<ol type="1">

		<div class="ddiv">

<strong>
	<li>
	    FREE ACCOUNT
    </li>
</strong>

Free Account is Jrey Library’s first-level account. Students all over Kenya who register with us are automatically subscribed to the free account. They will not pay anything and will access the below mentioned services;

<ol type="a"> 
<li>Free Revision C.A.Ts</li>
<li>Free Summary Notes</li>
<p><b>Note:</b> The above mentioned Services are the only services offered by the free account.</p>
</ol>
</div>

<hr style="background-color: blue;">

<div>

<strong>
	<li>
		SILVER ACCOUNT (<b class="bs">ksh.800 Monthly</b>)  OR   (<b class="bs">ksh.6699 Yearly</b>)
	</li>
</strong>

Golden Account is Jrey Library’s mid-level account. Students all over Kenya can subscribe with the above amount to access services offered in this level. These Services include those offered by the free account and others that can be accessed by Golden Account and a higher account. These Services are listed below;

<ol type="a">
<li>Free Revision C.A.Ts</li>
<li>Free Summary Notes</li>
<li>Complete Revision Papers</li>
<li>Discussion Forums</li>
<li>Exams</li>
<li>KCSE & KCPE Past Papers</li>
<li>Notes For all Subjects</li>
</ol>
Click the buttons below to subscribe to our GOLDEN ACCOUNT.

<form method="GET" action="subscriptions-submit.php">
	<div class="btn-group" style="width: 100%;">
		<button type="submit" class="btn btn-success" id="btn" name="id" value="5">Silver Account 1 Month subscription</button>
		<button type="submit" class="btn btn-success" id="btn" name="id" value="6">Silver Account 1 Year subscription</button>
	</div>

</form>

</div>

<hr style="background-color: blue;">

<div>

<strong>
	<li>
		GOLDEN ACCOUNT (<b class="bs">ksh.800 Monthly</b>)  OR   (<b class="bs">ksh.6699 Yearly</b>)
	</li>
</strong>

Golden Account is Jrey Library’s mid-level account. Students all over Kenya can subscribe with the above amount to access services offered in this level. These Services include those offered by the free account and others that can be accessed by Golden Account and a higher account. These Services are listed below;

<ol type="a">
<li>Free Revision C.A.Ts</li>
<li>Free Summary Notes</li>
<li>Complete Revision Papers</li>
<li>Discussion Forums</li>
<li>Exams</li>
<li>KCSE & KCPE Past Papers</li>
<li>Notes For all Subjects</li>
<li>3 Virtual classes a day (<span class="bs">Holiday classes Only</span>)</li>
</ol>
Click the buttons below to subscribe to our GOLDEN ACCOUNT.

<form method="GET" action="subscriptions-submit.php">
	<div class="btn-group" style="width: 100%;">
		<button type="submit" class="btn btn-success" id="btn" name="id" value="1">Golden Account 1 Month subscription</button>
		<button type="submit" class="btn btn-success" id="btn" name="id" value="2">Golden Account 1 Year subscription</button>
	</div>

</form>

</div>

<hr style="background-color: blue;">

<div>

<strong>
	<li>
		PLATINUM ACCOUNT  (<b class="bs">ksh.3150 Monthly</b>)  OR  (<b class="bs">ksh.22,050</b>)
	</li>
</strong>

Platinum Account is Jrey Library’s high-level account. Students all over Kenya can subscribe with the above amount to access services offered in this level. These Services include those offered by the free account, golden account and others that are accessed by the platinum account only. These Services offered by the platinum account are listed below;

<ol type="a">
<li>Free Revision C.A.Ts</li>
<li>Free Summary Notes</li>
<li>Complete Revision Papers</li>
<li>Discussion Forums</li>
<li>Exams</li>
<li>KCSE & KCPE Past Papers</li>
<li>Notes For all Subjects</li>
<li>3 Virtual classes a day (<span class="bs">Throughtout the year except on holidays</span>)</li>
<li>Regional Mocks</li>
<li>Examiner guides</li>
<li>Academic Competitions</li>
</ol>
Click the buttons below to subscribe to our GOLDEN ACCOUNT.

<form method="GET" action="subscriptions-submit.php">
	<div class="btn-group" style="width: 100%;">
		<button type="submit" class="btn btn-success" id="btn" name="id" value="3">Platinum Account 1 Monthly subscription</button>
		<button type="submit" class="btn btn-success" id="btn" name="id" value="4">Platinum Account 1 Year subscription</button>
	</div>

</form>

</div>

</ol>

<div>
	<p>
		By subscribing to any of our above listed services, your have read and agreed to our <a href="privacy-policy.php#subscription">Subscription's Privacy Policy (Number 4).</a>
	</p>
</div>

<div>
For more information or clarification about our services, contact us today:
<b>
	<p>Call:  <a href="tel:+2547 95882390">+2547 95882390</a></p>
	<p>Call:   <a href="tel:+2547 40946326">+2547 40946326</a></p>
	<p>Email:  <a href="mailto:customercare@library.jrey.co.ke">customercare@library.jrey.co.ke</a></p>
</b>

</div>

</div>

<div><?php include('../includes/footer-all.php'); ?></div>


</body>
</html>