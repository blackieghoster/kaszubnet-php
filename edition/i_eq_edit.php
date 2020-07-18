<?php

session_start();
include '../lib/log_check.php';
include '../lib/ch_eq_edit.php';
require_once '../lib/character_data.php';

?>

<!DOCTYPE HTML>
<html lang="pl">

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

		.box1 {
			float: right;
			width: 100%;
			padding: 0px;
			margin: 0px 0px 00px 0px;
			border: 1px solid;
			background: blank;
		}

		.box2 {
			float: left;
			width: 33%;
			padding-top: 30px;
			margin: 0px 0px 0px 0px;
			border: 0px solid;
			background: blank;
		}

		.box3 {
			float: left;
			width: 67%;
			padding: 0px;
			margin: 0px 0px 0px 0px;
			border: 0px solid;

		}

		.box2t {
			float: left;
			width: 100%;
			padding-top: 0px;
			margin: 0px 0px 0px 0px;
			border: 0px solid;
			background: blank;
		}

		.box3t {
			float: left;
			width: 100%;
			padding: 0px;
			margin: 0px 0px 0px 0px;
			border: 0px solid;
		}


		.boxlista {
			float: left;
			width: 100%;
			padding: 5px;
			margin: 0px;
			border: 1px solid;
		}

		.grid-container {
			display: grid;
			grid-template-columns: auto auto;
			grid-column-gap: 10px;
			grid-row-gap: 10px;
			padding: 10px;
		}

		.grid-item {
			background-color: blank;
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
			border: 0px solid;
			padding: 10px;
			height: auto;
		}

		input {
			width: 330px;
		}

		.slot_small {
			float: left;
			width: 166px;
			height: 151px;
			background-image: url("../zdjecia/small5.png");
			margin: 5px;
		}

		.slot_big {
			float: left;
			width: 167px;
			height: 318px;
			background-image: url("../zdjecia/big.png");
			margin: 5px;
		}

		.slot_t {
			float: left;
			width: 334px;
			height: 317px;
			background-image: url("../zdjecia/small_t.png");
			margin: 5px;
		}
	</style>
</head>

<body>

	<div class="clearfix">
		<div class="box1">
			<p id="header">Edycja wyposażenia osobistego</p>

			<div class="boxlista">
				<div class="grid-container">

					<!--- Equipment --->

					<div class="grid-item"><br>
						<h2 align=center>Ubiór/Pancerz</h2><br>

						<div class="box1">
							<div class="box2">

								<div class="slot_small">
									<img style="padding:15px" src="<?php echo $helmet_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>

							<div class="box3">
								<form method="post">
									<h4><b>Nakrycie głowy: </b></h4><?php echo $helmet; ?>

									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_helmet'])) {
																		echo $_SESSION['given_data_helmet'];
																		unset($_SESSION['given_data_helmet']);
																	}
																	?>" name="helmet" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_helmet'])) {
											echo '<div class="error">' . $_SESSION['error_helmet'] . '</div>';
											unset($_SESSION['error_helmet']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>
								</form>
							</div>
						</div>
						<br>

						<div class="box1">
							<div class="box2">

								<div class="slot_small">
									<img style="padding:15px" src="<?php echo $gm_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>

							<div class="box3">
								<form method="post">
									<h4><b>Maska przeciw gazowa: </b></h4><?php echo $gas_mask; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_gas'])) {
																		echo $_SESSION['given_data_gas'];
																		unset($_SESSION['given_data_gas']);
																	}
																	?>" name="gas_mask" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_gas'])) {
											echo '<div class="error">' . $_SESSION['error_gas'] . '</div>';
											unset($_SESSION['error_gas']);
										}
										?>
										<input type="submit" value="Prześlij!" />
								</form>
							</div>
						</div>
						<br>

						<div class="box1">
							<div class="box2">

								<div class="slot_big">
									<img style="padding:15px" src="<?php echo $torso_photo; ?>" alt="Brak wyposażenia" />
								</div>
							</div>
							<div class="box3">
								<form method="post">
									<h4><b>Tułów: </b></h4><?php echo $torso; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_torso'])) {
																		echo $_SESSION['given_data_torso'];
																		unset($_SESSION['given_data_torso']);
																	}
																	?>" name="torso" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_torso'])) {
											echo '<div class="error">' . $_SESSION['error_torso'] . '</div>';
											unset($_SESSION['error_torso']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>

								</form>
							</div>
						</div>
						<br>


						<div class="box1">
							<div class="box2">

								<div class="slot_big">
									<img style="padding:15px" src="<?php echo $pants_photo; ?>" alt="Brak wyposażenia" />
								</div>
							</div>
							<div class="box3">
								<form method="post">
									<h4><b>Nogi: </b></h4><?php echo $pants; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_pants'])) {
																		echo $_SESSION['given_data_pants'];
																		unset($_SESSION['given_data_pants']);
																	}
																	?>" name="pants" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_pants'])) {
											echo '<div class="error">' . $_SESSION['error_pants'] . '</div>';
											unset($_SESSION['error_pants']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>

								</form>
							</div>
						</div>
						<br>

						<div class="box1">

							<div class="box3">
								<form method="post">
									<h4><b>Wskaźnik pancerza: </b></h4><?php echo $armor_rating; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_ar'])) {
																		echo $_SESSION['given_data_ar'];
																		unset($_SESSION['given_data_ar']);
																	}
																	?>" name="armor_rating" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_ar'])) {
											echo '<div class="error">' . $_SESSION['error_ar'] . '</div>';
											unset($_SESSION['error_ar']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>

								</form>
							</div>
						</div>
						<br>


						<div class="box1">

							<div class="box3">
								<form method="post">
									<h4><b>Wskaźnik odporności na radiację: </b></h4><?php echo $rad_res; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_rr'])) {
																		echo $_SESSION['given_data_rr'];
																		unset($_SESSION['given_data_rr']);
																	}
																	?>" name="rad_res" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_rr'])) {
											echo '<div class="error">' . $_SESSION['error_rr'] . '</div>';
											unset($_SESSION['error_rr']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>

								</form>
							</div>
						</div>
						<br>

					</div>

					<!-- Malee -->

					<div class="grid-item"><br>
						<h2 align=center>Broń biała</h2><br>


						<div class="box1">
							<div class="box2">

								<div class="slot_big">
									<img style="padding:15px" src="<?php echo $th_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>

							<div class="box3">
								<form method="post">
									<h4><b>Bron biała dwuręczna: </b></h4><?php echo $two_handed; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_th'])) {
																		echo $_SESSION['given_data_th'];
																		unset($_SESSION['given_data_th']);
																	}
																	?>" name="two_handed" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_th'])) {
											echo '<div class="error">' . $_SESSION['error_th'] . '</div>';
											unset($_SESSION['error_th']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>
								</form>
							</div>
						</div>
						<br>

						<div class="box1">
							<div class="box2">

								<div class="slot_big">
									<img style="padding:15px" src="<?php echo $oh_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>

							<div class="box3">
								<form method="post">
									<h4><b>Broń biała jednoręczna: </b></h4><?php echo $one_handed; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_oh'])) {
																		echo $_SESSION['given_data_oh'];
																		unset($_SESSION['given_data_oh']);
																	}
																	?>" name="one_handed" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_oh'])) {
											echo '<div class="error">' . $_SESSION['error_oh'] . '</div>';
											unset($_SESSION['error_oh']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>
								</form>
							</div>
						</div>
						<br>

						<div class="box1">
							<div class="box2">

								<div class="slot_small">
									<img style="padding:15px" src="<?php echo $sm_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>

							<div class="box3">

								<form method="post">
									<h4><b>Broń biała krótka: </b></h4><?php echo $short_malee; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_sm'])) {
																		echo $_SESSION['given_data_sm'];
																		unset($_SESSION['given_data_sm']);
																	}
																	?>" name="short_malee" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_sm'])) {
											echo '<div class="error">' . $_SESSION['error_sm'] . '</div>';
											unset($_SESSION['error_sm']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>
								</form>
							</div>
						</div>
						<br>

						<div class="box1">
							<div class="box2">

								<div class="slot_small">
									<img style="padding:15px" src="<?php echo $tw_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>
							<div class="box3">
								<form method="post">
									<h4><b>Broń rzucana: </b></h4><?php echo $throw_weapon; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_tw'])) {
																		echo $_SESSION['given_data_tw'];
																		unset($_SESSION['given_data_tw']);
																	}
																	?>" name="throw_weapon" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_tw'])) {
											echo '<div class="error">' . $_SESSION['error_tw'] . '</div>';
											unset($_SESSION['error_tw']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>

								</form>
							</div>
						</div>
						<br>

						<div class="box1">

							<div class="box2t">
								<form method="post">
									<h4><b>Tarcza: </b></h4><?php echo $shield; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_shield'])) {
																		echo $_SESSION['given_data_shield'];
																		unset($_SESSION['given_data_shield']);
																	}
																	?>" name="shield" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_shield'])) {
											echo '<div class="error">' . $_SESSION['error_shield'] . '</div>';
											unset($_SESSION['error_shield']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>
								</form>
							</div>
							<div class="box3t">

								<div class="slot_t">
									<img style="padding:15px" src="<?php echo $shield_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>

						</div>


					</div>

					<!-- Firearms -->

					<div class="grid-item"><br>
						<h2 align=center>Broń palna</h2><br>

						<div class="box1">
							<div class="box2">

								<div class="slot_big">
									<img style="padding:15px" src="<?php echo $mf_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>
							<div class="box3">
								<form method="post">
									<h4><b>Broń palna (długa): </b></h4><?php echo $main_firearm; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_mf'])) {
																		echo $_SESSION['given_data_mf'];
																		unset($_SESSION['given_data_mf']);
																	}
																	?>" name="main_firearm" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_mf'])) {
											echo '<div class="error">' . $_SESSION['error_mf'] . '</div>';
											unset($_SESSION['error_mf']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>

								</form>
							</div>
						</div>


						<br>
						<div class="box1">
							<div class="box2">

								<div class="slot_small">
									<img style="padding:15px" src="<?php echo $pistol_photo; ?>" alt="Brak wyposażenia" />
								</div>

							</div>
							<div class="box3">
								<form method="post">
									<h4><b>Pistolet: </b></h4><?php echo $pistol; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_pistol'])) {
																		echo $_SESSION['given_data_pistol'];
																		unset($_SESSION['given_data_pistol']);
																	}
																	?>" name="pistol" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_pistol'])) {
											echo '<div class="error">' . $_SESSION['error_pistol'] . '</div>';
											unset($_SESSION['error_pistol']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>

								</form>
							</div>
						</div>
					</div>

					<!-- Other items -->

					<div class="grid-item"><br>

						<h2 align=center>Inne</h2><br>

						<div class="box1">

							<div class="box3">

								<form method="post">
									<h4><b>Przedmioty dodatkowe: </b></h4><?php echo $other; ?>
									<p><input type="text" value="<?php
																	if (isset($_SESSION['given_data_other'])) {
																		echo $_SESSION['given_data_other'];
																		unset($_SESSION['given_data_other']);
																	}
																	?>" name="other" placeholder="Nowa nazwa/opis przedmiotu">

										<?php
										if (isset($_SESSION['error_other'])) {
											echo '<div class="error">' . $_SESSION['error_other'] . '</div>';
											unset($_SESSION['error_other']);
										}
										?>
										<input type="submit" value="Prześlij!" /></p>

								</form>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>
	</div>

</body>

</html>