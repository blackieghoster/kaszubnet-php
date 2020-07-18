<?php
session_start();
include '../lib/log_check.php'
?>

<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="i_members.css">
	<style>

	</style>
</head>

<body>
	<div class="clearfix">
		<div class="box1">
			<p id="header">
				<div class="glitch" data-text="Przystaniowcy">Przystaniowcy</div>
			</p>
			<br>
			<div class="boxlist">
				<div class="grid-container">

					<div class="grid-item">
						<form action="char_site_select.php" method="post">Talos
							<p align="center"><input class="talos" type="submit" name="id" value="1" /></p>
						</form>
					</div>

					<div class="grid-item">
						<form action="char_site_select.php" method="post">Strzygoń
							<p align="center"><input class="strzygon" type="submit" name="id" value="2" /></p>
						</form>
					</div>

					<div class="grid-item">
						<form action="char_site_select.php" method="post">Mur
							<p align="center"><input class="mur" type="submit" name="id" value="4" /></p>
						</form>
					</div>

					<div class="grid-item">
						<form action="char_site_select.php" method="post">Szopen
							<p align="center"><input class="szopen" type="submit" name="id" value="7" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">szambor
							<p align="center"><input class="szambor" type="submit" name="id" value="8" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Chmura
							<p align="center"><input class="chmura" type="submit" name="id" value="12" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Dimitri Morozow
							<p align="center"><input class="dimitri" type="submit" name="id" value="13" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Wasyl
							<p align="center"><input class="wasyl" type="submit" name="id" value="3" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Chmielu
							<p align="center"><input class="chmielu" type="submit" name="id" value="17" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Jerzy
							<p align="center"><input class="jerzy" type="submit" name="id" value="19" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Ignis
							<p align="center"><input class="ignis" type="submit" name="id" value="20" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Lucky
							<p align="center"><input class="lucky" type="submit" name="id" value="21" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Sierżant
							<p align="center"><input class="sierzant" type="submit" name="id" value="3" /></p>
						</form>
					</div>

					<div class="grid-item">
						<form action="char_site_select.php" method="post">Pastor Desmond
							<p align="center"><input class="pastor" type="submit" name="id" value="25" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Struna
							<p align="center"><input class="struna" type="submit" name="id" value="26" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Oko
							<p align="center"><input class="oko" type="submit" name="id" value="27" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Guma
							<p align="center"><input class="guma" type="submit" name="id" value="29" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Hex
							<p align="center"><input class="hex" type="submit" name="id" value="31" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Sierżant
							<p align="center"><input class="sierzant" type="submit" name="id" value="23" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Mera "Czarna"
							<p align="center"><input class="mera" type="submit" name="id" value="33" /></p>
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="box1">
			<p id="header">
				<div class="glitch" data-text="Rekruci">Rekruci</div>
			</p>
			<br>
			<div class="boxlist">
				<div class="grid-container">

					<div class="grid-item">
						<form action="char_site_select.php" method="post">Pijo
							<p align="center"><input class="pijo" type="submit" name="id" value="30" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Hans "Uli" Grundv
							<p align="center"><input class="uli" type="submit" name="id" value="34" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Hindus
							<p align="center"><input class="hindus" type="submit" name="id" value="37" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Rybak
							<p align="center"><input class="rybak" type="submit" name="id" value="38" /></p>
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="box1">
			<p id="header">
				<div class="glitch" data-text="Ostatnia ">Ostatnia </div>
			</p>
			<p id="header">
				<div class="glitch" data-text="Zatoka">Zatoka</div>
			</p>
			<br>

			<div class="boxlist">
				<div class="grid-container">

					<!--	<div class="grid-item"><a href="postacie/katrina.php">&#10013 R.I.P Katrina &#10013
				<p align="center"><img src="../zdjecia_pos/katrina.png"/></p></a></div> -->

					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Smuga &#10013
							<p align="center"><input class="smuga" type="submit" name="id" value="36" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Hafizullah &#10013
							<p align="center"><input class="hafi" type="submit" name="id" value="9" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Elwis &#10013
							<p align="center"><input class="elwis" type="submit" name="id" value="6" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Szakal &#10013
							<p align="center"><input class="szakal" type="submit" name="id" value="10" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Zombie &#10013
							<p align="center"><input class="zombie" type="submit" name="id" value="11" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Wieża &#10013
							<p align="center"><input class="wieza" type="submit" name="id" value="14" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Beret &#10013
							<p align="center"><input class="beret" type="submit" name="id" value="24" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Kangur &#10013
							<p align="center"><input class="kangur" type="submit" name="id" value="22" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013R.I.P Favaro Roche&#10013
							<p align="center"><input class="favaro" type="submit" name="id" value="35" /></p>
						</form>
					</div>

					<div class="grid-item">
						<form action="char_site_select.php" method="post">&#10013 R.I.P Laima &#10013
							<p align="center"><input class="laima" type="submit" name="id" value="32" /></p>
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="box1">
			<p id="header">
				<div class="glitch" data-text="Byli ">Byli </div>
			</p>
			<p id="header">
				<div class="glitch" data-text="Przystaniowcy">Przystaniowcy</div>
			</p>
			<br>

			<div class="boxlist">
				<div class="grid-container">

					<div class="grid-item">
						<form action="char_site_select.php" method="post">Łapa
							<p align="center"><input class="alter" type="submit" name="id" value="0" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Vladi
							<p align="center"><input class="alter" type="submit" name="id" value="0" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Vladimir
							<p align="center"><input class="alter" type="submit" name="id" value="0" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Tara
							<p align="center"><input class="alter" type="submit" name="id" value="0" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Shen
							<p align="center"><input class="alter" type="submit" name="id" value="0" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Pielgrzym
							<p align="center"><input class="pielgrzym" type="submit" name="id" value="5" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Ban
							<p align="center"><input class="ban" type="submit" name="id" value="28" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Elephant
							<p align="center"><input class="elephant" type="submit" name="id" value="18" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Modliszka
							<p align="center"><input class="modliszka" type="submit" name="id" value="15" /></p>
						</form>
					</div>
					<div class="grid-item">
						<form action="char_site_select.php" method="post">Negra
							<p align="center"><input class="negra" type="submit" name="id" value="16" /></p>
						</form>
					</div>

				</div>
			</div>
		</div>

	</div>

</body>

</html>