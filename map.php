<?php
session_start();
include 'lib/log_check.php';

?>
<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="css/style.css">

	<style>
		.back {
			width: 15%;
		}

		img {
			width: 100%;
			border: 1px solid;
		}

	</style>

</head>

<body>

	<div class="flex-container">
		<div class="clearfix">

			<div class="back">
				<p><a href="main_menu.php">KASZUBnet</a>>Mapa</p>
			</div>
			<p id="header">
				<div class="glitch" data-text="Mapa_ekspansji">Mapa_ekspansji</div>
			</p>

			<img src="photos/ekspansja.gif">

			<br>


		</div>
	</div>
	<br>
	<br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>