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
			float: right;
			width: 100%;
		}

		.back {
			width: 440px;
		}
	</style>
</head>

<body>

	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p><a href="../polog.php">KASZUBnet</a>><a href="artefacts.php">Artefakty</a>>Kowadło_ostatniej_akredytacji</p>
			</div>
			<div class="box1">

				<p id="header">Kowadło_ostatniej_akredytacji</p>
				<br>
				<br>
				<br>
				<br>
				<h2 align="center">Ostatnia broń zaakredytowana podczas Pory Przybyszów 2116.</h2>

				<p>"Oni chcą napierdalać się nawet kowadłem" ~ Rhotax ... podobno</p>

				<p>"Pamiętam, że ktoś wypalił z pomysłem by zrzucić go z dachu baru na łeb randoma. Szkoda, że akurat Alkochemicy narobili rabanu w mieście i o przedsięwzięciu zapomniano." ~ Mur</p>

				<p>"To Elwis lub ja - kto pierwszy? Nieważne. Przynętą na łby do miażdżenia miały być 2 garści fałszywych kapsli. W tym roku się uda..." ~ Strzygoń</p>

			</div>
		</div>
	</div>
	<br><br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>