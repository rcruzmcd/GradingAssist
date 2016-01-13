<?php
require ('../model/database.php');
require ('../model/userLogin_db.php');

$oldPassword = $_POST['oldPassword'];
$currentPassword = $_POST['currentPassword'];
$newPassword = $_POST['newPassword'];
$userId = $_POST['userId'];

if($oldPassword == $currentPassword){
	updatePassword($newPassword, $userId);
	header("Location: successChangeP.php");
}
else{
	header("Location: failChangeP.php");
}

?>
