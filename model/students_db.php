<?php
function get_student() {
    global $db;
    $query = 'SELECT * FROM student
              ORDER BY student_id';
    $result = $db->query($query);
    return $result;
}

function get_student_name($student_id) {
    global $db;
    $query = "SELECT * FROM student
              WHERE student_id = $student_id";
    $student = $db->query($query);
    $student = $student->fetch();
    $student_name = $student['fname'] . " " . $student['lname'];
    return $student_name;
}

function get_student_inCourse($course_id){
	global $db;
	$query = "SELECT student_id, fname, lname, grade
			  FROM student JOIN grade_report
			  ON student_id = stu_id
			  WHERE course_id = '$course_id'";
	$result = $db->query($query);
	return $result;
}

function add_student($id, $fname, $lname, $parent_id, $userName, $password) {
    global $db;
    $query = "INSERT INTO student(student_id, fname, lname, parent_id)
              VALUES ('$id', '$fname', '$lname', '$parent_id')";
    $db->exec($query);
	$query = "INSERT INTO user_login(username, password, userID, userType)
			  VALUES ('$userName', '$password', '$id', 'student')";
	$db->exec($query);
}

function delete_student($student_id) {
    global $db;
    $query = "DELETE FROM student
              WHERE student_id = '$student_id'";
    $db->exec($query);
	$query = "DELETE FROM user_login
			  WHERE userID = '$student_id'";
	$db->exec($query);
}
?>