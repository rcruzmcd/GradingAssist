<?php
include('../view/header.php');
require_once ('../model/database.php');
require_once ('../model/parents_db.php');
$results = get_parent();
?>

			
				<div class="">
				<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
					<li class="active">Parents</li>
				</ul>
				<table class="table table-condensed table-bordered table-striped">
					<tr>
						<th>Parent ID</th>
						<th>Student ID</th>
						<th>First Name</th>
						<th>Last Name</th>
					</tr>
					<?php foreach ($results as $parent):?>
					<tr>
						<td><?php echo $parent['parent_id']; ?></td>
						<td><?php echo $parent['s_id']; ?></td>
						<td><?php echo $parent['fname']; ?>	</td>
						<td><?php echo $parent['lname']; ?></td>
						<td>
							<form id="deleteParent" name="deleteParent" action="processParent.php" method="post">
								<input type="hidden" name="action" value="delete_parent" />
                    			<input type="hidden" name="parent_id" value="<?php echo $parent['parent_id']; ?>"/>
								<button type="submit" class="btn btn-danger"> 
									Delete &nbsp;<i class="icon-remove icon-white"></i></button>
							</form>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<label><a href="addParent.php"class="btn btn-success">Add Parent &nbsp;<i class="icon-ok icon-white"></i></a></label>
			</div>
		
<?php
include ('../view/footer.php');
?>