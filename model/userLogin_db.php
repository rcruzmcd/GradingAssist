<?php
function get_users() {
    global $db;
    $query = 'SELECT * FROM user_login
              ORDER BY userID';
    $result = $db->query($query);
    return $result;
}

function getUserInfo($userID){
	global $db;
	$query = "SELECT * FROM user_login
              WHERE userID = '$userID'";
	$result = $db->query($query);
    return $result;
}

function updatePassword($newPass, $userID){
	global $db;
	$query = "UPDATE user_login SET password = '$newPass' 
			WHERE userID = '$userID'";
	$db->exec($query);
}
?>