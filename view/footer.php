<?php
require_once('../model/database.php');
require_once('../model/parents_db.php');
require_once('../model/students_db.php');
require_once('../model/teachers_db.php');

date_default_timezone_set('America/New_York');
$time_zone = date_default_timezone_get();

$formatting = 'Y';
$current_date_object = new DateTime();
$current_date_f = $current_date_object -> format($formatting);

if($_SESSION['type'] == "student"){
		$userName = get_student_name($user);
	}
else if($_SESSION['type'] == "teacher"){
		$userName = get_teacher_name($user);
	}
else if($_SESSION['type'] == "parent"){
		$userName = get_parent_name($user);
	}
else if($_SESSION['type'] == "admin"){
		$userName = "admin";
	}
?>

	<footer>
		<br/><br/>
		
		<div style="text-align: center">
			Logged in as <span class="text-error"><?php echo $userName; ?>.</span> 
			<a href="/project3105/view/logout.php">(Logout)</a> <br />
				<p class="copyright center">					
					All Rights Reserved.&nbsp; &copy; <?php echo $current_date_f ?> Grading Assist, Inc. <i class="icon-globe"></i>
				</p>
		</div>
	</footer>
	</body>
</html>