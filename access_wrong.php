<?php
	include 'lib/log_check.php'
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

	<link rel="stylesheet" href="stylestrony9.css">

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
			<p><a href="main_menu.php">KASZUBnet</a></p>
			</div>
			<div class="box1">

            <div class="glitch" data-text="BRAK DOSTĘPU!" style="color:red">BRAK DOSTĘPU!</div>
            <h2 align="center"> - wymagany wyższy poziom dostępu!</h2>
            <br>
            <p>Próbujesz dostać się do zasobów do których nie przyznano ci dostępu. Prosimy o natychmiastowe zgłoszenie tego faktu do przełożonego.</p>
            <p>W celu przyznania wyższego poziomu dostępu, prosimy zglosić się do bezpośredniego przełożonego lub nadzorcy bazy danych.<p>
		    <br>
            <h3 align="center"><b>Schron-Bud - dbamy o twoją przyszłosc!<b></h3>
		    <br>
			</div>
		</div>
	</div>
	<br><br>
	<div class="footer"><h5>KASZUBnet ver.<?php echo $_SESSION['wersja']; ?></h5></div>
</body>
</html>