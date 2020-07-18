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

	<link rel="stylesheet" href="../stylestrony9.css">

	<style>
		.back {
			width: 24%;
		}
	</style>

</head>

<body>
	<div class="flex-container">
		<div class="clearfix">
			<div class="box_header">
				<div class="back">
					<p><a href="../main_menu.php">KASZUBnet</a>>Kronika</p>
				</div>
				<p id="header">
					<div class="glitch" data-text="Kronika">Kronika</div>
				</p>
				<div class="box_menu">
					<p id="menu"> Menu</p>
					<ul>
						<li id="menu_list"><a href="faction_chronology.php">Chronologia frakcji</a></li>
						<li id="menu_list"><a href="kaszub_chronicle.php">ORP Kaszub</a></li>
						<li id="menu_list"><a href="ot_chronicle.php">Old Town</a></li>
						<li id="menu_list"><a href="north_chronicle.php">Północ</a></li>
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