<?php
session_start();
include '../lib/log_check.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="../stylestrony7.css">

	<style>
		.back {
			width: 43%;
		}
	</style>
</head>

<body>
	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p style="font-size: 16px"><a href="../main_menu.php">KASZUBnet</a>><a href="chronicle.php">Kronika</a>><a href="kaszub_chronicle.php">Kronika_Kaszuba</a>>Ekspedycja_na_Kaszuba</p>
			</div>

			<iframe src="i_expedition.php" height="605" width="1136" style="border:none;"></iframe>


		</div>
		<br>
		<br>
		<div class="footer">
			<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
		</div>
	</div>
</body>

</html>