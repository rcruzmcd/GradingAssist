<?php
include('../view/header.php');
require_once ('../model/database.php');

$course = "SELECT c_id, cname, csection
			FROM teachers JOIN courses
				ON teacher_id = t_id
			WHERE teacher_id = '$user'
			ORDER BY c_id";
$results = $db->query($course);
?>

			
			<div class="row">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Course ID</th>
						<th>Course Name</th>
						<th>Course Section</th>
						
					</tr>
					<?php foreach ($results as $courses):?>
					<tr>
						<td><?php echo $courses['c_id']; ?>	</td>
						<td><?php echo $courses['cname']; ?>	</td>
						<td><?php echo $courses['csection']; ?></td>
						<td>
							<form id="viewStudent" name="viewStudent" action="viewStudent.php" method="post">
								<input type="hidden" name="action" value="view_student" />
                    			<input type="hidden" name="course_id" value="<?php echo $courses['c_id']; ?>"/>
								<button type="submit">View Students</button>
							</form>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		
<?php
include ('../view/footer.php');
?>