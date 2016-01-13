<?php
include('../view/header.php');
require_once ('../model/database.php');
require_once ('../model/students_db.php');

if (isset($_POST['course_id'])){
	$_SESSION['course'] = $_POST['course_id'];
}
$c_id = $_SESSION['course'];
$results = get_student_inCourse($c_id);
?>
		
		<!--<script type="text/javascript">
			function changeGrade(studentid) {
				var div = document.getElementById("change_Grade");
				div.style.display = "inline";
				var studentID = document.getElementById("stu_id")
				studentID.value = studentid;
			}
		</script>-->
	
		
			<div class="">
			<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
  					<li><a href="mcourses.php">Courses</a> <span class="divider">/</span></li>
					<li class="active">Students</li>
				</ul>
				<table class="table table-bordered table-striped">
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Grade</th>
					</tr>
					<?php foreach ($results as $student):?>
					<tr>
						<td><?php echo $student['fname']; ?>	</td>
						<td><?php echo $student['lname']; ?></td>
						<td><?php echo $student['grade']; ?></td>
						<td>
							<form id="deleteStudentCourse" name="deleteStudentCourse" action="processCourse.php" method="post">
								<input type="hidden" name="action" value="delete_student" />
                    			<input type="hidden" name="course_id" value="<?php echo $_SESSION['course']; ?>"/>
                    			<input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>"/>
								<button type="submit" class="btn btn-danger"> 
									Delete &nbsp;<i class="icon-remove icon-white"></i></button>
							</form>
						</td>	
					</tr>
					<?php endforeach; ?>
				</table>
				<label><a href="addCourseStudent.php"class="btn btn-success">Add Student &nbsp;<i class="icon-ok icon-white"></i></a></label>
				
				<!--<div style="display:none;" id="change_Grade">
					<form id="gradeForm" name="gradeForm" class="form-signin form-horizontal offset5" action="changeGrade.php" method="post">
						<div class="control-group">
							<label class="control-label" for="ID">Grade: </label>
							<div class="controls">
								<input type="text" name="grade" id="grade" value="" class="input-small">
								<input type="hidden" id="stu_id" name="stu_id" value="" />
								<input type="hidden" name="course_id" value="<?php echo $c_id ?>" />
							</div>
						</div>
						<button class="btn btn-large btn-primary offset2" type="submit">
							Submit
						</button>
					</form>
				</div>-->
			</div>
		
<?php
include ('../view/footer.php');
?>