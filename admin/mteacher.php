<?php
include('../view/header.php');
require_once ('../model/database.php');
require_once ('../model/teachers_db.php');
$results = get_teachers();
?>

			<div class="">
				<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
					<li class="active">Teachers</li>
				</ul>
			
			
				<table class="table table-condensed table-bordered table-striped">
					<tr>
						<th>Teacher ID</th>
						<th>First Name</th>
						<th>Last Name</th>
					</tr>
					<?php foreach ($results as $teacher):?>
					<tr>
						<td><?php echo $teacher['teacher_id']; ?>	</td>
						<td><?php echo $teacher['fname']; ?>	</td>
						<td><?php echo $teacher['lname']; ?></td>
						<td>
							<form id="deleteTeacher" name="deleteTeacher" action="processTeacher.php" method="post">
								<input type="hidden" name="action" value="delete_teacher" />
                    			<input type="hidden" name="teacher_id" value="<?php echo $teacher['teacher_id']; ?>"/>
								<button type="submit" class="btn btn-danger"> 
									Delete &nbsp;<i class="icon-remove icon-white"></i></button>
							</form>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<label><a href="addTeacher.php" class="btn btn-success">Add Teacher &nbsp;<i class="icon-ok icon-white"></i></a></label>

			</div>
		
<?php
include ('../view/footer.php');
?>