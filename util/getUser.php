<?php
require_once ('../model/database.php');
if(empty($_POST['userName']) || empty($_POST['password'])){
	header("Location: failedLogin.php");
}
else{
	$username = $_POST['userName'];
	$password = $_POST['password'];
 }

$query = "SELECT * FROM user_login 
		  WHERE username = '$username'";

$results = $db->query($query);
$result = $results->fetch();

if($result['password'] == "" || $result['username']== ""){
	header("Location: failedLogin.php");
}

if($password == $result['password']){
	session_start();
	$_SESSION['user'] = $result['username'];
	$_SESSION['userId'] = $result['userID'];
	$_SESSION['type'] = $result['userType'];
	$_SESSION['valid_user'] = true;
		
	if($result['userType'] == "student"){
		header("Location: ../student/index.php");
	}
	if($result['userType'] == "teacher"){
		header("Location: ../teacher/index.php");
	}
	if($result['userType'] == "parent"){
		header("Location: ../parent/index.php");
	}
	if($result['userType'] == "admin"){
		header("Location: ../admin/index.php");
	}
}
else {
	header("Location: failedLogin.php");
}

?>
