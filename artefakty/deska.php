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
			padding: 15px;
		}

		.back {
			width: 360px;
		}

		img {
			float: right;
		}
	</style>
</head>

<body>

	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p><a href="../polog.php">KASZUBnet</a>><a href="artefakty.php">Artefakty</a>>Deska_do_prasowania</p>
			</div>

			<div class="box1">

				<p id="header">"Miecz" Talosa aka Deska do prasowania</p>
				<p align="right"><img src="../zdjecia/deska2.jpg"></p>
				<p>Legenda głosi... Z resztą nie ma legendy... </p>
				<p>to cholerstwo po prostu jest deską do prasowania!</p>
				<p>"Nie, nie leczę żadnych kurwa kompleksów" ~ Talos</p>
				<br>
				<br>

			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>