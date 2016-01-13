<?php
function get_teachers() {
    global $db;
    $query = 'SELECT * FROM teachers
              ORDER BY teacher_id';
    $result = $db->query($query);
    return $result;
}

function get_teacher_name($teacher_id) {
    global $db;
    $query = "SELECT * FROM teachers
              WHERE teacher_id = $teacher_id";
    $teacher = $db->query($query);
    $teacher = $teacher->fetch();
    $teacher_name = $teacher['fname'] . " " . $teacher['lname'];
    return $teacher_name;
}

function add_teacher($id, $fname, $lname, $userName, $password) {
    global $db;
    $query = "INSERT INTO teachers (teacher_id, fname, lname)
              VALUES ('$id', '$fname', '$lname')";
    $db->exec($query);
	$query = "INSERT INTO user_login(username, password, userID, userType)
			  VALUES ('$userName', '$password', '$id', 'teacher')";
	$db->exec($query);
}

function delete_teacher($id) {
    global $db;
    $query = "DELETE FROM teachers
              WHERE teacher_id = '$id'";
    $db->exec($query);
	$query = "DELETE FROM user_login
			  WHERE userID = '$id'";
	$db->exec($query);
}
?>