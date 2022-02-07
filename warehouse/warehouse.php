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

	<link rel="stylesheet" href="../css/style.css">

	<style>

	</style>

</head>

<body>

	<div class="flex-container">
		<div class="clearfix">
			<div class="box_header">
				<div class="back">
					<p><a href="../main_menu.php">KASZUBnet</a>>Magazyn</p>
				</div>
				<p id="header">
					<div class="glitch" data-text="Magazyn">Warehouse</div>
				</p>
				<div class="box_menu">
					<p id="menu"> Menu</p>
					<ul>
						<li id="menu_list"><a href="warehouse_condition.php">Stan magazynu</a></li>
						<li id="menu_list"><a href="warehouse_operation.php">Przyjęcie / Wydanie</a></li>
						<li id="menu_list"><a href="warehouse_log.php">Ewidencja</a></li>
					</ul>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

			</div>
			<div class="box_right">
				<div class=box_right_time>
					<p style="text-align: center;">Witaj <b><?php echo $_SESSION['character_name'] ?></b>! [<a href="../lib/logout.php">Wyloguj się!</a>]</p>
				</div>
				<div class=box_right_time>
					<p><?php echo "Dziś jest: " . $_SESSION['now']->format('d-m-Y'); ?></p>
				</div>
				<div class="box_right_photo">
					<p align="center"><img src="../<?php echo $_SESSION['character_photo'] ?>"></p>
				</div>
				<h3 align="center">Informacje:<h3>
						<h4 align="center"><a href="../edition/edition.php">Edytuj dane i wyposażenie</a></h4>
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