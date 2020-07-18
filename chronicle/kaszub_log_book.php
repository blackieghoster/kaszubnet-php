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
		.box1 {
			float: left;
			width: 100%;
			padding: 0px;
			margin: 0px 0px 00px 0px;
			border: 1px solid;
		}

		p {
			font-size: 20px;
		}

		.back {
			width: 470px;
		}
	</style>
</head>

<body>

	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p style="font-size: 16px"><a href="../main_menu.php">KASZUBnet</a>><a href="chronicle.php">Kronika</a>><a href="kaszub_chronicle.php">Kronika_Kaszuba</a>>Dziennik_Pokładowy</p>
			</div>
			<iframe src="i_kaszub_log_book.php" height="605" width="1136" style="border:none;"></iframe>


		</div>
		<br>
		<br>
		<div class="footer">
			<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
		</div>
</body>

</html>