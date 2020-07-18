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
			padding: 15px;
		}

		.back {
			width: 300px;
		}
	</style>
</head>

<body>

	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p><a href="../polog.php">KASZUBnet</a>><a href="artefacts.php">Artefakty</a>>Przystaniówka</p>
			</div>
			<div class="box1">

				<p id="header">Przystaniówka - tradycyjny trunek Przystani</p>
				<p>Receptura powstała na Porze Przybyszów, wieczorem 19.07.2117 podczas ulewy.
					Podstawowe składniki to ciepłe wygazowane piwo, wódka, syrop owocowy i deszczówka (wg. tradycji zebrana z dachu herbaciarni Hafiego).
					Przykładowe składniki dodatkowe to na przykład- Lukrecjówka od Finów (fuj), Kawówka, Miodówka, Korzenna, wino, cydr, wódka jakiegokolwiek rodzaju i w zasadzie wszystko kurwa inne w stanie płynnym, z dowolną ilością procentów.
					Tradycyjnie podawana jest w upierdolonym jakimś syfem baniaku po wodzie lub 50- litrowej beczce po benzynie.
					Czerpana jest z większego pojemnika do kubków, zawsze jednym nabraniem.</p>
				<br>
				<br>
			</div>
		</div>
	</div>
	<br><br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>