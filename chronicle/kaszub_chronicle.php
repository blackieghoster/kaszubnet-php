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

	<link rel="stylesheet" href="../css/style.css">

	<style>
		.back {
			width: 45%;
		}
	</style>

</head>

<body>
	<div class="flex-container">
		<div class="clearfix">
			<div class="box_header">
				<div class="back">
					<p style="font-size: 16px"><a href="../main_menu.php">KASZUBnet</a>><a href="chronicle.php">Kronika</a>>Kronika_Kaszuba</p>
				</div>
				<p id="header">
					<div class="glitch" data-text="Kronika_Kaszuba">Kronika_Kaszuba</div>
				</p>
				<div class="box_menu">
					<p id="menu"> Menu</p>
					<ul>
						<li id="menu_list"><a href="expedition.php">Ekspedycja na Kaszuba ~ Pielgrzym</a></li>
						<li id="menu_list"><a href="kaszub_log_book.php">Dziennik pokładowy Kaszuba ~ Pielgrzym</a></li>
						<li id="menu_list"><a href="wasyl_notes.php">Notatnik Wasyla</a></li>
					</ul>
				</div>

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