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
		.box1 {
			float: left;
			width: 100%;
			padding-bottom: 5px;
			margin-bottom: 10px;
		}

		.box2 {
			float: left;
			width: 80%;
			padding: 0px;
			margin: 0px 0px 10px 10%;
			text-align: center;
		}

		.box3 {
			float: left;
			width: 60%;
			padding: 0px;
			margin-left: 20%;
			text-align: center;
		}

		.back {
			width: 26%;
		}

		#header {
			margin: 10px;
		}
	</style>
</head>

<body>
	<div align="center">
		<div class="flex-container">
			<div class="clearfix">
				<div class="back">
					<p><a href="../main_menu.php">KASZUBnet</a>><a href="faction.php">Frakcja</a>>Prawo_Przystani</p>
				</div>

				<div class="box1">
					<p id="header">
						<div class="glitch" data-text="Prawo_Przystani">Prawo_Przystani</div>
					</p>
				</div>
				<br>
				<div class="box2">
					<h2>Przystań - Frakcja dążąca do utrzymania bezpiecznego terytorium, dla ludzi potrzebujących pomocy/schronienia którzy będą pracować na rzecz ekspansji i dobra frakcji.
						Jej głównym celem jest odbudowa przedwojennej korwety ORP Kaszub oraz ekspansja terytorialne.</h2>

				</div>
				<div class="box3">
					<h2>Dla najlepszego funkcjonowania frakcji Kapitan oraz Sztab ustanawia następujące Prawa:</h2>

					<h3>1. Każdy Przystaniowiec winien zawsze działać na rzecz frakcji i jej dobro powinno być na pierwszym miejscu.</h3>

					<h3>2. Przystani przewodzi Kapitan z pomocą Sztabu.</h3>

					<h3>3. Przystaniowcy mają prawo kwestionować decyzje Sztabu, jeśli nie służą one dobru frakcji. </h3>

					<h3>4. Przewinienia wobec Frakcji, Przystaniowcom oraz sojuszniczym frakcją będą podlegały sądowi sztabowemu. </h3>

				</div>

			</div>
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