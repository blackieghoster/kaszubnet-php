<?php
	
	include 'lib/character_data_edit_PDO.php';

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>KASZUBnet!</title>
	<link rel="stylesheet" href="stylestrony9.css">
	
<style>
	.error{
		color:red;
		margin-top: 10px;
		margin-bottom: 10px;
		font-size: 12px;
	}

	.boxlista {
		float: left;
		width: 100%;
		padding: 10px;
		margin: 0px 0px 0px 0px;
		padding: 0px;
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
		grid-template-columns: auto auto auto;
		grid-column-gap: 10px;
		grid-row-gap: 10px;
		padding: 20px;
	}
	.grid-item {
		
		color: #37F79F;
		border: 1px solid #37F79F;
		height: 2320px;
		padding: 10px;
		font-size: 30px;
		text-align: left;
		font-size: 21px;
	}

	.powrot {
		width: 150px;
	}

	input {
		width: 100%;
	}

	input[type=text] {
		border: 3px solid #37F79F;
		border-radius: 3px;
	}

	.flex-container {
		height: 2800px;
	}

</style>
</head>

<body>
<div class="flex-container">
	<div class="clearfix">
		<div class="powrot">
		<p><a href="polog.php">KASZUBnet</a>>Edycja</p>
		</div>
			<div class="box1">
			<p id="header">Edycja danych i wyposażenia</p>
			<h3>//UWAGI:</h3>
			<h4>//Aby upewnić się że baza danych została w pełni zaktualizowana, zalecamy ponowne zalogowanie!</h4>
			<h4>//Polskie znaki nie zawsze są wyświetlane poprawnie, zalecamy ich nie używać!</h4>
			<h4>// PRZESYŁANIE ZDJĘĆ - wielkość zdjecia podana na przyciku do każdego przedmiotu!</h4>
			<br>
				<div class="boxlista">
					<div class="grid-container">
						<!--- DANE LOGOWANIA ---> 

						<div class="grid-item"><h2 align=center>Dane logowania </h2><br><br>
							<form method="post">
								Login:<?php echo $login; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_login']))
									{
										echo $_SESSION['fr_login'];
										unset($_SESSION['fr_login']);
									}
								?>" name="login" placeholder="Login do KASZUBneta" />
								
								<?php
									if (isset($_SESSION['e_login']))
									{
										echo '<div class="error">'.$_SESSION['e_login'].'</div>';
										unset($_SESSION['e_login']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<br>			
							<form method="post">
								Hasło:<?php echo $haslo; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_haslo']))
									{
										echo $_SESSION['fr_haslo'];
										unset($_SESSION['fr_haslo']);
									}
								?>" name="haslo" placeholder="Hasło do KASZUBneta" />
								
								<?php
									if (isset($_SESSION['e_haslo']))
									{
										echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
										unset($_SESSION['e_haslo']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
						</div>

						<!--- DANE ---> 

						<div class="grid-item"><h2 align=center>Dane</h2><br><br>
							<form method="post">
							Imie:<?php echo $imie; ?><input type="text" value="<?php
								if (isset($_SESSION['fr_imie']))
								{
									echo $_SESSION['fr_imie'];
									unset($_SESSION['fr_imie']);
								}
							?>" name="imie" placeholder="Twoje imie/ksywa/nazwisko">
							
							<?php
								if (isset($_SESSION['e_imie']))
								{
									echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
									unset($_SESSION['e_imie']);
								}
							?>
									<input type="submit" value="Prześlij!" />
							</form>
							<br>

							<form action="uploads/upload.php" method="post" enctype="multipart/form-data">
							Prześlij swoje zdjęcie (240x320px):
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie" name="submit">
							</form>
							<br>
							<form method="post">
							
							Wiek:<?php echo $wiek; ?><input type="text" value="<?php
								if (isset($_SESSION['fr_wiek']))
								{
									echo $_SESSION['fr_wiek'];
									unset($_SESSION['fr_wiek']);
								}
							?>" name="wiek" placeholder="Wiek/data urodzenia/rok urodzenia" />
							
							<?php
								if (isset($_SESSION['e_wiek']))
								{
									echo '<div class="error">'.$_SESSION['e_wiek'].'</div>';
									unset($_SESSION['e_wiek']);
								}
							?>
									<input type="submit" value="Prześlij!" />
							</form>
							<br>
							<form method="post">
							Funkcja:<?php echo $funkcja; ?><input type="text" value="<?php
								if (isset($_SESSION['fr_funkcja']))
								{
									echo $_SESSION['fr_funkcja'];
									unset($_SESSION['fr_funkcja']);
								}
							?>" name="funkcja" placeholder="Funkcja we frakcji" />
							
							<?php
								if (isset($_SESSION['e_funkcja']))
								{
									echo '<div class="error">'.$_SESSION['e_funkcja'].'</div>';
									unset($_SESSION['e_funkcja']);
								}
							?>
									<input type="submit" value="Prześlij!" />
							</form>
							<br>
							<form method="post">
							Pochodzenie:<?php echo $pochodzenie; ?><input type="text" value="<?php
								if (isset($_SESSION['fr_pochodzenie']))
								{
									echo $_SESSION['fr_pochodzenie'];
									unset($_SESSION['fr_pochodzenie']);
								}
							?>" name="pochodzenie" placeholder="Pochodzenie: miejscowoć/region" />
							
							<?php
								if (isset($_SESSION['e_pochodzenie']))
								{
									echo '<div class="error">'.$_SESSION['e_pochodzenie'].'</div>';
									unset($_SESSION['e_pochodzenie']);
								}
							?>
									<input type="submit" value="Prześlij!" />
							</form>
							<br>
							<form method="post">
							Zawód:<?php echo $zawod; ?><input type="text" value="<?php
								if (isset($_SESSION['fr_zawod']))
								{
									echo $_SESSION['fr_zawod'];
									unset($_SESSION['fr_zawod']);
								}
							?>" name="zawod" placeholder="Czym się trudnisz"/>
							
							<?php
								if (isset($_SESSION['e_zawod']))
								{
									echo '<div class="error">'.$_SESSION['e_zawod'].'</div>';
									unset($_SESSION['e_zawod']);
								}
							?>
									<input type="submit" value="Prześlij!" />
							</form>
							<br>
							<form method="post">
							Specjalizacja:<?php echo $specjal; ?><input type="text" value="<?php
								if (isset($_SESSION['fr_specjal']))
								{
									echo $_SESSION['fr_specjal'];
									unset($_SESSION['fr_specjal']);
								}
							?>" name="specjal" placeholder="Twoja specjalizacja np. handel, anomalie" />
							
							<?php
								if (isset($_SESSION['e_specjal']))
								{
									echo '<div class="error">'.$_SESSION['e_specjal'].'</div>';
									unset($_SESSION['e_specjal']);
								}
							?>
									<input type="submit" value="Prześlij!" />
							</form>
							<br>
							<form method="post">
							Wiara:<?php echo $wiara; ?><input type="text" value="<?php
								if (isset($_SESSION['fr_wiara']))
								{
									echo $_SESSION['fr_wiara'];
									unset($_SESSION['fr_wiara']);
								}
							?>" name="wiara" placeholder="W co wierzysz" />
							
							<?php
								if (isset($_SESSION['e_wiara']))
								{
									echo '<div class="error">'.$_SESSION['e_wiara'].'</div>';
									unset($_SESSION['e_wiara']);
								}
							?>
									<input type="submit" value="Prześlij!" />
							</form>
							<br>
							<form method="post">
							Pory Przybyszów:<?php echo $pory; ?><input type="text" value="<?php
								if (isset($_SESSION['fr_pory']))
								{
									echo $_SESSION['fr_pory'];
									unset($_SESSION['fr_pory']);
								}
							?>" name="pory" placeholder="Lata uczestnictwa w Porze Przybyszów"/>
							
							<?php
								if (isset($_SESSION['e_pory']))
								{
									echo '<div class="error">'.$_SESSION['e_pory'].'</div>';
									unset($_SESSION['e_pory']);
								}
							?>
									<input type="submit" value="Prześlij!" />
							</form>
						</div>

						<!--- WYPOSAŻENIE ---> 		
							
						<div class="grid-item"><h2 align=center>Wyposażenie</h2><br><br>

							<form method="post">
								Broń rzucana:<?php echo $bron_rzucana; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_bron_rzucana']))
									{
										echo $_SESSION['fr_bron_rzucana'];
										unset($_SESSION['fr_bron_rzucana']);
									}
								?>" name="bron_rzucana" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_bron_rzucana']))
									{
										echo '<div class="error">'.$_SESSION['e_bron_rzucana'].'</div>';
										unset($_SESSION['e_bron_rzucana']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_br.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x120px" name="submit">
							</form>

							<br>
							<form method="post">
								Hełm:<?php echo $helm; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_helm']))
									{
										echo $_SESSION['fr_helm'];
										unset($_SESSION['fr_helm']);
									}
								?>" name="helm" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_helm']))
									{
										echo '<div class="error">'.$_SESSION['e_helm'].'</div>';
										unset($_SESSION['e_helm']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_helm.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x120px" name="submit">
							</form>

							<br>
							<form method="post">
								Maska przeciwgazowa:<?php echo $maska; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_maska']))
									{
										echo $_SESSION['fr_maska'];
										unset($_SESSION['fr_maska']);
									}
								?>" name="maska" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_maska']))
									{
										echo '<div class="error">'.$_SESSION['e_maska'].'</div>';
										unset($_SESSION['e_maska']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_maska.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x120px" name="submit">
							</form>

							<br>
							<form method="post">
								Tarcza:<?php echo $tarcza; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_tarcza']))
									{
										echo $_SESSION['fr_tarcza'];
										unset($_SESSION['fr_tarcza']);
									}
								?>" name="tarcza" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_tarcza']))
									{
										echo '<div class="error">'.$_SESSION['e_tarcza'].'</div>';
										unset($_SESSION['e_tarcza']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_t.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 270x250px" name="submit">
							</form>

							<br>
							<form method="post">
								Palna długa:<?php echo $palna_dluga; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_palna_dluga']))
									{
										echo $_SESSION['fr_palna_dluga'];
										unset($_SESSION['fr_palna_dluga']);
									}
								?>" name="palna_dluga" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_palna_dluga']))
									{
										echo '<div class="error">'.$_SESSION['e_palna_dluga'].'</div>';
										unset($_SESSION['e_palna_dluga']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_pd.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x280px" name="submit">
							</form>

							<br>
							<form method="post">
								Pancerz:<?php echo $pancerz; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_pancerz']))
									{
										echo $_SESSION['fr_pancerz'];
										unset($_SESSION['fr_pancerz']);
									}
								?>" name="pancerz" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_pancerz']))
									{
										echo '<div class="error">'.$_SESSION['e_pancerz'].'</div>';
										unset($_SESSION['e_pancerz']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_pancerz.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x280px" name="submit">
							</form>

							<br>
							<form method="post">
								Poziom pancerza:<?php echo $pancerz_poz; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_pancerz_poz']))
									{
										echo $_SESSION['fr_pancerz_poz'];
										unset($_SESSION['fr_pancerz_poz']);
									}
								?>" name="pancerz_poz" placeholder="Poziom" />
								
								<?php
									if (isset($_SESSION['e_pancerz_poz']))
									{
										echo '<div class="error">'.$_SESSION['e_pancerz_poz'].'</div>';
										unset($_SESSION['e_pancerz_poz']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<br>
							<form method="post">
								Poziom odp. na radiacje:<?php echo $rad_poz; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_rad_poz']))
									{
										echo $_SESSION['fr_rad_poz'];
										unset($_SESSION['fr_rad_poz']);
									}
								?>" name="rad_poz" placeholder="Poziom" />
								
								<?php
									if (isset($_SESSION['e_rad_poz']))
									{
										echo '<div class="error">'.$_SESSION['e_rad_poz'].'</div>';
										unset($_SESSION['e_rad_poz']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<br>
							<form method="post">
								Spodnie/Pancerz-nogi:<?php echo $spodnie; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_spodnie']))
									{
										echo $_SESSION['fr_spodnie'];
										unset($_SESSION['spodnie']);
									}
								?>" name="spodnie" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_spodnie']))
									{
										echo '<div class="error">'.$_SESSION['e_spodnie'].'</div>';
										unset($_SESSION['e_spodnie']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_spodnie.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x280px" name="submit">
							</form>

							<br>
							<form method="post">
								Broń biała dwuręczna:<?php echo $biala_dwu; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_biala_dwu']))
									{
										echo $_SESSION['fr_biala_dwu'];
										unset($_SESSION['fr_biala_dwu']);
									}
								?>" name="biala_dwu" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_biala_dwu']))
									{
										echo '<div class="error">'.$_SESSION['e_biala_dwu'].'</div>';
										unset($_SESSION['e_biala_dwu']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_bd.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x280px" name="submit">
							</form>

							<br>
							<form method="post">
								Broń biała jednoręczna:<?php echo $biala_jedno; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_biala_jedno']))
									{
										echo $_SESSION['fr_biala_jedno'];
										unset($_SESSION['fr_biala_jedno']);
									}
								?>" name="biala_jedno" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_biala_jedno']))
									{
										echo '<div class="error">'.$_SESSION['e_biala_jedno'].'</div>';
										unset($_SESSION['e_biala_jedno']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_bj.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x280px" name="submit">
							</form>

							<br>
							<form method="post">
								Broń biała krótka/sztylet:<?php echo $biala_krotka; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_biala_krotka']))
									{
										echo $_SESSION['fr_biala_krotka'];
										unset($_SESSION['fr_biala_krotka']);
									}
								?>" name="biala_krotka" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_biala_krotka']))
									{
										echo '<div class="error">'.$_SESSION['e_biala_krotka'].'</div>';
										unset($_SESSION['e_biala_krotka']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_bk.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x120px" name="submit">
							</form>

							<br>
							<form method="post">
								Pistolet:<?php echo $pistolet; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_pistolet']))
									{
										echo $_SESSION['fr_pistolet'];
										unset($_SESSION['fr_pistolet']);
									}
								?>" name="pistolet" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_pistolet']))
									{
										echo '<div class="error">'.$_SESSION['e_pistolet'].'</div>';
										unset($_SESSION['e_pistolet']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<form action="uploads/upload_pistolet.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Prześlij zdjęcie 140x120px" name="submit">
							</form>

							<br>
							<form method="post" id="inne">
								Inne:<?php echo $inne; ?><input type="text" value="<?php
									if (isset($_SESSION['fr_inne']))
									{
										echo $_SESSION['fr_inne'];
										unset($_SESSION['fr_inne']);
									}
								?>" name="inne" placeholder="Opis/Nazwa" />
								
								<?php
									if (isset($_SESSION['e_inne']))
									{
										echo '<div class="error">'.$_SESSION['e_inne'].'</div>';
										unset($_SESSION['e_inne']);
									}
								?>
										<input type="submit" value="Prześlij!" />
							</form>
							<br>
								
						</div>

						</div>
				</div>
			</div>
	</div>
</div>
	<div class="footer"><h5>KASZUBnet ver.<?php echo $_SESSION['wersja']; ?></h5></div>	
</body>
</html>