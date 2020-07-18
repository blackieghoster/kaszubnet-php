<?php
session_start();
include '../lib/log_check.php';
include '../lib/character_data.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/characters.css">

	<style>
	</style>

</head>

<body>

	<div class='flex-container'>

		<div class="clearfix">

			<p id="header"><?php echo $character_name ?></p>

			<div class="column1">

				<div class="photo">
					<div style="padding-top:20px"><img src="../<?php echo $character_photo ?>"></div>
				</div>

				<div class="character_data">
					<h3 align="center">Dane:<h3>
							<p style="font-size: 16px">Wiek: <?php echo $years->format('%y lat'); ?></p>
							<p style="font-size: 16px">Rok urodzenia: <?php echo $birth_time->format('Y-m-d'); ?></p>
							<p style="font-size: 16px">Funkcja: <?php echo $character_function; ?></p>
							<p style="font-size: 16px">Placówka: <?php echo $character_abode; ?></p>
							<p style="font-size: 16px">Pochodzenie: <?php echo $character_origin; ?></p>
							<p style="font-size: 16px">Zawód: <?php echo $character_job; ?></p>
							<p style="font-size: 16px">Specjalizacja: <?php echo $character_specialization; ?></p>
							<p style="font-size: 16px">Wiara: <?php echo $character_religion; ?></p>
							<p style="font-size: 16px">Pory przybyszów: <?php echo $character_ot_presence; ?></p>
				</div>

			</div>

			<div class="column2">

				<div class="slot_small">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $throw_weapon; ?></h3>
						</span>
						<img style="padding:15px" src="<?php echo $tw_photo; ?>" alt="Brak wyposażenia: Broń rzucana" />
					</div>
				</div>

				<div class="slot_small">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $helmet; ?></h3>
						</span>
						<img style="padding:15px" src="<?php echo $helmet_photo; ?>" alt="Brak wyposażenia: Hełm" />
					</div>
				</div>

				<div class="slot_small">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $gas_mask; ?></h3>
						</span>
						<img style="padding:15px" src="<?php echo $gm_photo; ?>" alt="Brak wyposażenia: maska przeciwgazowa" />
					</div>
				</div>

				<div class="slot_big">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $main_firearm; ?></h3>
						</span>
						<img style="padding:15px" src="<?php echo $mf_photo; ?>" alt="Brak wyposażenia: Broń palna długa" />
					</div>
				</div>

				<div class="slot_big">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $torso; ?></h3>
						</span>
						<img style="padding:15px" src="<?php echo $torso_photo; ?>" alt="Brak wyposażenia: Pancerz" />
					</div>
				</div>

				<div class="slot_big">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $two_handed; ?></h3>
						</span>
						<img style="padding:15px" src="<?php echo $th_photo; ?>" alt="Brak wyposażenia: Broń biała dwuręczna" />
					</div>
				</div>

				<div class="column_inner">

					<div class="slot_small_inner">
						<div class="tooltip">
							<span class="tooltiptext">
								<h3><?php echo $pistol; ?></h3>
							</span>
							<img style="padding:15px" src="<?php echo $pistol_photo; ?>" alt="Brak wyposażenia: Pistolet" />
						</div>
					</div>

					<div class="slot_small_inner">
						<div class="tooltip">
							<span class="tooltiptext">
								<h3><?php echo $short_malee; ?></h3>
							</span>
							<img style="padding:15px" src="<?php echo $sm_photo; ?>" alt="Brak wyposażenia: Broń biała krótka" />
						</div>
					</div>

				</div>

				<div class="slot_big">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $pants; ?></h3>
						</span>
						<img style="padding:15px; float: center;" src="<?php echo $pants_photo; ?>" alt="Brak wyposażenia: Spodnie/Pancerz-nogi" />
					</div>
				</div>

				<div class="slot_big">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $one_handed; ?></h3>
						</span>
						<img style="padding:15px" src="<?php echo $oh_photo; ?>" alt="Brak wyposażenia: Broń biała jednoręczna" />
					</div>
				</div>

				<div class="column2_5">
				<h3 align="center">Inne: <h3>
						<p style="font-size: 16px"><?php echo $other; ?></p>
			</div>

			</div>

			

			<div class="column3">
				<div class="slot_t">
					<div class="tooltip">
						<span class="tooltiptext">
							<h3><?php echo $shield; ?></h3>
						</span>
						<img src="<?php echo $shield_photo; ?>" alt="Brak wyposażenia: Tarcza" />
					</div>
				</div>

				<div class="column4">
					<h3 align="center">Wskaźnik pancerza: <?php echo $armor_rating; ?><h3>
							<h3 align="center">Wskaźnik odp. na radiację: <?php echo $rad_res; ?><h3>
				</div>

				<div class="column5">
					<h3 align="center">Umiejętności:<h3>
							<div class="um" align="center">

								<?php
								if ($chems_production) {
									printf("[%s]\n", 'Produkcja chemikaliów');
								}
								if ($powder_production) {
									printf("[%s]\n", 'Produkcja proszków');
								}
								if ($spec_mechanic) {
									printf("[%s]\n", 'Specjalista mechanik');
								}
								if ($spec_chemist) {
									printf("[%s]\n", 'Specjalista chemik');
								}
								if ($spec_programmer) {
									printf("[%s]\n", 'Specjalista programista');
								}
								if ($spec_electrician) {
									printf("[%s]\n", 'Specjalista elektryk');
								}
								if ($weapon_repair_1) {
									printf("[%s]\n", 'Naprawa broni - poz.1');
								}
								if ($weapon_repair_2) {
									printf("[%s]\n", 'Naprawa broni - poz.2');
								}
								if ($weapon_repair_3) {
									printf("[%s]\n", 'Naprawa broni - poz.3');
								}
								if ($ammo_prod_1) {
									printf("[%s]\n", 'Produkcja amunicji - poz.1');
								}
								if ($ammo_prod_2) {
									printf("[%s]\n", 'Produkcja amunicji - poz.2');
								}
								if ($ammo_prod_3) {
									printf("[%s]\n", 'Produkcja amunicji - poz.3');
								}
								if ($armor_repair_1) {
									printf("[%s]\n", 'Naprawa pancerzy i tarcz - poz.1');
								}
								if ($armor_repair_2) {
									printf("[%s]\n", 'Naprawa pancerzy i tarcz - poz.2');
								}
								if ($armor_repair_3) {
									printf("[%s]\n", 'Naprawa pancerzy i tarcz - poz.3');
								}
								if ($med_paramedic) {
									printf("[%s]\n", 'Medyk – Sanitariusz');
								}
								if ($med_intern) {
									printf("[%s]\n", 'Medyk – Stażysta');
								}
								if ($med_doctor) {
									printf("[%s]\n", 'Medyk – Lekarz');
								}
								if ($med_ordynator) {
									printf("[%s]\n", 'Medyk – Ordynator');
								}
								if ($driver) {
									printf("[%s]\n", 'Kierowca');
								}

								?>

							</div>
				</div>

			</div>

			<div class="column6">
				<h1 align="center">Osiągniecia<h1>

						<div class="header_achiev">
							<p>
								Bojowe:
							</p>

							<div class="grid-container">

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $sito_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Sito 1</h3>
											Otrzymanie na PP 1 rany postrzałowej.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $sito_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Sito 2</h3>
											Otrzymanie na PP 3 ran postrzałowych.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $sito_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Sito 3</h3>
											Otrzymanie na PP 5 ran postrzałowych.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $kukla_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Kukła treningowa 1</h3>
											Otrzymanie na PP 1 rany od broni białej.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $kukla_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Kukła treningowa 2</h3>
											Otrzymanie na PP 3 ran od broni białej.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $kukla_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Kukła treningowa 3</h3>
											Otrzymanie na PP 5 ran od broni białej.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $snajper_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Snajper 1</h3>
											Zadanie na PP 1 rany postrzałowej.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $snajper_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Snajper 2</h3>
											Zadanie na PP 3 ran postrzałowych.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $snajper_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Snajper 3</h3>
											Zadanie na PP 5 ran postrzałowych.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $rzeznik_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Rzeźnik 1</h3>
											Zadanie na PP 1 rany od broni białej.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $rzeznik_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Rzeźnik 2</h3>
											Zadanie na PP 3 ran od broni białej.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $rzeznik_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Rzeźnik 3</h3>
											Zadanie na PP 5 ran od broni białej.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $killer_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Killer 1</h3>
											1 zabita osoba na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $killer_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Killer 2</h3>
											2 zabitych osób na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $killer_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Killer 3</h3>
											5 zabitych osób na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $men_of_mayhem_ph ?>" />
										<span class="tooltiptext">
											<h3>Men of Mayhem 3</h3>
											10 zabitych osób na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $deratyzator_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Deratyzator 1</h3>
											1 zabity mutant podczas PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $deratyzator_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Deratyzator 2</h3>
											5 zabitych mutantów podczas PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $deratyzator_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Deratyzator 3</h3>
											10 zabitych mutantów podczas PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $the_judge_1_ph ?>" />
										<span class="tooltiptext">
											<h3>The Judge 1</h3>
											1 zabity raiders podczas PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $the_judge_2_ph ?>" />
										<span class="tooltiptext">
											<h3>The Judge 2</h3>
											5 zabitych raidersów podczas PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $the_judge_3_ph ?>" />
										<span class="tooltiptext">
											<h3>The Judge 3</h3>
											10 zabitych raidersów podczas PP.
										</span>
									</div>

								</div>

							</div>
						</div>

						<div class="header_achiev">
							<p>
								Medyczne:
							</p>
							<div class="grid-container">

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $dzielny_pacjent_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Dzielny pacjent 1</h3>
											1 wizyta w szpitalu.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $dzielny_pacjent_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Dzielny pacjent 2</h3>
											3 wizyty w szpitalu.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $dzielny_pacjent_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Dzielny pacjent 3</h3>
											5 wizyt w szpitalu.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $siostro_basen_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Siostro BASEN! 1</h3>
											1 opatrzona osoba.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $siostro_basen_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Siostro BASEN! 2</h3>
											5 opatrzonych osób.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $siostro_basen_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Siostro BASEN! 3</h3>
											10 opatrzonych osób.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $doc_zed_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Doc. Zed 1</h3>
											1 wyleczena osoba.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $doc_zed_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Doc. Zed 2</h3>
											5 wyleczonych osób.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $doc_zed_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Doc. Zed 3</h3>
											10 wyleczonych osób.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $wanna_be_kass_ph ?>" />
										<span class="tooltiptext">
											<h3>Wanna be dr.Kass</h3>
											15 wyleczonych osób.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $wanna_be_dziksu_ph ?>" />
										<span class="tooltiptext">
											<h3>Wanna be dr.Dziksu</h3>
											20 wyleczonych osób.
										</span>
									</div>

								</div>

							</div>
						</div>

						<div class="header_achiev">
							<p>
								Handlowe:
							</p>
							<div class="grid-container">


								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $gold_digger_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Gold Digger 1</h3>
											Zarobienie 50 kapsli na PP
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $gold_digger_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Gold Digger 2</h3>
											Zarobienie 100 kapsli na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $gold_digger_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Gold Digger 3</h3>
											Zarobienie 500 kapsli na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $zombie_ph ?>" />
										<span class="tooltiptext">
											<h3>Być jak Zombie!</h3>
											Zarobienie 1000 kapsli na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $rozrzutny_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Rozrzutny 1</h3>
											Za przepierdolenie 50 kapsli na głupoty.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $rozrzutny_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Rozrzutny 2</h3>
											Za przepierdolenie 100 kapsli na głupoty.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $rozrzutny_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Rozrzutny 3</h3>
											Za przepierdolenie 150 kapsli na głupoty.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $sugar_daddy_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Sugar Daddy 1</h3>
											Za wpłatę na rzecz frakcji 50 kapsli.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $sugar_daddy_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Sugar Daddy 2</h3>
											Za wpłatę na rzecz frakcji 100 kapsli.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $sugar_daddy_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Sugar Daddy 3</h3>
											Za wpłatę na rzecz frakcji 200 kapsli.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $sugar_daddy_4_ph ?>" />
										<span class="tooltiptext">
											<h3>Sugar Daddy 4</h3>
											Za wpłatę na rzecz frakcji 500 kapsli.
										</span>
									</div>

								</div>

							</div>
						</div>

						<div class="header_achiev">
							<p>
								Wastelandowe:
							</p>
							<div class="grid-container">

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $stalker_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Stalker 1</h3>
											Za wejście w 1 strefę radiacji bez odpowiedniego zabezpieczenia i przeżycie.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $stalker_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Stalker 2</h3>
											Za wejście w 2 strefy radiacji bez odpowiedniego zabezpieczenia i przeżycie.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $stalker_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Stalker 3</h3>
											Za wejście w 3 strefy radiacji bez odpowiedniego zabezpieczenia i przeżycie.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $tulacz_ph ?>" />
										<span class="tooltiptext">
											<h3>Tułacz</h3>
											Odwiedzenie bazy Traperów.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $podroznik_ph ?>" />
										<span class="tooltiptext">
											<h3>Podróżnik</h3>
											Odwiedzenie Cytadeli/Starej Siczy.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $wloczykij_ph ?>" />
										<span class="tooltiptext">
											<h3>Włóczykij</h3>
											Odwiedzenie Dziury.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $pielgrzym_ph ?>" />
										<span class="tooltiptext">
											<h3>Pielgrzym</h3>
											Odwiedzenie Ramatu i Wieży kontroli lotu.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $powsinoga_ph ?>" />
										<span class="tooltiptext">
											<h3>Powsinoga</h3>
											Odwiedzenie bagien.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $wojazer_ph ?>" />
										<span class="tooltiptext">
											<h3>Wojażer</h3>
											Odwiedzenie Hoteli.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $the_wanderer_ph ?>" />
										<span class="tooltiptext">
											<h3>The Wanderer</h3>
											Odwiedzenie bazy Traperów, Cytadeli, Dziury, Ramatu, Wieży kontroli lotu, Bagien i Hoteli.
										</span>
									</div>

								</div>


							</div>
						</div>

						<div class="header_achiev">
							<p>
								Inne:
							</p>
							<div class="grid-container">

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $mr_gumby_ph ?>" />
										<span class="tooltiptext">
											<h3>Mr. Gumby</h3>
											Za debilną akcje na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $oscar_ph ?>" />
										<span class="tooltiptext">
											<h3>Oscar</h3>
											Za najfajniejszą akcję na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $rasta_ph ?>" />
										<span class="tooltiptext">
											<h3>Rasta</h3>
											Za spizganie się tak że nie wziąłęśaś udziału w akcji.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $zul_ph ?>" />
										<span class="tooltiptext">
											<h3>Żul</h3>
											Za bycie zbyt najebanym na udział w akcji.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $chmielu_ph ?>" />
										<span class="tooltiptext">
											<h3>Łana bi Chmielu!</h3>
											Za najebanie się każdego dnia PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $trzezwy_ph ?>" />
										<span class="tooltiptext">
											<h3>Trzeźwy</h3>
											Za nienawalenie się ani razu na PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $night_watch_ph ?>" />
										<span class="tooltiptext">
											<h3>Night Watch</h3>
											3 lub więcej wart podczas PP.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $guardian_angel_1_ph ?>" />
										<span class="tooltiptext">
											<h3>Guardian Angel 1</h3>
											Uratowanie życia członkowi frakcji 1 raz.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $guardian_angel_2_ph ?>" />
										<span class="tooltiptext">
											<h3>Guardian Angel 2</h3>
											Uratowanie życia członkowi frakcji 3 razy.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $guardian_angel_3_ph ?>" />
										<span class="tooltiptext">
											<h3>Guardian Angel 3</h3>
											Uratowanie życia członkowi frakcji 5 razy.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $unholy_one_ph ?>" />
										<span class="tooltiptext">
											<h3>Unholy One!</h3>
											Wykonanie wyroku na członku frakcji skazanego na śmierć.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $captain_wanna_be_ph ?>" />
										<span class="tooltiptext">
											<h3>Captain wanna be!</h3>
											Za amputacje prawej nogi.
										</span>
									</div>

								</div>

								<div class="grid-item">
									<div class="tooltip">
										<img src="<?php echo $szambor_ph ?>" />
										<span class="tooltiptext">
											<h3>szamborowy przeszczep</h3>
											Dostań dziwny przeszczep.
										</span>
									</div>

								</div>

							</div>
						</div>
			</div>

			<div class="history">
				<h1 align=center>Historia</h1>
				<?php echo $character_history ?>
			</div>


		</div>
	</div>
</body>

</html>