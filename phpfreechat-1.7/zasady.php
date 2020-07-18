<?php
	include '../lib/log_check.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>KASZUBnet</title>
	<meta charset="UTF-8">
	<link 
			rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono"
        	rel="icon" href="logo.png" type="image/x-icon"
	>

	<link rel="stylesheet" href="../stylestrony9.css">

<style>

	.box1 {
		float: right;
		width: 100%;
		padding: 15px;
	}

	.back {
		width: 325px;
	}

</style>
</head>

<body>

<div class="flex-container">
	<div class="clearfix">
		<div class="back">
			<p><a href="../main_menu.php">KASZUBnet</a>><a href="index.php">Wezel_Komunikacyjny</a>>Zasady</p>
			</div>
			<div class="box1">

            <p id="header">Zasady korzystania z Węzła Komunikacyjnego!</p>

				<ol>
				<li>Aby móc korzystać z Węzła_komunikacyjnego(czatu) wasza postać musi znajdować się w jednej z placówek Przystani w czasie rzeczywistym.</li>
				<li>W pełni odgrywamy swoje postacie na nim!</li>
				<li>Pisanie na konkretnym kanale oznacza nadawanie do konkretnej placówki.</li>
				<li>Żeby nie utrudniać, inne placówki mogą prowadzić "nasłuch" i dołączyć do rozmowy pomiędzy innymi placówkami.</li>
				</ol>
		    <br>
		    <br>
			</div>
		</div>
	</div>
	<br><br>
	<div class="footer"><h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5></div>
</body>
</html>