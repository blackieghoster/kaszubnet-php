<?php
session_start();
include '../lib/log_check.php'
?>

<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="../css/style.css">

	<style>
		.back {
			width: 23%;
		}
	</style>
</head>

<body>
	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p><a href="back1.php">KASZUBnet</a>><a href="back2.php">Frakcja</a>><a href="members.php">Członkowie</a></p>
			</div>

			<iframe src="i_members.php" height="605" width="1136" style="border:none;"></iframe>


		</div>
	</div>
	<br>
	<br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>

</body>

</html>