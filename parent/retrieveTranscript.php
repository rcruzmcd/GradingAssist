<?php
include('../view/header.php');
require_once ('../model/database.php');

$student_id_query = "SELECT s_id FROM parents WHERE parent_id = '$user'";
$results = $db -> query($student_id_query);
$result = $results -> fetch();
$student_id = $result['s_id'];

$student_name = "SELECT fname, lname FROM student WHERE parent_id = '$user'";
$results = $db -> query($student_name);
$result = $results -> fetch();
$student_fname = $result['fname'];
$student_lname = $result['lname'];

$query = "SELECT course_id, cname, grade
		FROM grade_report JOIN parents 
		ON s_id = stu_id 
		JOIN courses ON course_id = c_id
		WHERE stu_id = '$student_id'";
$results = $db -> query($query);
?>
<ul class="breadcrumb">
	<li>
		<a href="index.php">Home</a><span class="divider">/</span>
	</li>
	<li class="active">
		Transcript
	</li>
</ul>

<div class="">
<h1>Unofficial Transcript</h1>
<p class="lead">Student:  <?php echo $student_fname . " " .$student_lname ;?> 
<br/> Student ID: <?php echo $student_id; ?></p>
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<th>Course Id</th>
			<th>Course Name</th>
			<th>Grade</th>
		</tr>
		<?php foreach ($results as $course): ?>
		<tr>
			<td> <?php echo $course['course_id']; ?> </td>
			<td> <?php echo $course['cname']; ?> </td>
			<td> <?php echo $course['grade']; ?> </td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php
include ('../view/footer.php');
?>