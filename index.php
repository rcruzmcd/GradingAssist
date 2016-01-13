<?php
include('view/headerMain.php');
?>

<div class="row">
	<div class="offset3 span6">
		<form id="inputForm" name="inputForm" class="form-signin inputForm border" action="util/getUser.php"  method="post">

			<div class="input-prepend">
				<span class="add-on"> <i class="icon-user"></i></span>
				<input type="text" name="userName" id="userName" value="" class="input-block-level input-xlarge" placeholder="Username">
			</div>

			<div class="input-prepend">
				<span class="add-on"> <i class="icon-lock"></i></span>
				<input type="password" name="password" value="" class="input-block-level input-xlarge"  placeholder="Password">
			</div>

			<button class="btn-large btn-custom" type="submit">
				<i class="icon-check"></i> &nbsp;Sign in
			</button>
		</form>
	</div>
</div>
<?php
include ('view/footerMain.php');
?>
