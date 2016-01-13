<?php
function get_courses() {
    global $db;
    $query = 'SELECT * FROM courses
              ORDER BY c_id';
    $result = $db->query($query);
    return $result;
}

function get_courses_name($course_id) {
    global $db;
    $query = "SELECT * FROM courses
              WHERE c_id = $course_id";
    $course = $db->query($query);
    $course = $category->fetch();
    $course_name = $course['categoryName'];
    return $course_name;
}

function add_courses($id, $name, $section, $teacher) {
    global $db;
    $query = "INSERT INTO courses (c_id, cname, csection, t_id)
              VALUES ('$id', '$name', '$section', '$teacher')";
    $db->exec($query);
}

function delete_course($course_id) {
    global $db;
    $query = "DELETE FROM courses
              WHERE c_id = '$course_id'";
    $db->exec($query);
}

function add_student_toCourse($id, $studentid){
	global $db;
	$grade = "";
	$query = "INSERT INTO grade_report(stu_id, course_id, grade)
			  VALUES ('$studentid', '$id', '$grade')";
	$db->exec($query);
}

function delete_student_fromCourse($id, $studentid){
	global $db;
	$query = "DELETE FROM grade_report
			WHERE course_id = '$id' AND stu_id = '$studentid'";
	$db->exec($query);
}
?>