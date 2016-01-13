<?php
include('../view/header.php');
require_once ('../model/database.php');
require_once ('../model/course_db.php');
$results = get_courses();
?>

				<div class="">
				<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
					<li class="active">Courses</li>
				</ul>
				<table class="table table-condensed table-bordered table-striped">
					<tr>
						<th>Course ID</th>
						<th>Course Name</th>
						<th>Course Section</th>
						<th>Teacher ID</th>
					</tr>
					<?php foreach ($results as $course):?>
					<tr>
						<td><?php echo $course['c_id']; ?></td>
						<td><?php echo $course['cname']; ?></td>
						<td><?php echo $course['csection']; ?></td>
						<td><?php echo $course['t_id']; ?></td>
						<td>
							<form id="viewStudent" name="viewStudent" action="viewStudent.php" method="post">
								<input type="hidden" name="action" value="view_student" />
                    			<input type="hidden" name="course_id" value="<?php echo $course['c_id']; ?>"/>
								<button type="submit" class="btn btn-success">View Students&nbsp;<i class="icon-user icon-white"></i></button>
							</form>
							<form id="deleteCourse" name="deleteCourse" action="processCourse.php" method="post">
								<input type="hidden" name="action" value="delete_course" />
                    			<input type="hidden" name="course_id" value="<?php echo $course['c_id']; ?>"/>
								<button type="submit" class="btn btn-danger"> 
									Delete &nbsp;<i class="icon-remove icon-white"></i></button>
							</form>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<label><a href="addCourse.php"class="btn btn-success">Add Courses &nbsp;<i class="icon-ok icon-white"></i></a></label>

			</div>
		
<?php
include ('../view/footer.php');
?>