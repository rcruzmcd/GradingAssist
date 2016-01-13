<?php
include('../view/header.php');
?>

		<div class="row">
			<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
  					<li><a href="mparents.php">Parents</a> <span class="divider">/</span></li>
					<li class="active">Add Parent</li>
					</ul>
					
					<h2 class="form-signin-heading offset4">Add Parent</h2>
				<div class="offset1 span8 formBorder">
					<form id="courseForm" name="courseForm" class="form-signin form-horizontal" action="processParent.php" method="post">
				

						<div class="control-group">
							<label class="control-label" for="ID">Parent ID: </label>
							<div class="controls">
								<input type="text" name="ID" id="ID" value="" class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="studentID">Student ID: </label>
							<div class="controls">
								<input type="text" name="studentID" id="studentID" value="" class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="firstName">First Name: </label>
							<div class="controls">
								<input type="text" name="firstName" id="firstName" value="" class="input-xlarge">
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="lastName">Last Name: </label>
							<div class="controls">
								<input type="text" name="lastName" id="lastName" value="" class="input-xlarge">
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="parentID">Username: </label>
							<div class="controls">
								<input type="text" name="username" id="username" value="" class="input-xlarge">
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="passowrd">Password: </label>
							<div class="controls">
								<input type="password" name="password" id="password" value="" class="input-xlarge">
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