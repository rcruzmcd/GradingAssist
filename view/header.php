<?php
session_start();
$user = $_SESSION['userId'];
require_once('../util/validUser.php');
//require_once('../util/secure_conn.php');
require_once('../model/database.php');
require_once('../model/parents_db.php');
require_once('../model/students_db.php');
require_once('../model/teachers_db.php');

date_default_timezone_set('America/New_York');
$time_zone = date_default_timezone_get();

$formatting = 'M d, Y';
$current_date_object = new DateTime();
$current_date_f = $current_date_object -> format($formatting);

if($_SESSION['type'] == "student"){
		$userName = get_student_name($user);
	}
else if($_SESSION['type'] == "teacher"){
		$userName = get_teacher_name($user);
	}
else if($_SESSION['type'] == "parent"){
		$userName = get_parent_name($user);
	}
else if($_SESSION['type'] == "admin"){
		$userName = "admin";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Grading Assist</title>
		<link rel="stylesheet" href="../style.css" type="text/css" />
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
	</head>

	<body id="body">
		<div class="container">
			<br/>
			<header class="offset7">
				<img src="../icon.jpg" width="50" height="50"/>
				<span class="bannerTitle">Grading Assist</span>
			</header>
			
			<blockquote class="offset8 small">
				<p>Welcome, <i><?php echo $userName; ?></i>
				<br /> <?php echo $current_date_f ?> </p>
			</blockquote>
			<hr class="line" />
			