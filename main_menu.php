<?php
session_start();
include 'lib/log_check.php';
include 'lib/character_data.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono">

	<link rel="stylesheet" href="css/style.css">

	<style>
	</style>

</head>

<body>
	<div class="flex-container">
		<div class="clearfix">
			<div class="box_header">
				<div class="back">
					<p><a href="user_menu.php"><b>[Wybór_postaci]</a></p>
				</div>

				<p id="header">
					<div class="glitch" data-text="KASZUBnet">KASZUBnet</div>
				</p>

				<div class="box_menu">
					<p id="menu"> Menu</p>
					<ul>
						<li id="menu_list"><a href="faction/faction.php">Frakcja</a></li>
						<li id="menu_list"><a href="chronicle/chronicle.php">Kronika</a></li>
						<li id="menu_list"><a href="artefacts/artefacts.php">Artefakty frakcyjne</a></li>
						<li id="menu_list"><a href="warehouse/warehouse.php">Magazyn</a></li>
						<li id="menu_list"><a href="map.php">Mapa ekspansji</a></li>
						<!--<li id="menu_list"><a href="tablica.php">Tablica Ogłoszeń (w budowie)</a></li> -->
						<li id="menu_list"><a href="phpfreechat-1.7/chat_index.php">Wezel_komunikacyjny</a></li>
					</ul>
				</div>

			</div>
			<div class="box_right">
				<div class=box_right_time>
					<p style="text-align: center;">Witaj <b><?php echo $_SESSION['character_name'] ?></b>! [<a href="lib/logout.php">Wyloguj się!</a>]</p>
				</div>
				<div class=box_right_time>
					<p><?php echo "Dziś jest: " . $_SESSION['now']->format('d-m-Y'); ?></p>
				</div>
				<div class="box_right_photo">
					<p align="center"><img src="<?php echo $_SESSION['character_photo'] ?>"></p>
				</div>
				<h3 align="center">Informacje:<h3>
						<h4 align="center"><a href="edition/edition.php">Edytuj dane i wyposażenie</a></h4>
			</div>
		</div>
	</div>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>

	</div>
</body>

</html>