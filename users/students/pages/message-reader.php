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

	<div class="msgs">

		<?php

		require('./../requires/database-Config.php');

		$id = $_SESSION['id'];

		$id2 = $_GET['id'];

		$my_id = mysqli_real_escape_string($dbconnect,$id);
		$sec_id = mysqli_real_escape_string($dbconnect,$id2);

		$query = "SELECT messages.sid, messages.rid, messages.msg, messages.time, userstudents.id, userstudents.firstname, userstudents.lastname FROM messages INNER JOIN userstudents 
		WHERE messages.sid = userstudents.id AND messages.sid = '$sec_id'
		 OR messages.rid = userstudents.id AND messages.sid = '$my_id'";

		$run = mysqli_query($dbconnect,$query);

		if (mysqli_num_rows($run) > 0) {
			
			while ($rows = mysqli_fetch_assoc($run)) {

				$timer = $rows['time'];

				$display_t = substr($timer, 10);
				$display_d = substr($timer, 0, 10);

			echo "<center>
			<p><b>";
			$rows['firstname'];"&nbsp;".$rows['lastname'];
			
       		echo "</b></p>
	    </center>";

			?>

		<div style="background-color: lightblue;">
			<p><b></b></p>
			<p><?php echo $rows['msg'];?></p>
			<p><?php
			$query2 = "SELECT userstudents.id, userstudents.firstname, userstudents.lastname, messages.rid 
			FROM userstudents INNER JOIN messages WHERE userstudents.id = messages.rid";

			$run2 = mysqli_query($dbconnect,$query);
			if (mysqli_num_rows($run2) > 0) {
				while($rows2 = mysqli_fetch_assoc($run2)) {
					?>

					<p><?php echo $rows2['rid'] ?>&nbsp;<?php echo $rows2['lastname'] ?></p>
					<?php
				}
			}
			 ?>
		</div>

		<?php

		}
	}

		?>
	</div>

	<div class="msgs">
		<form method="GET" action="reader.php">
			<input type="text" name="idk" value="<?php echo $sec_id; ?>" style="opacity: 0%;">
			<p>
				<input type="text" name="msg" placeholder="Write your message..." id="">
			</p>

			<p>
				<input type="submit" name="" value="Send" class="btn btn-success">
			</p>			
		</form>
	</div>

	<div class="footer-div"><?php include('../includes/footer-all.php'); ?></div>


</body>
</html>