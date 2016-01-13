<?php
require ('../model/database.php');
require ('../model/parents_db.php');

if ($_POST['action'] == "delete_parent") {
	$parentID = $_POST['parent_id'];
	delete_parent($parentID);
} 
else {
	$parentID = $_POST['ID'];
	$studentID = $_POST['studentID'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$userName = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($studentID) || !empty($firstName) || !empty($lastName) || !empty($userName) || !empty($password) || !empty($parentID)){
	add_parent($parentID, $studentID, $firstName, $lastName, $userName, $password);
	}
}
header("Location: mparents.php");
?>