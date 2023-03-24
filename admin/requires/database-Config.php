<?php

$database_host = 'localhost';
$database_user = 'jreylibr_aggrey';
$database_password = 'thisismysecondwebsite';
$database_name = 'jreylibr_jls';

//database connection

//db-host, db-user, db-pass, db-name

$dbconnect = mysqli_connect($database_host, $database_user, $database_password, $database_name);

if (mysqli_connect_error()) {
	exit("Failed to connect to MSQL" . mysqli_connect_error());
}