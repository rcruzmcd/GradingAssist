<?php
date_default_timezone_set('America/New_York');
$time_zone = date_default_timezone_get();

$formatting = 'Y';
$current_date_object = new DateTime();
$current_date_f = $current_date_object -> format($formatting);
?>
			<br/><br/>
			<footer>
				<p class="copyright center">
					All Rights Reserved. &nbsp; &copy; <?php echo $current_date_f ?> 
					Grading Assist, Inc. <i class="icon-globe"></i>
				</p>
			</footer>
		</div>
	</body>
</html>