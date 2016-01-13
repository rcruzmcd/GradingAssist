<?php
require ('../model/database.php');

$grade = $_POST['grade'];
$student_id = $_POST['stu_id'];
$course_id = $_POST['course_id'];

$query = "UPDATE grade_report
		  SET grade = '$grade'
		WHERE stu_id = '$student_id' 
		AND course_id = '$course_id'";

$db->exec($query);

header("Location: viewStudent.php");
?>