<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
	
	header('location: ./../');
}
require('./../requires/prof-me.php');
require('./../requires/database-Config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Library | Messages</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">

    <style type="text/css">

    	.footer-div {
    		margin-top: 10px;
    	}

    	.msgs {
    		margin-top: 10px;
    		margin-left: 20px;
    	}
    </style>

</head>
<body>

	<div><?php include('../includes/header-all.php'); ?></div>

	<div class="list-group msgs">

		<?php

		require('./../requires/database-Config.php');

		$query = "SELECT * FROM userstudents";

		$run = mysqli_query($dbconnect,$query);

		if (mysqli_num_rows($run) > 0) {
			
			while ($rows = mysqli_fetch_assoc($run)) {

			?>

	<form method="GET" action="message-reader.php">
		<li class="list-group-item">
			<button name="id" class="btn btn-primary" value="<?php echo $rows['id'] ?>">
			<?php echo $rows['firstname'];?>&nbsp;&nbsp;
			<?php echo $rows['lastname'];?>
			</button>
		</li>
	</form>

		<?php

		}
	}

		?>
	</div>

	<div class="footer-div"><?php include('../includes/footer-all.php'); ?></div>


</body>
</html>