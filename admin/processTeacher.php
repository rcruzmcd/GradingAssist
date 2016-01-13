<?php
require ('../model/database.php');
require ('../model/teachers_db.php');

if ($_POST['action'] == "delete_teacher") {
	$teacherID = $_POST['teacher_id'];
	delete_teacher($teacherID);
} 
else {
	$teacherID = $_POST['ID'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$userName = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($teacherID) || !empty($firstName) || !empty($lastName) || !empty($userName) || !empty($password)){
	add_teacher($teacherID, $firstName, $lastName, $userName, $password);
	}
}
header("Location: mteacher.php");
?>