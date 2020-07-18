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
		body {
			background-image: url("../photos/i_tlo3.png");
		}

		.boxlist {
			float: left;
			width: 100%;
			padding: 40px;
			margin: 0px;
			border: 0px solid;
		}

		.box1 {
			float: right;
			width: 100%;
			padding: 0px;
			margin: 0px;
			background: blank;
		}

		.grid-container {
			display: grid;
			grid-template-columns: auto auto;
			grid-column-gap: 16px;
			grid-row-gap: 20px;
			padding: 25px;
		}

		.grid-item {
			color: #37F79F;
			border: 1px solid #37F79F;
			height: auto;
			padding: 10px;
			font-size: 30px;
			text-align: center;
			font-size: 21px;
		}

		#header {
			margin: 40px;
		}

		.gray {
			opacity: 0.5;
		}
	</style>
</head>

<body>
	<div class="clearfix">
		<div class="box1">
			<p id="header">Edycja danych i wyposażenia</p>
			<h3>// UWAGI:</h3>
			<h4>// PRZESYŁANIE ZDJĘĆ - wielkość zdjecia w pikselach jest podana przy każdej sekcji!</h4>
			<br>

			<div class="boxlist">
				<div class="grid-container">

					<div class="grid-item"><a href="i_data_edit.php">
							<h1 align="center">Dane osobowe</h1>
						</a></div>

					<div class="grid-item"><a href="i_eq_edit.php">
							<h1 align="center">Wyposażenie</h1>
						</a></div>

				</div>
			</div>
		</div>
	</div>

</body>

</html>