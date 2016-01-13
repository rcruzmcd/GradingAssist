<?php	
	session_start();
	$_SESSION['user'] = "";
	$_SESSION['userId'] = "";
	$_SESSION['type'] = "";
	$_SESSION['valid_user'] = false;
	header("Location: ../index.php");
?>