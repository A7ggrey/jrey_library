<?php 

session_start();

if (!isset($_SESSION['currentStudent'])) {
	
echo "<script>
alert('You Must log in first to subscription');
location.replace('./../');
	</script>";
}

require('./b.php');

//pages required
require('./../requires/database-Config.php');

echo '<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">
    <style>
    .logo {
	width: 160px; 
	height: 125px;
}
    #fc {
    	width: 80%;
    	margin-left :20px;
    }
    #btn {
    width: 80%;
    margin-left: 20px;
}
    .margin-left {
    	margin-left: 20px;
    }
    </style>';

include('../includes/header-all.php');

echo "<form method='GET' action='subscriptions.php'>";


$account = $_GET['id'];

$my_Account = mysqli_real_escape_string($dbconnect,$account);

$sql = "SELECT * FROM subscription WHERE id = '$my_Account'";

$run = mysqli_query($dbconnect,$sql);

if (mysqli_num_rows($run) > 0) {
	
	while ($rows = mysqli_fetch_assoc($run)) {

		$prod = $rows['period'];

		if ($prod == '1 Year') {
	
	            $end = date('d/m/Y', strtotime('+1 years +1 days'));

            } else if ($prod == '1 Month') {
            	
            	$end = date('d/m/Y', strtotime('+1 month +1 days'));
            } else {
            	$end = 'Error!';
            }

		?>
			<p class="margin-left">Account Name:</p>
			
			<p>
				<input type="text" name="" value="<?php echo $rows['accname'] ?>" readonly class="form-control" id="fc">
			</p>

			<p class="margin-left">Period of subscription:</p>
			
			<p>
				<input type="text" name="" value="<?php echo $prod; ?>" readonly class="form-control" id="fc">
			</p>

			<p class="margin-left">Date of subscription expiry:</p>

			<p>
				<input type="text" name="" value="<?php echo $end; ?>" readonly class="form-control" id="fc">
			</p>

			<p class="margin-left">Subscription fee:<b>(KSHs.)</b></p>
			
			<p>
				<input type="text" name="" value="<?php echo $rows['subscription'] ?>" readonly class="form-control" id="fc">
			</p>

			<?php
	}
}


?>

<?php

$currentUser = $_SESSION['id'];

$user = mysqli_real_escape_string($dbconnect,$currentUser);

$sql = "SELECT phonenumber FROM userstudents WHERE id = '$user'";

$run = mysqli_query($dbconnect,$sql);

if (mysqli_num_rows($run) > 0) {
	while ($rows = mysqli_fetch_assoc($run)) {
		
		?>

		<p class="margin-left">Phone Number:</p>
			
			<p>
				<input type="text" name="" value="<?php echo $rows['phonenumber'] ?>" class="form-control" id="fc" readonly>
			</p>

			<input type="submit" name="" value="Subscribe to service" class="btn btn-success" id="btn">
		</form>
		
		<div><?php include('../includes/footer-all.php'); ?></div>

		<?php
	}
}

?>