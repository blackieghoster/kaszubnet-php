<?php

session_start();
include '../lib/log_check.php';
include '../lib/ch_data_edit.php';
require_once '../lib/character_data.php';
require_once '../uploads/upload_char_photo.php';
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="../trumbowyg/dist/ui/trumbowyg.css">
	<link rel="stylesheet" href="../css/style.css">

	<script type="text/javascript" src="js/dist/langs/pl.min.js"></script>
	<style>


		body {
			background-image: url("../photos/i_tlo3.png");
		}

		.boxlista {
			float: left;
			width: 100%;
			padding: 10px;
			margin: 0px 0px 0px 0px;
			border: 1px solid;
		}

		.box1 {
			float: right;
			width: 100%;
			padding: 0px;
			margin: 0px 0px 00px 0px;
			border: 1px solid;
			background: blank;
		}

		.grid-container {
			display: grid;
			grid-template-columns: auto;
			grid-column-gap: 10px;
			grid-row-gap: 10px;
			padding: 20px;
		}

		.grid-item {
			color: #37F79F;
			border: 1px solid #37F79F;
			height: auto;
			padding: 10px;
			font-size: 30px;
			text-align: left;
			font-size: 21px;
		}

		#header {
			margin: 40px;
		}

		form {
			border: 1px solid;
			padding: 5px;
		}
	</style>
</head>

<body>

	<div class="clearfix">
		<div class="box1">
			<p id="header">Edycja danych osobowych</p>

			<div class="boxlista">
				<div class="grid-container">

					<!--- DANE --->

					<div class="grid-item">
						<h2 align=center>Dane</h2><br><br>
						<form method="post">
							<p>Imie: <?php echo $character_name; ?></p>
							<p><input type="text" value="<?php
															if (isset($_SESSION['given_data_name'])) {
																echo $_SESSION['given_data_name'];
																unset($_SESSION['given_data_name']);
															}
															?>" name="name" placeholder="Twoje imie/ksywa/nazwisko">

								<?php
								if (isset($_SESSION['error_name'])) {
									echo '<div class="error">' . $_SESSION['error_name'] . '</div>';
									unset($_SESSION['error_name']);
								}
								?>
								<input type="submit" value="Prześlij!" /></p>
						</form>
						<br>

						<form action="../uploads/upload_char_photo.php" method="post" enctype="multipart/form-data">
							Prześlij swoje zdjęcie (240x320px):
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" name="submit" value="Prześlij zdjęcie">
							<?php
							if (isset($_SESSION['upload_error'])) {
								echo '<div class="error">' . $_SESSION['upload_error'] . '</div>';
								unset($_SESSION['upload_error']);
							}
                    ?>

						</form>
						<br>

						<form method="post" id="birth">
							<p>Rok urodzenia: [<?php echo $birth_time->format('Y-m-d') . "]";
												echo " Wiek: [" . $years->format('%y lat') . "]"; ?></p>
							<p><input type="date" name="birth" />

								<input type="submit" value="Prześlij!" /></p>
						</form>
						<br>

						<form method="post">
							<p>Funkcja: <?php echo $character_function; ?></p>
							<input list="functions" name="function" type="text" value="<?php
																						if (isset($_SESSION['given_data_function'])) {
																							echo $_SESSION['given_data_function'];
																							unset($_SESSION['given_data_function']);
																						}
																						?>" name="function" placeholder="Funkcja we frakcji" />
							<datalist id="functions">
								<option value="Przystaniowiec">
								<option value="Sztabowiec">
								<option value="Zastępca Kapitana">
								<option value="Kapitan Przystani">
							</datalist>
							<?php
							if (isset($_SESSION['error_function'])) {
								echo '<div class="error">' . $_SESSION['error_function'] . '</div>';
								unset($_SESSION['error_function']);
							}
							?>
							<input type="submit" value="Prześlij!" /></p>
						</form>
						<br>

						<form method="post">
							<p>Placówka: <?php echo $character_abode; ?></p>
							<p><select name="abode">
									<option value="O.R.P Kaszub">O.R.P Kaszub</option>
									<option value="OldTown">OldTown</option>
									<option value="Tricity">Tricity</option>
									<option value="Północ">Północ</option>
									<option value="Nomad">Nomad</option>
								</select>
								<input type="submit" value="Prześlij!" /></p>
						</form>
						<br>

						<form method="post">
							<p>Pochodzenie: <?php echo $character_origin; ?></p>
							<p><input type="text" value="<?php
															if (isset($_SESSION['given_data_origin'])) {
																echo $_SESSION['given_data_origin'];
																unset($_SESSION['given_data_origin']);
															}
															?>" name="origin" placeholder="Pochodzenie: miejscowoć/region" />

								<?php
								if (isset($_SESSION['error_origin'])) {
									echo '<div class="error">' . $_SESSION['error_origin'] . '</div>';
									unset($_SESSION['error_origin']);
								}
								?>
								<input type="submit" value="Prześlij!" /></p>
						</form>
						<br>

						<form method="post">
							<p>Zawód: <?php echo $character_job; ?></p>
							<p><input type="text" value="<?php
															if (isset($_SESSION['given_data_job'])) {
																echo $_SESSION['given_data_job'];
																unset($_SESSION['given_data_job']);
															}
															?>" name="job" placeholder="Czym się trudnisz" />

								<?php
								if (isset($_SESSION['error_job'])) {
									echo '<div class="error">' . $_SESSION['error_job'] . '</div>';
									unset($_SESSION['error_job']);
								}
								?>
								<input type="submit" value="Prześlij!" /></p>

						</form>
						<br>

						<form method="post">
							<p>Specjalizacja: <?php echo $character_specialization; ?></p>
							<p><input type="text" value="<?php
															if (isset($_SESSION['given_data_spec'])) {
																echo $_SESSION['given_data_spec'];
																unset($_SESSION['given_data_spec']);
															}
															?>" name="specialization" placeholder="Twoja specjalizacja np. handel, anomalie" /></p>

							<?php
							if (isset($_SESSION['error_spec'])) {
								echo '<div class="error">' . $_SESSION['error_spec'] . '</div>';
								unset($_SESSION['error_spec']);
							}
							?>
							<input type="submit" value="Prześlij!" />
						</form>
						<br>

						<form method="post">
							<p>Wiara: <?php echo $character_religion; ?></p>
							<input list="religions" name="religion" type="text" value="<?php
																						if (isset($_SESSION['given_data_religion'])) {
																							echo $_SESSION['given_data_religion'];
																							unset($_SESSION['given_data_religion']);
																						}
																						?>" name="function" placeholder="Twoje wyznanie" />
							<datalist id="religions">
								<option value="Ateista">
								<option value="Święty Płomień">
								<option value="Neo Chrześcijaństwo">
								<option value="Alkocholitanizm">
							</datalist>
							<?php
							if (isset($_SESSION['error_religion'])) {
								echo '<div class="error">' . $_SESSION['error_religion'] . '</div>';
								unset($_SESSION['error_religion']);
							}
							?>
							<input type="submit" value="Prześlij!" /></p>
						</form>
						<br>

						<form method="post">
							<p>Pory Przybyszów: <?php echo $character_ot_presence; ?></p>

							<p><input type="checkbox" name="ot_presence_14" value="2114">2114
								<input type="checkbox" name="ot_presence_15" value="2115">2115
								<input type="checkbox" name="ot_presence_16" value="2116">2116
								<input type="checkbox" name="ot_presence_17" value="2117">2117
								<input type="checkbox" name="ot_presence_18" value="2118">2118
								<input type="checkbox" name="ot_presence_19" value="2119">2119</p>

							<?php
							if (isset($_SESSION['error'])) {
								echo '<div class="error">' . $_SESSION['error'] . '</div>';
								unset($_SESSION['error']);
							}
							?>
							<input type="submit" value="Prześlij!" /></p>
						</form>
					</div>

					<div class="grid-item">
						<h2 align=center>Twoja historia</h2><br><br>

						<form method="post">
							<textarea id='editor' name="ch_history" rows="10" cols="145" value="<?php
																								if (isset($_SESSION['given_data_history'])) {
																									echo $_SESSION['given_data_history'];
																									unset($_SESSION['given_data_history']);
																								} else { }
																								echo $character_history;
																								?>"></textarea>
							<?php
							if (isset($_SESSION['error_history'])) {
								echo '<div class="error">' . $_SESSION['error_history'] . '</div>';
								unset($_SESSION['error_history']);
							}
							?>
							<input type="submit">
						</form>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Import jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
	</script>

	<!-- Import Trumbowyg -->
	<script src="../trumbowyg/dist/trumbowyg.js"></script>

	<script src="../trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js"></script>

	<script>
		$('#editor').trumbowyg({
			btns: [
				['viewHTML'],
				['undo', 'redo'],
				['formatting'],
				['strong', 'em', 'del'],
				['fontsize'],
				['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
				['fullscreen']
			]
		});
	</script>
</body>

</html>