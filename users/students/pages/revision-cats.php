<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {

	header('location: ./../');
}

	//pages required
require('./../requires/database-Config.php');

$my_id = $_SESSION['id'];

$query888 = "SELECT * FROM registered WHERE stdid = '$my_id'";
$result888 = mysqli_query($dbconnect, $query888);

if (mysqli_num_rows($result888) < 0) {
	
	echo "<script>
    alert('Please update your academics and subjects to proceed!');
    location.replace('update-academics.php');
        </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jrey Library - Revision CATs</title>

	<script type="text/javascript">
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width ="0";
	}
</script>

<style type="text/css">
		.sidenav {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #aaaa55;
			overflow-x: hidden;
			padding-top: 60px;
			transition: 0.8s;
		}

		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #111;
			font-weight: bold;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover {
			color: #f1f1f1;
		}

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		.spa:hover {
			cursor: pointer;
			background-color: ;
		}

		.spa {
			width: 5%;
		}

		.di {
			background-color: black;
			width: 50px;
			margin-left: 10px;
			height: 8px;
			margin-top: 7px;
		}

		#main {
			transition: margin-left .5s;
			padding: 20px;
		}


		@media screen and (max-height:  450px) {
			.sidenav {
				padding-top: 15px;
			}
			.sidenav a {
				font-size: 18px;
			}
		}

		@media (max-device-width: 450px) {
			td {
				font-size: 31px;
			}
			.th2 {
				color: whitesmoke;
				font-size: 34px;
			}

			#lnk {
				font-size: 30px;
			}

			#img {
				width: 50px;
				height: 50px;
			}
		}
	</style>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jrey-library.css">

	<!-- js bootstrap external links-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>

	<!--Favicon links-->
	<link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">

</head>
<body style="background-color: ;">
	<div><?php include('../includes/header-all.php'); ?></div>

	<div><?php require ('./a.php');?></div>
	
	<div id="main">

		<?php

		    $sess_id = $_SESSION['id'];

		    $query = "SELECT registered.*, class.*, level.* FROM registered INNER JOIN class ON registered.classid = class.cclass INNER JOIN level ON registered.levelid = level.id WHERE registered.stdid = '$sess_id'";

		    $result = mysqli_query($dbconnect, $query);

		    if (mysqli_num_rows($result) > 0) {
		    	while ($row = mysqli_fetch_assoc($result)) {
		    		
		    		?>
		
			<table class="table table-striped" style="margin-top: 10px;">
				<thead>
					<tr><th colspan="3">
					<center><h4 class="display-6">Download <?php echo $row['cclass'];?> Revision C.A.Ts Here.</h4></center></li></th></tr></thead>
					<tr class="bg-dark">
						<th class="th2">Subject</th>
						<th class="th2">Document name</th>
						<th class="th2">Action</th>
					</tr>

				<tbody>
				<?php
		    	}
		    } else {

		    	echo "<script>
    alert('Please update your academics and subjects to proceed!');
    location.replace('update-academics.php');
        </script>";
		    }

?>
		
		<?php

		//pages required
require('./../requires/database-Config.php');

            $sess = $_SESSION['id'];

            $query1 = "SELECT * FROM registered WHERE stdid = '$sess'";

            $run1 = mysqli_query($dbconnect, $query1);

            if (mysqli_num_rows($run1) > 0) {
            	while ($rows1 = mysqli_fetch_assoc($run1)) {
            		
            		$level = $rows1['levelid'];
                    $class  = $rows1['classid'];
                    $school  = $rows1['school'];
                    $subject1  = $rows1['sub1'];
                    $subject2  = $rows1['sub2'];
                    $subject3  = $rows1['sub3'];
                    $subject4  = $rows1['sub4'];
                    $subject5  = $rows1['sub5'];
                    $subject6  = $rows1['sub6'];
                    $subject7  = $rows1['sub7'];
                    $subject8  = $rows1['sub8'];
                    $subject9  = $rows1['sub9'];
                    $subject10  = $rows1['sub10'];
                    $subject11  = $rows1['sub11'];
                    $subject12  = $rows1['sub12'];
            	}
            }
		
		    $my_Level = mysqli_real_escape_string($dbconnect, $level);
		    $my_Class = mysqli_real_escape_string($dbconnect, $class);
		    $my_School = mysqli_real_escape_string($dbconnect, $school);
		    $subj1 = mysqli_real_escape_string($dbconnect, $subject1);
			$subj2 = mysqli_real_escape_string($dbconnect, $subject2);
			$subj3 = mysqli_real_escape_string($dbconnect, $subject3);
			$subj4 = mysqli_real_escape_string($dbconnect, $subject4);
			$subj5 = mysqli_real_escape_string($dbconnect, $subject5);
			$subj6 = mysqli_real_escape_string($dbconnect, $subject6);
			$subj7 = mysqli_real_escape_string($dbconnect, $subject7);
			$subj8 = mysqli_real_escape_string($dbconnect, $subject8);
			$subj9 = mysqli_real_escape_string($dbconnect, $subject9);
			$subj10 = mysqli_real_escape_string($dbconnect, $subject10);
			$subj11 = mysqli_real_escape_string($dbconnect, $subject11);
			$subj12 = mysqli_real_escape_string($dbconnect, $subject12);

		$query2 = "SELECT * FROM files WHERE 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj2' OR
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj1' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj3' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj4' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj5' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj6' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj7' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj8' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj9' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj10' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj11' OR 
		type = 'Revision C.A.T.S' AND level = '$my_Level' AND class = '$my_Class' AND subject = '$subj12' 
		ORDER BY subject ASC";
		$run2 = mysqli_query($dbconnect,$query2);

					if (mysqli_num_rows($run2) > 0) {

		while ($rows = mysqli_fetch_assoc($run2)) { ?>

			<tr>
				<td>
					<b><?php echo $rows['subject'] ?></b>
			    </td>

				<td>
					<?php echo $rows['title'] ?>
				</td>

			    <td>
			    	<a href="download-docs.php?docs=<?php echo $rows['docs'] ?>" id="lnk" class="btn btn-success"><img src="./../../../icons/file-earmark-pdf.svg" id="img">&nbsp;&nbsp;Download</a>
			    </td>
			</tr>

		<?php
	}

}

		?>

	</tbody></table>
	</div>

	<div style="margin-top: 20px;"><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>