<?php
require ('../model/database.php');
require ('../model/course_db.php');

if ($_POST['action'] == "delete_course") {
	$courseID = $_POST['course_id'];
	delete_course($courseID);
	header("Location: mcourses.php");
} 

else if ($_POST['action'] == "add_student"){
	$courseID = $_POST['ID'];
	$studentID = $_POST['studentID'];
	
	if(!empty($courseID) || !empty($studentID)){
	add_student_toCourse($courseID, $studentID);
	}
	header("Location: viewStudent.php");
}

else if ($_POST['action'] == "delete_student"){
	$courseID = $_POST['course_id'];
	$studentID = $_POST['student_id'];
	
	delete_student_fromCourse($courseID, $studentID);
	header("Location: viewStudent.php");
}

else {
	$courseID = $_POST['ID'];
	$courseName = $_POST['courseName'];
	$courseSection = $_POST['courseSection'];
	$teacherID = $_POST['teacherID'];

	if(!empty($courseID) || !empty($courseName) || !empty($courseSection) || !empty($teacherID) ){
	add_courses($courseID, $courseName, $courseSection, $teacherID);
	}
	header("Location: mcourses.php");
}

?>