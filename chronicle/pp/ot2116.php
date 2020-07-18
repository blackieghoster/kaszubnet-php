<?php
session_start();
include '../../lib/log_check.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="../../css/style.css">

	<style>
		.flex-container {
			height: 1096px;
		}

		.box1 {
			float: left;
			width: 100%;
			border: 1px solid;
			padding: 0px 15px 0px;
		}

		p {
			font-size: 20px;
		}

		.back {
			width: 505px;
		}
	</style>
</head>

<body>

	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p style="font-size: 16px"><a href="../../main_menu.php">KASZUBnet</a>><a href="../chronicle.php">Kronika</a>><a href="../ot_chronicle.php">Kronika OldTown</a>>Pora_Przybyszów_-_2116</p>
			</div>
			<div class="box1">
				<p id="header">Pora_Przybyszów_-_2116</p>
				<div>
					<p>Wieczór 19.07.2116</p>
					<p>Rafineria</p>
					<p>Po oficjalnym rozpoczęciu Pory Przybyszów oraz wbiciu się Zakonu do miasta postanowiliśmy sprawdzić co dzieję się z rafinerią i czy wiedzą o całym zajściu, pomysłodawcą był szambor. Wyruszyliśmy w składzie Talos, Elwis, szambor, Mur, Pielgrzym, Vladimir, Katrina, Zombi i ktoś jeszcze... W mieście został Hafi który otworzył swoją herbaciarnię przy GiPach. Po wyjściu z miasta i dotarciu przed bazę Traperów rozdzieliliśmy się (część wolała iść z Traperami a druga część skrótem szambora).</p>

					<p>Ekipa pierwsza ...</p>
					<p>...po miłym zapoznaniu z traperami (nie ma to jak machanie i witanie się z działkiem na wieży) i zwerbowaniu jakiś dwóch niezrzeszonych udałą się droga w stronę Siczy.
						Po drodze jeden z Trepów z dupy wyciągnął z krzaków jakiegoś lamusa. Tak o go wykrył. Biedaka obrobili xD hahaha.
						Dalej była już tylko Sicz. Trochę był przypał bo zaczęli strzelać do trapera który poszedł jako pierwszy, a jak wiadomo oni są najbardziej neutralną frakcją.
						Tak czy inaczej umowę dotrzymali i doprowadzili nas do Siczy. Tyle ze Zombi stwierdził że chce wejść.
						To polazł i czekaliśmy na niego z 30 min, potem szli Alkochemicy i stwierdziliśmy że wracamy z nimi. Po drodze wytępiliśmy małą grupkę ghuli i natknęliśmy się na grupę raidersów.
						Dowódca Alkusów wziął ich dowódcę na zakładnika i jakoś przeszliśmy i wróciliśmy do miasta.</p>

					<p>Ekipa druga...</p>
					<p>... wiem ze dotarli do Siczy, ale szamborowi odcięli język bo coś usłyszał. Na całe szczęście wszyscy wrócili.</p>

					<p>20.07.2016 </p>
					<p>Rano Talos był nadal wkurwiony że nie da się zrozumieć szambora to załatwił mu operacje w miejskim szpitalu za 40 kapsli. Tak oto szambor zyskał nowy język ze swojego... napletka XD Przy okazji po obozach niezrzeszonych kręcili się wysłannicy zakonu. Trzeba powiedzieć że Zakon jest ślepy, mieliśmy na stole wypisane "Jebać Zakon", nie zauważyli.</p>

					<p>21.07.2116</p>
					<p>22.07.2116</p>
				</div>

			</div>
		</div>
	</div>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>