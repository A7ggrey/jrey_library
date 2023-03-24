<??>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Library | Forgot Password</title>
	<style type="text/css">
		#e {
			width: 80%;
			margin-left: 20px;
		}
		#p {
			margin-left: 20px;
		}
		#pp {
			margin-left: 20px;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div><?php include('./../includes/header-all.php');?></div>

	<div>
		<center><h4 id="pp">Forgot my password.</h4></center>
		<p id="p">Enter your email address:</p>
	<form>
		<p><input type="email" name="email" placeholder="Enter your Email" id="e" class="form-control"></p>
		<p><input type="submit" class="btn btn-success" id="e" value="Send me an email" name=""></p>
	</form>
	</div>
	<br>

	<div><?php include('./../includes/footer-all.php');?></div>
</body>
</html>