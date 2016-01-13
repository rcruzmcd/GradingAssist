<?php
require ('../model/database.php');
require ('../model/students_db.php');

if ($_POST['action'] == "delete_student") {
	$studentID = $_POST['student_id'];
	delete_student($studentID);
} 
else {
	$studentID = $_POST['ID'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$parentID = $_POST['parentID'];
	$userName = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($studentID) || !empty($firstName) || !empty($lastName) || !empty($userName) || !empty($password) || !empty($parentID)){
	add_student($studentID, $firstName, $lastName, $parentID, $userName, $password);
	}
}
header("Location: mstudent.php");
?>