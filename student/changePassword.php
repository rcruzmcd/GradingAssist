<?php
include ('../view/header.php');
require_once ('../model/database.php');
require_once ('../model/userLogin_db.php');
$results=getUserInfo($user);
?>

<div class="row">
	<ul class="breadcrumb">
  		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Change Password</li>
	</ul>
	
	<?php foreach ($results as $result):?>
	
	<div class="offset1 span8 formBorder">
		<form id="changePassword" name="changePassword" class="form-signin form-horizontal" action="processPassword.php" method="post">
			
			<div class="control-group">
				<label class="control-label" for="userName">Username: <?php echo $result['username']?></label>
				
			</div>

			<div class="control-group">
				<label class="control-label" for="currentPassword">Enter your current password: </label>
				<div class="controls">
						<input type="hidden" name="userId" id="userId" value="<?php echo $user ?>" >
						<input type="hidden" name ="oldPassword" id="oldPassword" value="<?php echo $result['password']?>">
						<input type="password" name="currentPassword" id="currentPassword" value="" class="input-xlarge">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="newPassword">Enter your new password: </label>
				<div class="controls">
						<input type="password" name="newPassword" id="newPassword" value="" class="input-xlarge">
				</div>
			</div>
			
			<button class="btn btn-large btn-primary offset3" type="submit">
				Submit
			</button>
		</form>
	</div>
	
	<?php endforeach; ?>
</div>

<?php
include ('../view/footer.php');
?>