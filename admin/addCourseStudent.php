<?php
include('../view/header.php');
?>

	<div class="row">
				<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
  					<li><a href="mcourses.php">Courses</a> <span class="divider">/</span></li>
  					<li><a href="viewStudent.php">Student</a> <span class="divider">/</span></li>
					<li class="active">Add Student</li>
					</ul>
					
					<h2 class="form-signin-heading offset4">Add Student</h2>
				<div class="offset1 span8 formBorder">
					
					<form id="courseForm" name="courseForm" class="form-signin form-horizontal" action="processCourse.php" method="post">
						<input type="hidden" name="action" value="add_student" />
						<div class="control-group">
							<label class="control-label" for="ID">Course ID: </label>
							<div class="controls">
								<input type="text" name="ID" id="ID" value="<?php echo $_SESSION['course'] ?>" class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="studentID">Student ID: </label>
							<div class="controls">
								<input type="text" name="studentID" id="studentID" value="" class="input-xlarge">
							</div>
						</div>
						
					<button class="btn btn-large btn-primary offset3" type="submit">
							Submit
						</button>
					</form>
				</div>
			</div>
		
<?php
include ('../view/footer.php');
?>