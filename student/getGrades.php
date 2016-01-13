<?php
include('../view/header.php');
require_once ('../model/database.php');

$query = "SELECT course_id, cname, grade
    		  FROM grade_report JOIN courses
    		  ON course_id = c_id
    	      WHERE stu_id = '$user'";
$results = $db -> query($query);
?>

<div class="">
<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
					<li class="active">Grades</li>
				</ul>
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<th>Course Id</th>
			<th>Course Name</th>
			<th>Grade</th>
		</tr>
		<?php foreach ($results as $course):?>
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