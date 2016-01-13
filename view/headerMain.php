<?php
//require_once ('util/secure_conn.php');
date_default_timezone_set('America/New_York');
$time_zone = date_default_timezone_get();

$formatting = 'Y';
$current_date_object = new DateTime();
$current_date_f = $current_date_object -> format($formatting);
?>
<!DOCTYPE html >
<html >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Grading Assist</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<style type="text/css">
			@font-face {
				font-family: myFont;
				src: url("Fine Serif.ttf");
			}
		</style>
	</head>

	<body id="body">
		<div class="container">
			<div class="offset5">
				<img src="icon.jpg" width="150" height="150">
			</div>
			<div class="offset3">
				<h1 style="font-family:myFont; font-size:3.5em;">Grading Assist</h1>
			</div>
			<hr class="line" />