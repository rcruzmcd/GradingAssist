<?php
include('../view/header.php');
?>

			<div class="row">
				<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
  					<li><a href="mcourses.php">Courses</a> <span class="divider">/</span></li>
					<li class="active">Add Course</li>
					</ul>
					
					<h2 class="form-signin-heading offset4">Add Course</h2>
				<div class="offset1 span8 formBorder">
					
					<form id="courseForm" name="courseForm" class="form-signin form-horizontal" action="processCourse.php" method="post">
					

						<div class="control-group">
							<label class="control-label" for="ID">Course ID: </label>
							<div class="controls">
								<input type="text" name="ID" id="ID" value="" class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="courseName">Course Name: </label>
							<div class="controls">
								<input type="text" name="courseName" id="courseName" value="" class="input-xlarge">
							</div>
						</div>

						
						<div class="control-group">
							<label class="control-label" for="courseSection">Course Section: </label>
							<div class="controls">
								<input type="text" name="courseSection" id="courseSection" value="" class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="teacherID">Teacher ID: </label>
							<div class="controls">
								<input type="text" name="teacherID" id="teacherID" value="" class="input-xlarge">
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