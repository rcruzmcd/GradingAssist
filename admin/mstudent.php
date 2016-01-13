<?php
include('../view/header.php');
require_once ('../model/database.php');
require_once ('../model/students_db.php');
$results = get_student();
?>

			
			<div class="">
				<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
					<li class="active">Students</li>
				</ul>
				<table class="table table-condensed table-bordered table-striped">
					<tr>
						<th>Student ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Parent ID</th>
					</tr>
					<?php foreach ($results as $student):?>
					<tr>
						<td><?php echo $student['student_id']; ?>	</td>
						<td><?php echo $student['fname']; ?>	</td>
						<td><?php echo $student['lname']; ?></td>
						<td><?php echo $student['parent_id']; ?></td>
						<td>
							<form id="deleteStudent" name="deleteStudent" action="processStudent.php" method="post">
								<input type="hidden" name="action" value="delete_student" />
                    			<input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>"/>
								<button type="submit" class="btn btn-danger"> 
									Delete &nbsp;<i class="icon-remove icon-white"></i></button>
							</form>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<label><a href="addStudent.php"class="btn btn-success">Add Student &nbsp;<i class="icon-ok icon-white"></i></a></label>
			</div>

<?php
include ('../view/footer.php');
?>