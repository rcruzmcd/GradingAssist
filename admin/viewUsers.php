<?php
include('../view/header.php');
require_once ('../model/database.php');
require_once ('../model/userLogin_db.php');
$results = get_users();
?>

				<div class="">
				<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
					<li class="active">Users</li>
				</ul>
				<table class="table table-condensed table-bordered table-striped">
					<tr>
						<th>Username</th>
						<th>Password</th>
						<th>User ID</th>
						<th>User Type</th>
					</tr>
					<?php foreach ($results as $user):?>
					<tr>
						<td><?php echo $user['username']; ?></td>
						<td><?php echo $user['password']; ?></td>
						<td><?php echo $user['userID']; ?>	</td>
						<td><?php echo $user['userType']; ?></td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		
<?php
include ('../view/footer.php');
?>