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

		$my_id = mysqli_real_escape_string($dbconnect, $id);

		$query = "SELECT messages.sid, messages.cid, messages.msg1, messages.msg2, messages.time, userstudents.id, userstudents.firstname, userstudents.lastname FROM messages INNER JOIN userstudents WHERE messages.sid = userstudents.id AND messages.cid = '$my_id'";

		$run = mysqli_query($dbconnect,$query);

		if (mysqli_num_rows($run) > 0) {
			
			while ($rows = mysqli_fetch_assoc($run)) {

				$timer = $rows['time'];

				$display_t = substr($timer, 10);
				$display_d = substr($timer, 0, 10);

			?>

		<li class="list-group-item">
			<a href="reader.php">
			<?php echo $rows['firstname'];?>&nbsp;&nbsp;
			<?php echo $rows['lastname'];?>
			</a>
		</li>

		<div style="margin-left: 800px; width: 45%; background-color: lightblue;">
			<p><b><?=$firstname?>&nbsp;&nbsp;<?=$lastname?></b></p>
			<p><?php echo $rows['msg1'];?></p>
			<p style="float: left; margin-right: 3px;"><b>Sent on: <?php echo $display_d;?></b></p>
			<p style="float: right; margin-right: 3px;"><b>Sent at: <?php echo $display_t;?></b></p>
		</div>
		<div style="float: left; width: 45%; background-color: lightgreen;">
			<p><b><?php echo $rows['firstname'];?>&nbsp;&nbsp;<?php echo $rows['lastname'];?></b></p>
			<?php echo $rows['msg2'];?>
			<p><b></b></p>
		</div>

		<?php

		}
	}

		?>
	</div>

	<div class="footer-div"><?php include('../includes/footer-all.php'); ?></div>


</body>
</html>