<?php
include ('../view/header.php');
$username = $_SESSION['user'];
date_default_timezone_set('America/New_York');
$date = date('m/d/Y h:i:s a', time());

$transcriptHistory = "";
$stranscript = $user . " " . $date . "\n";

 $file = fopen("transcriptHistory.txt", "a+") or exit("Unable to open file.");
 fwrite($file, $stranscript);
 fclose($file);

 $file = fopen("transcriptHistory.txt", "a+") or exit("Unable to open file.");
 while (!feof($file)) {
 $line = fgets($file) . "<br/>";
 $lineUser = substr($line, 0, 3);
 if ($lineUser == $user) {
 	$sId = substr($line, 0, 3);
 $date = substr($line, 4, 10);
 $time = substr($line, 15, 11);
 $transcriptHistory .= $line;
 }
 }

 fclose($file);
?>
			<ul class="breadcrumb">
  					<li><a href="index.php">Home</a> <span class="divider">/</span></li>
					<li class="active">Request Transcript</li>
				</ul>
		<blockquote class="pull-right">
			 Student ID: <?php echo $sId; ?> 
				Date Received: <?php echo $date . $time; ?> </blockquote> <br/><br/>
			<div class="alert alert-success">
				<p class="lead">
					Thank you <?php echo $userName ?>, <br/>Your transcript order has been placed! <br/>
					A confirmation email has been sent to <?php echo $username; ?>@uncc.edu <br/>
				</p>
			</div>
					<div class="offset3">
			<p class="lead">Order Summary Log<br/> 
			<?php echo $transcriptHistory; ?>
				</p> 
			 </div>
<?php
include ('../view/footer.php');
?>