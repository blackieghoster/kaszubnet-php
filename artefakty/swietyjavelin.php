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

	<link rel="stylesheet" href="../stylestrony7.css">

	<style>
		.box1 {
			float: right;
			width: 100%;
		}

		.back {
			width: 310px;
		}
	</style>
</head>

<body>
	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p><a href="../polog.php">KASZUBnet</a>><a href="artefakty.php">Artefakty</a>>Święty_Javelin</p>
			</div>
			<div class="box1">

				<p id="header">Święty_Javelin</p>
			</div>
		</div>
	</div>
	<br><br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>