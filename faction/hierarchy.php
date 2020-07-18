<?php
session_start();
include '../lib/log_check.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="../stylestrony9.css">

	<style>
		.back {
			width: 28%;
		}
	</style>
</head>

<body>
	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p><a href="../main_menu.php">KASZUBnet</a>><a href="faction.php">Frakcja</a>><a href="hierarchy.php">Hierarchia_i_Role</a></p>
			</div>

			<iframe src="i_hierarchy.php" height="605" width="1136" style="border:none" scrolling="auto"></iframe>
		</div>
	</div>
	<br>
	<br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>