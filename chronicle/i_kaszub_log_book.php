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

	<link rel="stylesheet" href="../stylestrony9.css">

	<style>
		body {
			background-image: url("../i_tlo3.png");
		}

		.box1 {
			float: left;
			width: 100%;
			padding: 0px;
			margin: 0px;
			border: 1px solid;
		}

		p {
			font-size: 20px;
		}

		.menu {
			float: left;
			padding: 5px;
			margin: 0px 0px 0px 0px;
			border: 1px solid;
			width: 50%;
			text-align: center;
		}

		.dropbtn {
			background-color: green;
			color: black;
			padding: 18px;
			font-size: 20px;
			border: none;
			cursor: pointer;
			min-width: 160px;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: black;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: 37F79F;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {
			background-color: #f1f1f1
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
		}
	</style>
</head>

<body>

	<div class="clearfix">
		<div class="box1">
			<p id="header">Dziennik_Pokładowy</p>
			<h2 align="center">Dzieje Przystani spisane przez Pielgrzyma</h2>
		</div>
		<div class="menu">
			<div class="dropdown">
				<button class="dropbtn">Rok 2117</button>
				<div class="dropdown-content">
					<a href="#17-11">Listopad</a>
					<a href="#17-12">Grudzień</a>
				</div>
			</div>
		</div>
		<div class="menu">
			<div class="dropdown">
				<button class="dropbtn">Rok 2118</button>
				<div class="dropdown-content">
					<a href="#18-01">Styczeń</a>
					<a href="#18-02">Luty</a>
					<a href="#18-03">Marzec</a>
					<a href="#18-04">Kwiecień</a>
					<a href="#18-05">Maj</a>
					<a href="#18-06">Czerwiec</a>
					<a href="#18-07">Lipiec</a>
					<a href="#18-08">Sierpień</a>
					<a href="#18-09">Wrzesień</a>
					<a href="#18-10">Październik</a>
					<a href="#18-11">Listopad</a>
					<a href="#18-12">Grudzień</a>
				</div>
			</div>
		</div>
		<div class="box1">

			<h1 align="center" id="17-11">Listopad 2117 roku</h1>
			<p>- 30 listopada 2117 roku</p>
			<p>Wiele się wydarzyło. Dzisiaj trafiła do nas karawana Zombiego i już wiemy jaki jest dzień. Dostarczyli nam narzędzi, zapasów części, żywność i siłę rąk do pracy.
				Od teraz jest nas czterech więcej. Kerad, Unieć, Anysz, Sezerp i Xathor zostaną z nami i pomogą tworzyć Przystań. Do tego czasu zdążyliśmy już bardzo dużo osiągnąć.
				Zbadaliśmy cały statek i oczyściliśmy go z wszelkiego paskudztwa. Trafiliśmy na skład broni, amunicji i laboratorium badawcze. Inspekcją sprzętu zajął się Talos i Wasyl.
				Ja w wolnych chwilach rozglądałem się po laboratorium, próbując zrozumieć co tam się działo. Niestety praktycznie cały sprzęt jest usmażony i nie da się z niego nic wyciągnąć.
				Farma wygląda bardzo obiecująco. Już za dwa lata nie będziemy musieli polegać wyłącznie na polowaniu i przedwojennych zapasach. Ze wsparciem z karawany bierzemy się za budowę
				porządnych wiatraków i budynków gospodarskich w miejscu wypalonej neo-puszczy.</p>

			<h1 align="center" id="17-12">Grudzień 2117 roku</h1>
			<p>- 5 grudnia</p>
			<p>Robi się coraz zimniej. W kilka dni postawiliśmy wiatraki i magazyn na skraju puszczy. Niestety jeszcze nie możemy czerpać prądu. Musimy nazbierać mnóstwo opału na zimę.
				Zwierzęta chyba robią się coraz bardziej głodne, bo zbliżają się do osady. Musimy je zabijać lub przepędzać. Nie wszystkie nadają się do jedzenia... Czasem widuję dziwną postać
				między odległymi drzewami. Zdaje się błyskać na niebiesko... Chmielu widział to samo, ale poza nami nikt więcej. Jestem pewien, że coś nas obserwuje.</p>

			<p>- 7 grudnia</p>
			<p>To jest niewiarygodne! Strzygoń nas znalazł. Przeszedł w pojedynkę przez neo-puszczę. Wczoraj po prostu wyszedł z między drzew na plażę. Wyglądał okropnie, kiedy Negra go znalazła.
				Twarz miał zapadniętą, umazaną zakrzepłą krwią, w oczach szaleństwo. Zaprowadziliśmy go do lecznicy na Kaszubie. Negra, Szopen i ja tylko wiemy coś o leczeniu, ale boję się,
				że to może nie wystarczyć. Robimy co możemy. Nie wiemy co się działo ze Strzygoniem. Nie odezwał się ani słowem. Bełkocze coś tylko bez sensu o jakimś łyżkonium.
				Reszta zbiera opał na skraju puszczy. Zaraz... ktoś krzyczy...</p>

			<p>- 8 grudnia</p>
			<p>Naszych na plaży zaatakował wielki szpon śmierci. Chłopaki próbowali do niego strzelać, ale kule nie robiły mu żadnej krzywdy. Wybiegłem z lecznicy i zobaczyłem Elwisa na pokładzie.
				Trzymał jakąś wyrzutnię rakiet. Krzyknął tylko, żeby wszyscy spierdalali i wypalił z tej broni. Na Święty Płomień! Co to był za widok! Chłopaki strzelali do diabła ze wszystkich stron,
				żeby tylko nie podszedł do żadnego z nich i wtedy rakieta uderzyła potwora jak święty pocisk, rozrywając szpona śmierci na strzępy.
				Niestety nie zostało z bestii wiele, więc nie skorzystamy z jej truchła. A jego pancerna skóra na pewno nadałaby się na pancerz. ...............................
				Javelin... Tak się nazywa ta wyrzutnia. Elwis znalazł ją za jakąś skrzynią, którą musieliśmy przeoczyć w zbrojowni. To prawdziwy cud! Gdyby nie to, szpon śmierci by nas pozabijał.
				Na wyrzutni jest obrazek przedstawiający Pannę w zielonej szacie ze słońcem wokół głowy, trzymającą właśnie taką wyrzutnię. Święta Panna Javelinowa.
				Od dzisiaj to nasza patronka i oddajemy jej hołd.</p>

			<p>- 9 grudnia</p>
			<p>Sztrzygoń zapadł w śpiączkę. Nie wiemy co robić. Musimy jakoś go karmić i w ogóle... Czuwamy przy nim na zmianę. Góra opału jest już w ładowni Kaszuba, ale cały czas zbieramy więcej.
				Teraz mam trochę czasu, więc badam to dziwne laboratorium ..................................................................................................
				Z resztek dokumentów wynika, że pracowano tu nad jakimś dziwnym wirusem i jego próbki są przechowywane, uśpione w specjalnych pojemnikach. Skoro są uśpione, to chyba nie musimy się martwić.
				Talos zdecyduje później co z tym zrobimy.</p>
			<p>Niepokoi mnie Elwis. Mówił, że widział dwójkę dzieci bawiących się na plaży.</p>

			<p>- 31 grudnia</p>
			<p>Zrobiło się już naprawdę zimno. Silny wiatr wieje od morza. Wszyscy nocujemy na Kaszubie. Ogrzewamy statek i łatamy wszystkie dziury w poszyciu, żeby ciepło nie uciekało.
				Musieliśmy ocieplić nasze ubrania tym co znaleźliśmy. Kawałki z mundurów dawno martwych marynarzy, skóry zmutowanych zwierząt. Ciekawe jest to, że drewno,
				którym palimy bardzo ładnie pachnie... Musi być w nim jakaś żywica. Przypomina mi trochę te z okolic El-Bongo. Mam nadzieję, że nie działa podobnie. Nie chcę, żeby kogoś sparaliżowało.
				Strzygoniowi chyba trochę się poprawiło. Budzi się raz na dwa dni. Zjada wszystko co dostanie i znowu zasypia.</p>
			<p>Elwis znowu widział dwójkę dzieci na plaży.</p>

			<h1 align="center" id="18-01">Styczeń 2118 roku</h1>
			<p>- 1 stycznia</p>
			<p>Nowy rok powitaliśmy spokojnie. Nasze zapasy alkoholu są niewielkie, więc oszczędzamy je do celów medycznych. Powoli zaczyna się w nas stagnacja.
				Ludzie są ociężali i wszystko robią bardzo powoli. Zimno wysysa naszego ducha zapału. Kapitan już kilka godzin siedzi w swojej kajucie i nie odzywa się ani słowem.
				Myślę, że jemu też zdarzają się halucynacje.</p>

			<p>- 8 stycznia</p>
			<p>Nie mam siły pisać zbyt często. Chyba robię się chory. Całe szczęście Strzygoń wydobrzał, ale ma amnezję. Nie pamięta jak się dostał na Kaszuba, ani co widział w Neo-Puszczy.
				Talos musi mu wiele rzeczy wyjaśnić. Wasyl z nudów zaczął musztrować ludzi... to się nie może dobrze skończyć. Święty Płomieniu... jak długo będzie trwać zima?
				Szopen zaczął się dziwnie zachowywać... Mówi co chwila o swoim domu na Instalacji.</p>

			<p>- 15 stycznia</p>
			<p>Jestem chory. Kaszlę i mam gorączkę. Coś dziwnego dzieje się z moimi oczami... Cały czas łzawią. Całe szczęście, że Negra nie musi mnie pilnować.
				Odizolowałem się od reszty i leżę w swojej kajucie. Nie chcę nikogo zarazić. Potrzebuję herbaty... Herbaty! Może jakieś zioło z neo-puszczy jest w stanie ją zastąpić...
				Dlaczego siostra Bernadetta siedzi pod moimi drzwiami? Nie mam siły..............</p>

			<p>- 29 stycznia</p>
			<p>Wyzdrowiałem. Chwała Świętemu Płomieniowi za to. Było naprawdę źle. Majaczyłem i tłukłem się po swojej kajucie. Chmielu powiedział, że dla bezpieczeństwa zablokował mi drzwi
				od zewnątrz na jeden dzień. Cały czas jest potwornie zimno, a wiatr nie daje nam odpocząć. Mamy jeszcze sporo opału, ale wypad do lasu, żeby uzupełnić zapas będzie w konieczny.
				Nikomu się to nie uśmiecha. Nie wiemy jak neo-puszcza zachowuje się zimą. To kolejne wielkie ryzyko. Poza tym musimy znowu zapolować.
				Kończy nam się mięso. Jutro koniecznie trzeba zrobić rozpoznanie na plaży.</p>
			<p>Gdzie są błotniaki..? Widziałem wczoraj przez okno trzy, które tańczyły na plaży.</p>

			<p>- 31 stycznia</p>
			<p>Wczorajszy rekonesans dał nam dużo dobrych informacji. Wasyl najpierw sprawdził okolicę z wieżyczki na Kaszubie. Jakimś cudem nasze budynki gospodarskie na plaży wciąż stoją.
				Plaża w odległości około siedmiuset metrów od statku jest usłana wręcz błotniakami. Kilometr na zachód mają gniazdo... Może zima jest ich okresem migracji...
				Polowanie może być równie ryzykowne co opłacalne. Ja wyszedłem na skraj neo-puszczy, przez naszą farmę. Drzewa nie próbują upominać się o swoją ziemię, i dobrze. Nawet więcej.
				Las jest... cichy. Pusty. Jakby spał. Na próbę wszedłem kilka kroków między drzewa i nic się nie stało.
				Poszedłem trochę głębiej, skręciłem w stronę plaży i wyszedłem z pomiędzy uśpionych roślin jakby nigdy nic. Święty Płomieniu! Jakie mamy szczęście!</p>
			<p>Chmielu i Negra twierdzą, że widzieli wielkiego, złotego bramina, pasącego się w miejscu naszej farmy...</p>

			<h1 align="center" id="18-02">Luty 2118 roku</h1>
			<p>- 7 lutego</p>
			<p>Dziennik zmienia mi się w tygodnik, ale bardzo rzadko mam czas, żeby pisać. Pracujemy teraz nawet na mrozie. Talos rzucił tylko dziwny żart o jakimś "gułagu",
				kiedy usłyszał, że neo-puszcza jest uśpiona i kazał wycinać jak najwięcej drzew. Zalecił też z jakiegoś powodu, żeby wycinkę skierować na południowy-wschód.
				Nie mam pojęcia o co mu chodzi, ale oczy dziwnie mu się błyszczą kiedy patrzy w stronę lasu. Chmielu i Strzygoń polują co drugi dzień na błotniaki. Doszli w tym do naprawdę niezłej wprawy.
				Zastawiają pułapkę w piasku, odciągają jednego osobnika od gromady i napuszczając go na siebie nawzajem wprowadzają kraba we wnyki, które łamią mu odnóża. Kiedy błotniak nie może się ruszyć,
				długimi harpunami przebijają mu twarz. Dostarczają nam sporo mięsa. Zastanawiam się czy dałoby się jakoś wykorzystać pancerze tych wielkich krabów. Wydają się dość mocne.
				Przez tydzień ścięliśmy kolejne kilkanaście drzew. Z pni sączy się dziwna, gęsta żywica. Zebrałem trochę, żeby zastygła. Przypomina mi tradycję plemienia Popielnych z El-Bongo.
				Chyba spróbuję zrobić coś podobnego. Tak mała ilość nie będzie niebezpieczna.</p>

			<p>- 14 lutego</p>
			<p>Zmieszałem zastygłą żywicę z pachnącym ziołem. Dymi się dobrze na węglach i całkiem przyjemnie pachnie. Moim zdaniem. Wasyl ma zupełnie odmienne. Grunt,
				że nie wywołuje poważnych halucynacji. Może jakby trochę zwiększyć ilość, to kto wie. Nie chciałbym zapewnić załodze zbyt wielu wrażeń. Dzisiaj przeszedłem się brzegiem morza.
				Moją uwagę zwróciły niewielkie, jakby kamyki leżące na piasku. Mają barwę nuka-coli lub ciemnego piwa... Wyglądają jak kawałeczki żywicy. Bardzo stare. Ojciec kiedyś mówił mi o czymś takim.
				Jantary... Burze... Nie, nie burze... Bursztyny! Ciekawe co można z nimi zrobić. Spróbuję zalać ich trochę alkoholem. Zobaczymy co się stanie. A częścią wzbogacę kadzidło.
				Robota posunęła się naprzód. Wykarczowaliśmy kolejny kawałek lasu. Nie powiększamy jednak jeszcze farmy. Póki co zbieramy drewno. Część nadal spalamy na Kaszubie.
				Zima ciągle nas ściska mrozem.</p>

			<h1 align="center" id="18-03">Marzec 2118 roku</h1>
			<p>- 1 marca</p>
			<p>Spędziliśmy trochę czasu na badaniu tego laboratorium, ale nie odkryliśmy właściwie nic nowego. Wiemy nadal, że to wirus, nad którym prowadzono jakieś badania. O co mogło chodzić, nie mamy pojęcia. Znaleźliśmy jakieś holodyski, może w nich jest odpowiedź. Niestety bez działającego czytnika, na nic nam się przydadzą. Musimy nawiązać kontakt ze światem na zewnątrz. Szkoda, że radiostacja nie działa. Naprawiłbym ją, gdybym miał części... Może wyślemy chłopaków od Zombiego z wiadomością do TriCity, albo do OldTown. Ciekawe co u szambora. Mam nadzieję, że nasza placówka wciąż stoi. Dzisiaj przez cały dzień nikt nie widział Szopena...</p>

			<p>Anysz zaczął bredzić dzisiaj przy śniadaniu. Twierdzi, że wisi komuś napecram... Chyba musiał się dobrać do mojego zapasu kadzidła. Cholera, przydałyby się papierosy. Zioła z neo-puszczy nadają się do palenia. Niestety większość z nich tylko raz. Nasza wiedza jest tu bardzo ograniczona. Chyba spróbuję trochę pobadać roślinność, kiedy już wiosna się zacznie. Przydałyby się jakieś szczury doświadczalne. Niestety, szczury to zbyt ważny element diety. A teraz to w zasadzie rarytas. Święty Płomieniu! Jak dawno nie mieliśmy szczura w ustach...</p>

			<p>- 4 marca</p>
			<p>Dzisiaj na próbę, rozpaliłem trochę więcej kadzidła. Mogłem trochę przesadzić. Zadymiłem cały korytarz na górnym pokładzie przy naszych kajutach. Nie wywietrzało za szybko. Znowu kogoś widziałem... I nie tylko ja. Wasyl wbiegł do mojej kwatery, wściekły. Krzyczał, że widział ręce wyłażące ze ścian. Niemalże mnie pobił. Na moje szczęście usłyszał nas Elwis... Elwisowi chyba naprawdę się porządnie udzieliło. Wyglądał jakby zobaczył ducha. Był cały blady i roztrzęsiony. Musieliśmy wyprowadzić go na zewnątrz, żeby mu się polepszyło. Cholera... naprawdę przesadziłem. Prawie wszyscy widzieli jakichś marynarzy na statku. Następnym razem będę musiał ostrożniej dawkować.</p>

			<p>- 11 marca</p>
			<p>Wasyl dzisiaj ogłosił, że za niecały tydzień jest Dzień Świętego Patryka. Według niego to nadzwyczaj ważne święto w kraju skąd pochodzi. Musi być mnóstwo jedzenia i piwa, no albo innego alkoholu. Kapitanowi podoba się ten pomysł. Uważa, że zasłużyliśmy na świętowanie. Naprawdę dużo osiągnęliśmy. Farma jest w zasadzie gotowa, czekamy tylko aż puszczą mrozy, żeby zrobić pierwszy zasiew. Daje się odczuć przypływ nowych sił w ludziach. Powraca entuzjazm. Wiosna się zbliża. Mamy trochę mocnego bimbru z zapasów od Zombiego. Gdyby część rozwodnić, to powinien wyjść dość dobry trunek.

				<p>- 17 marca</p>
				<p>Tydzień minął na przygotowaniach do tej chwili. Za godzinę zbieramy się w messie i zaczynamy święto. Napiszę coś jak wrócę do siebie..........................................................................................

					<p>- 18 marca</p>
					<p>O Święty Płomieniu... CO SIĘ DZIAŁO TO JA NAWET NIE WIEM. Prawie wszystkim nam się urwał film. W messie stoi pięć wiader pełnych rzygów, a dookoła nich kałuże. Kapitan leży u siebie skacowany. Elwis udaje, że mopuje podłogę, a w rzeczywistości śpi na stojąco. Wasyl czołga się jeszcze po plaży i krzyczy, że płynie do Szkocji. Chmielu siedzi sobie jakby nigdy nic na podłodze i przytula pusty baniak. Negra zaszyła się gdzieś w ambulatorium i pewnie uszczupla nasze zapasy środków przeciwbólowych. Reszta śpi rozwalona po całym Kaszubie.......................................................................................... Przeszedłem się jeszcze raz po statku. Nigdzie nie ma Szopena. Zniknął! Nikt go nigdzie nie widział od wczoraj, kiedy zaczęliśmy pić. Musimy spróbować go znaleźć. Neo-puszcza może się już niedługo przebudzić.</p>

					<p>- 25 marca</p>
					<p>Szukaliśmy Szopena gdzie tylko się dało, chłopaki zaszli nawet w okolice leża błotniaków, ale i tam nie było jego śladów. Do neo-puszczy nie wchodziliśmy zbyt głęboko, bo las się już przebudził. Rośliny zaczynają się powoli ruszać. Pnącza odżyły i śledzą nas między drzewami. Chyba musimy się pogodzić, że Szopen zniknął. Zaraz... a może ta Instalacja... Nie. Niemożliwe. Jakby się tam dostał...............................................</p>

					<p>- 29 marca</p>
					<p>Od paru dni nie było żadnych przymrozków. Robi się coraz cieplej. Chwała Świętemu Płomieniowi! Zima się skończyła. Dzisiaj zasialiśmy pierwsze ziarno na naszej farmie. To było wielkie wydarzenie dla nas wszystkich. Jeśli się poszczęści to w sierpniu zbierzemy pierwszy plon. Nie liczę na to, że będzie obfity, ale jestem pewien, że jaki nie będzie, podniesie morale wszystkich. Doświadczenie na farmach Breslau bardzo mi pomagło. Powinniśmy ogrodzić pole przynajmniej od strony neo-puszczy. Nie chcę, żeby zwierzęta zniszczyły naszą pracę.</p>

					<h1 align="center" id="18-04">Kwiecień 2118 roku</h1>
					<p>- 1 kwietnia</p>
					<p>Nigdy więcej żartów z Kapitana. Ale teraz mam pewność, że jego też dręczą halucynacje.

						<p>- 2 kwietnia</p>
						<p>Musimy opracować jakiś sposób nawadniania pola. Morska woda się do tego zdecydowanie nie nadaje. W pobliżu powinna być jakaś rzeka, strumień, cokolwiek. Jutro wybiorę się z Kapitanem na pierwsze rozpoznanie w głąb puszczy. We dwóch powinniśmy sobie poradzić. Reszta w tym czasie zajmie się budową ogrodzenia.</p>

						<p>- 3 kwietnia</p>
						<p>Dziś rano Talos i ja weszliśmy do neo-puszczy. Przeszliśmy kawałek na południe, potem skręciliśmy na wschód. Las przyjął nas, tak jakby. Cały czas czuję jak jego energia nas obserwuje, ale jeszcze nic nas nie zaatakowało. Mamy zapas jedzenia na jakieś dwa dni. Nie zamierzamy tu spędzić więcej czasu. Zrobiliśmy sobie krótki postój, ale trzeba zaraz iść dalej... Po drodze pozbieram trochę ziół do badań.
							<p>Cholera! Mało brakowało. Jakaś wielka świnia nas zaatakowała. Talos uskoczył w krzaki, a ja wdrapałem się na drzewo w tempie jakiego bym się po sobie nie spodziewał. Przypadkiem strąciłem jakiś dziwny owoc, który na ziemi... eksplodował jakimś gazem. To musi być jakaś trucizna, bo świniak nawdychał się tego i zasnął. Zebrałem kilka tych bulwiastych owoców do torby. Zbadam je na Kaszubie dokładniej, jeśli jakieś zostaną. Może przydadzą się nam do obrony jeszcze w lesie. Talos dobił świnię i ruszyliśmy dalej. Chyba na wschód. Kompas zaczyna się dziwnie zachowywać.....................</p>
							<p>Ściemnia się. Musimy przenocować. Raczej się nie wyśpimy. Czuwamy na zmianę przy małym ognisku. Oby było spokojnie. Dziwne... jakby światło Księżyca przebija się przez korony drzew. To chyba zły znak.</p>

							<p>- 4 kwietnia?</p>
							<p>Rano obudziliśmy się nie tam, gdzie obozowaliśmy. Ale jakim cudem? Przecież praktycznie nie spaliśmy. Jesteśmy na jakiejś płycie betonu... Co to może być? Wszędzie pełno jest pnączy, bluszczy, ale drzewa w tej okolicy są trochę mniejsze, jakby rosły krócej. Talos myśli co robić. Zaraz... co tam tak świeci? O PRZECHUJ! ................................................................................................. Widziałem to! Kapitan też widział. Niebo rozbłysło jakby od miliona błyskawic. Słyszeliśmy eksplozje, hałas startujących rakiet. Pociski leciały we wszystkie strony, powietrze stanęło w ogniu. Wokoło biegali żołnierze, krzycząc, że wojna, koniec świata, trzeba wystrzelić kolejne pociski. W końcu jakaś rakieta uderzyła obok nas. Podmuch rzucił nas na kolana. Przecież powinno nas spalić. Jakim cudem żyjemy? Halucynacje... Mieliśmy identyczne. Jak to możliwe? Musimy już iść dalej. Nie mamy już za dużo zapasów. Zwiedzimy tylko tę okolicę i spróbujemy wrócić na Kaszuba. ................................................................................................. To jest wręcz niepojęte jakie mamy szczęście, jak dużo pracy jeszcze i jaką właśnie potęgę znaleźliśmy! Opiszę wszystko dokładniej jak już będziemy bezpieczni. Teraz musimy wracać do domu. Powinniśmy zdążyć do jutra. Wystarczy, że będziemy szli w kierunku morza. Raczej nie będzie trudno, czuć tutaj bryzę, znaczy, że nie jesteśmy daleko od brzegu.</p>

							<p>-15 kwietnia</p>
							<p>Kiedy wyszliśmy z neo-puszczy, spokojnie przegryzając ostatnie kawałki suszonego błotniaka, wszyscy z Przystani wybiegli do nas. Ściskali nas, nazywali dupkami, krzyczeli, znowu ściskali i pytali czemu ten zwiad zajął nam tak dużo czasu. Powiedzieli, że nie było nas prawie dwa tygodnie. Dla nas minęły może dwa dni. Nawet zapasy, które zabraliśmy z Kaszuba skończyliśmy dopiero teraz. Musieliśmy wejść w jakąś anomalię. To tłumaczy też nasze halucynacje. Mieliśmy sporo do opowiedzenia, ale tutaj też się trochę wydarzyło. Po pierwsze rośliny zaczęły już wschodzić. To bardzo dobry znak. Pole jest pełne maleńkich kukurydz i kiełków zboża. Po drugie, chłopakom udało się dokończyć ogrodzenie. Kolejna dobra rzecz. Po trzecie, to już gorzej, Strzygonia dziabnął błotniak na polowaniu.Obejrzałem szybko ranę na nodze. Całe szczęście to nic poważnego, ale ktoś musi go zastąpić na dwa tygodnie przy następnych łowach. Elephant się zgłosił na ochotnika. Mam nadzieję, że nas nie zawiedzie.</p>
							<p>Po tym jak wyjaśniliśmy, co udało nam się znaleźć na w neo-puszczy, wszyscy wiwatowali, albo dziękowali Świętej Pannie Javelinowej. Nie ma co się dziwić. Najprawdopodobniej trafiliśmy na przedwojenną bazę wojskową. Kapitan chce odzyskać z niej tyle ile tylko się da. Czeka nas mnóstwo pracy.</p>

							<p>- 20 kwietnia</p>
							<p>Doglądam rany Strzygonia. Strasznie się wkurza, że dał się tak załatwić byle błotniakowi, ale przesadza. Jeszcze tydzień będzie musiał wytrzymać. A Elephant radzi sobie wcale nie najgorzej. Chmielu szybko go nauczył co i jak. W końcu miałem też trochę czasu zbadać część roślin, które zebrałem w neo-puszczy. Te dziwne owoce są dosyć twarde, ale pękają po uderzeniu w ziemię. Jeden stoczył mi się z blatu. Obudziłem się po kilku minutach. Ten silny gaz usypiający musi byś wewnątrz tych małych pęcherzyków w środku owocu. Z ziół wybrałem tylko te pachnące. Wszystkie musiałem wcześniej ususzyć. Później zobaczę, które nadają się do palenia, a które na napary. Strzygonia chyba męczy jakaś halucynacja. Wołał kogoś przez sen. Krzyczał, że zabije jakiegoś Marszałka.</p>

							<p>- 22 kwietnia</p>
							<p>Przyszedł do nas MUR, Wieża, Dimitri i jeszcze jeden najemnik z Północy, Sierżant. Jakimś cudem przeżyli przejście przez neo-puszczę. Musieliśmy poświęcić trochę czasu, żeby ich doprowadzić do porządku, bo to, że przeżyli, to jedno. Ale ich stan... dał nam mnóstwo pracy. Teraz śpią, najedzeni pieczystym błotniakiem. Później opowiemy sobie wszystko.</p>

							<p>- 23 kwietnia</p>
							<p>Chłopaki odpoczywają nadal. Doglądam ich z Negrą i Talosem. Mieli jakieś wizje... trochę majaczą. Wieża ocknął się i stwierdził, że musi iść. Koniecznie musi iść. Nie mam pojęcia o co mu chodzi, ale jakoś go przekonaliśmy, żeby jeszcze został.</p>
							<p>Powrócił mi ból głowy... Widziałem Tatkę na dziobie. Święty Płomieniu... On już tak długo nie żyje. Dawno o nim nie myślałem.</p>

							<p>-24 kwietnia</p>
							<p>Wieża zniknął! Do cholery! Musiał się wymknąć w nocy. Jakim cudem mogliśmy nie pomyśleć, żeby ktoś pilnował lecznicy? Sprawdziliśmy plażę w promieniu niemal kilometra. W końcu znaleźliśmy jego ślady w okolicy neo-puszczy. Idiota wszedł sam do środka! W dodatku do części, której jeszcze nie zbadaliśmy dokładnie. Możemy mieć tylko nadzieję, że las nie zwróci tak dużej uwagi na pojedynczego intruza.</p>

							<p>- 25 kwietnia</p>
							<p>Mur, Dimitri i Sierżant wreszcie wydobrzeli na tyle, żeby spokojnie z nami porozmawiać. Powiedzieli, że przeszli z zamku Północy do TriCity, spotkać się z Zombim, a potem mając informacje o naszym położeniu starali się dotrzeć do nas. Podróż na Kaszuba była dla nich podobną trudnością jak dla nas; dziewięć miesięcy temu. Święty Płomieniu... już tyle tu jesteśmy. Droga przez neo-puszczę okazała się dla nich najtrudniejszym sprawdzianem woli. Widzieli bardzo dużo, ale nie mają pojęcia ile z tego było prawdziwe. Dziwne cienie, błyski, zjawy zmarłych przyjaciół. Nas też to prześladuje. Najważniejsze, że zdecydowali się zostać z nami przy Kaszubie. Potrzebujemy wszystkich rąk do pracy.</p>

							<p>- 28 kwietnia</p>
							<p>Strzygoń wydobrzał już na tyle, żeby wrócić do pracy i polowań. Rośliny rosną coraz większe. Jest nawet lepiej niż przypuszczałem. Chmielu miał kolejne halucynacje. W nocy wydzierał się, że coś chce go zabić, ale w jego kajucie nie było niczego. Muszę wrócić do eksperymentów z ziołami. Może jakieś są w stanie osłabić przewidzenia. Niebo się zachmurzyło. Dziwnie tak... nie widzieć Słońca.</p>

							<h1 align="center" id="18-05">Maj 2118 roku</h1>
							<p>- 2 maja</p>
							<p>Od paru dni ciągle pada drobny deszcz. Pracujemy mimo tego. Musimy poprawić system irygacji pola. Jeśli będzie padać mocniej to ryzykujemy, że pole zostanie zalane. Po mokrym piasku źle się chodzi, ale to nie jest w połowie tak nieprzyjemne jak dziesięciu mutantów, którzy codziennie podchodzą na dwadzieścia metrów do płotu farmy i uciekają jak tylko nas zobaczą. Skąd oni się wzięli? Wasyl twierdzi, że noszą na sobie resztki wojskowych mundurów.</p>
							<p>Talos dzisiaj wieczorem krzyczał do kogoś w swojej kajucie. Nie powiedział, kogo widział, ani czemu nazywał tego kogoś "niewierną dziwką".</p>

							<p>- 7 maja</p>
							<p>W końcu dopadliśmy tych mutantów. Kapitan stwierdził, że nie można im odpuścić. Za bardzo sobie pozwalały na podchodzenie do nas. Dzisiaj nie wyszliśmy normalnie pracować. Kilku miało zostać, żeby pilnować Kaszuba. Uzbroiliśmy się i gdy tylko zauważyliśmy mutantów, ruszyliśmy za nimi w pogoń. Chłopaki ostrzelali ich jeszcze z plaży, zanim zdążyli uciec między drzewa. Kilku padło. Chyba czterech. Reszta wbiegła do neo-puszczy, a my za nimi. Goniliśmy ich długo, ale byli szybsi. W końcu urwali się nam. Tylko dwóch udało się jeszcze ustrzelić. Wbiegliśmy kilkaset metrów w głąb lasu... Teraz musimy się szybko wydostać i uważać na resztę tych drani.</p>

							<p>- 8 maja</p>
							<p>Możliwe, że wczoraj zrobiliśmy błąd. Mieliśmy za to bardzo dużo szczęścia. Po zaprzestaniu pościgu odkryliśmy, że mutanty zaprowadziły nas w pobliże tej bazy wojskowej, w której Talos i ja widzieliśmy Dzień Ognia. Przynajmniej wiedzieliśmy gdzie nas wyniosło. Szybko obraliśmy kierunek na plażę, żeby nie pozostawać w neo-puszczy tak dużą grupą. Drzewa już zaczynały się dziwnie wyginać... Musimy się przyjrzeć trupom, które zostawiliśmy na plaży.</p>
							<p>Nie ma ich! Ciała zniknęły. Zostały po nich tylko plamy ciemnej krwi, wsiąkającej w szary piasek.</p>
							<p>Strzygoń i Elwis mieli jakieś zwidy znowu. Szaleństwo wbija się w nas jak nóż. Jak nóż w miękkie mięsko błotniaka.. Tak... Pyszne mięsko.</p>

							<p>- 15 maja</p>
							<p>Prawie zapomnieliśmy o tych mutantach. Wróciliśmy do w miarę spokojnej pracy. Badam dalej zioła. Czasem wychodzę do znanych mi miejsc w neo-puszczy po nowe. Wychodzi na to, że odkryłem jakieś, które może wywołać silniejsze halucynacje i inne, powodujące agresję. Nie do końca o to mi chodziło, ale nie wiadomo co się może przydać. Muszę napisać kartki ostrzegawcze, żeby nikt nie próbował nic palić w mojej pracowni bez pytania. Ledwo odratowałem Wasyla kiedy skręcił sobie papierosa z "czarną pokrzywą". Dostał takiego napadu szału, że o mało nie rozbił sobie głowy o ścianę. Całe szczęście, że atak był krótkotrwały.</p>
							<p>Jest noc, ale Księżyc świeci jasno. Okropnie boli mnie głowa. Nie mam pojęcia co się dzieje. Wszystko widzę na czerwono...</p>

							<p>- 20 maja</p>
							<p>Wieczorem morze wyrzuciło niewielką, dziwaczną łódkę na brzeg. Z jednym pasażerem. Gość mówi praktycznie tylko po angielsku. Nazywa się Ignis i twierdzi, że Szopen przysłał go z Instalacji... To strasznie podejrzane. Musimy z Kapitanem go przesłuchać i dowiedzieć się co to za jeden. Może nam się przyda ................................................................................................... Miał przy sobie wiadomość napisaną przez Szopena oraz jego pistolet. Według wiadomości, gość ucieka z Instalacji i Szopen prosi, żebyśmy go przygarnęli. Podobno jest rozgarnięty i szybko się uczy. Dobrze, spróbujemy go nauczyć jak się mówi po polsku. Kapitan, chyba go o coś podejrzewa. Ja w sumie też mu nie ufam. Elwis się nim zajmie i będzie go obserwował.</p>
							<p>Ja chętnie przyjrzę się tej dziwnej łodzi. Wydaje się dość zaawansowana technologicznie. Dzisiaj nikt się nie skarżył na żadne halucynacje. Mi też chyba na razie odpuściło. Myślę, że to dobry znak.</p>

							<p>- 24 maja</p>
							<p>Mamy niesamowity przełom! Ta łódź, którą przypłynął Ignis, to istny cud techniki. Chyba nawet Shperacze nie widzieli czegoś takiego. W każdym razie rozebrałem ją na kawałki, bo to jakiś autonomiczny komputer i nie dałoby się tym gdziekolwiek popłynąć, poza tą cholerną Instalacją. Części z łodzi starczyło, żeby zbudować całkiem niezły transformator i przełożenie z wiatraków. Możemy zasilać Kaszuba prądem! Dzisiaj jemy w messie oświetlonej żarówkami, a nie jakimś dymiącym koksownikiem i świecami z łoju dzikich zwierząt.</p>

							<p>- 31 maja</p>
							<p>Ignis... Święty Płomieniu... Jak on mnie potrafi wkurwiać. A myślałem, że Szopena ciężko znoszę. Ten gość to jednak jakieś konkretne indywiduum. Jak kazaliśmy mu pomóc przy budowie kolejnego odcinka płotu, to on zamiast tego przez cały dzień ostrzył sobie nóż. Już parę razy próbowałem z nim na poważnie pogadać, ale zawsze się poddawałem. To chyba poza moimi możliwościami. Zostawię to Kapitanowi i Wasylowi.</p>

							<h1 align="center" id="18-06">Czerwiec 2118 roku</h1>
							<p>- 5 czerwca</p>
							<p>Czuję jak nastaje lato... Święty Płomieniu, jakże cudowne jest Twe Słońce. Rośliny na polu są coraz wyższe. Kukurydza soczyście zielona, a zboże już powoli zaczyna się złocić. Zaczynamy myśleć o naszej podróży do OldTown. Pora Przybyszów już za miesiąc. Musimy nazbierać zapasów na drogę i przygotować się na drugą podróż przez całą szerokość neo-puszczy. Tym razem myślę, że przejdziemy łatwiej. Nauczyliśmy się wielu dróg lasu i tego jak jego śmiercionośne twory mogą się nam przysłużyć. Ludzie nigdy nie ujarzmili natury, ale może my nauczymy się żyć z nią tak jak trzeba. Wykorzystamy wszystko co się da, żeby uczynić Przystań jeszcze silniejszą.</p>

							<p>- 8 czerwca</p>
							<p>Talos oznajmił, że póki co nie mamy szans wydobyć nic z tej bazy wojskowej i kategorycznie zabronił nam się tam zapuszczać. Musimy zdobyć więcej odpowiednich środków, żeby zbadać ten teren. Z Wasylem i Murem przeprowadzę zwiad w południowo-zachodnich rejonach neo-puszczy. Spróbujemy znaleźć jakąś bezpieczną drogę do OldTown. Póki co muszę zawiesić moje badania ziół. Moje kadzidło na razie dość dobre. Przynajmniej dla mnie. Nie wywołuje halucynacji w małych dawkach i całkiem dobrze pachnie. Ech... Wasyl nadal krzyczy, że dym "jebie", ale trudno. Jeszcze kiedyś dopracuję recepturę.</p>
							<p>Udało nam się poprawić system filtracji wody i nawadniania pola. Zajęło to nam kilka dni pełnych ciężkiej pracy, ale efekty są zadowalające.</p>
							<p>Halucynacje powróciły. Prześladują ludzi głównie nocami, przez co nie możemy normalnie wypocząć. Wasyl widział na morzu okręt wojenny pod szkocką banderą... Mało brakowało, a rzuciłby się do wody.</p>

							<p>- 15 czerwca</p>
							<p>Nasz wypad do neo-puszczy był udany. Odkryliśmy dość bezpieczny szlak, który omija najgorsze anomalie, gniazda błotniaków i siedliska mutantów. Niestety droga przechodzi przez polanę wysokiej, dosłownie krwistej trawy. Trochę nam zajęło znalezienie obejścia, ale dotarliśmy do ruin jakichś starych zabudować miejskich. Od nich powinniśmy trafić do skraju neo-puszczy bez problemu. Zostawiliśmy kilkanaście znaków, żeby nie zgubić szlaku. Mam nadzieję, że las nie pochłonie oznaczeń. Chłopaki poprawili ogrodzenie i magazyn przy farmie. Jak wrócimy z OldTown, to postawimy kolejny budynek przy farmie. Myślę, że przyda się nam młyn, dobry piec do chleba i gorzelnia.</p>

							<p>- 22 czerwca</p>
							<p>Dzisiaj miałem pecha. Krótki zwiad w lesie mógł się skończyć dla mnie tragicznie. Poszedłem znowu z Wasylem i Murem jak ostatnio kawałek na południe. Trafiliśmy na małe stado dzikich psów, które od razu się na nas rzuciły. Jakieś siedem bestii. Chłopaki szybko ustrzelili trzy, a resztę wycięliśmy wręcz. Sam przebiłem jednemu gardło nożem. Myślałem, że to wszystkie już i poszedłem się odlać parę metrów dalej. Wtedy z krzaków wyskoczył na mnie kolejny i wbił mi zęby w lewe kolano. Wyszarpnąłem kosę i wbiłem mu w łeb. Chłopaki dociągnęli mnie do Kaszuba, kurwiąc jakim to jestem idiotą. Siedzę teraz w lecznicy... właściwie myślę tak samo. Całe szczęście, to nic poważnego. Jeden z zębów psa ułamał się i utkwił mi w nodze. Rana wygląda na gorszą niż jest. Myślę, że wygoi się w dwa tygodnie. Nie powinienem opóźnić wyprawy do OldTown.</p>

							<p>- 30 czerwca</p>
							<p>Dziwnie się czuję. Noga co jakiś czas drętwieje. Teraz to mną się zajmują... Dobrze, że już sobie oszczędzają żartów, bo rana nadal boli. Zmieniam sobie opatrunek co drugi dzień. Kiedy ja tak tu leżę i się nudzę, reszta pracuje. Chmielu odkrył włóknistą roślinę o szerokich liściach, które bardzo dobrze chłoną, a położone na ciało przyjemnie grzeją. Myślę, że zaczniemy robić z nich własne bandaże. Neo-puszcza zdaje się czekać, aż nauczymy się korzystać z jej darów. Elwisowi pogorszyły się wizje. Prawie nie sypia. Zamiast tego przesiaduje ze mną. Widzę jak w jego oczach czai się obłęd. Powinien spróbować wysuszonych ziaren sennego owocu.</p>

							<h1 align="center" id="18-07">Lipiec 2118 roku</h1>
							<p>- 5 lipca</p>
							<p>To już niedługo. Kończymy przygotowania do podróży na kolejną Porę Przybyszów w OldTown. Rana na nodze zagoiła się. Rośliny na polu wyglądają bardzo dobrze. Jutro wyruszamy, żeby pokazać naszą siłę reszcie Pustkowi. Kiedy wrócimy, zbierzemy pierwszy plon. Chwała Świętemu Płomieniowi. Minął już niemal rok... Ciekawe co zmieniło się w tym dziwnym mieście.</p>

							<p>Nie wiem czy przeżyję, żeby pisać dalej Dzieje Przystani. Do tej pory, są to nasze dokonania, które spisałem ja - Pielgrzym.</p>

							<p>- 20 lipca</p>
							<p>Przeżyliśmy kolejną Porę Przybyszów. Tak... Przeżyliśmy, ale nie wszyscy. Czterech z nas spotkało przeznaczenie w ostanim tygodniu. Modlę się do Płomienia, żeby okazał miłosierdzie Elwisowi, Szakalowi, Zombiemu i Wieży. Zginął także jeden człowiek, który chciał do nas dołączyć - Beret, niech mu Słońce jasno świeci.
								Opuszczamy OldTown, żeby wrócić do Przystani. Dopiero teraz myślę o tamtym miejscu jako o domu. Rok temu... szliśmy tam jak do jakiejś ziemi obiecanej, a teraz wracamy na swoje. Mam tylko nadzieję, że wszystko tam się jakoś trzyma.
								Niestety, nie wszyscy wracają prosto na Kaszuba. Kapitan razem z Wasylem i trzema rekrutami (Ban, Pijo i Guma) wyruszają na południe, do Boat City.</p>

							<p>- 22 lipca</p>
							<p>OldTown zostało już daleko za nami. Nasza karawana maszeruje dalej. Niesiemy części, potrzebne do naprawy radiostacji na statku. Mamy zapasy, leki i amunicję. Okoliczności bardzo nam sprzyjają. Po tym jak zabito Władcę Bestii, raidersi rozpierzchli się po pustkowiach i nikt nie odważa się nas atakować. Mur oraz pozostali z Północy obiecali doprowadzić nas na skraj neo-puszczy. Tam się rozdzielimy. Oni pójdą dalej, na wschód, a ja przeprowadzę resztę przez las. </p>

							<p>- 24 lipca</p>
							<p>Trafiliśmy do jakiejś małej osady. Ludzie, którzy tam żyją, przyjęli nas podejrzliwie. Przekonaliśmy ich, żeby dołączyli do nas. Zajęło nam to trochę czasu i wysiłku, ale sześciu młodych chłopaków i pięć kobiet przystało na nasze warunki. Pożegnaliśmy się z Murem i chłopakami z Północy na skraju neo-puszczy. Jeśli Święty Płomień nam sprzyja, to za trzy dni będziemy jedli pieczyste z błotniaka, siedząc na plaży. </p>

							<p>- 27 lipca</p>
							<p>Najwidoczniej Płomień nie sprzyja nam wszystkim. Udało nam się wyjść bezpiecznie z neo-puszczy. Siedzę teraz w mojej kajucie i staram się poukładać sobie wszystko w głowie. Drugiego dnia po wejściu do lasu, musieliśmy znaleźć się w pobliżu jakiejś anomalii. Wszyscy zaczęli panikować, najgorzej Pastor i Jerzy, którzy nigdy wcześniej nie byli pod wpływem neo-puszczy. Żeby opanować halucynacje zjadłem surowy kwiat wrzaśnika. Miałem mnóstwo szczęścia, że akurat kwitł. Musiałem powstrzymać ludzi przed rozbiegnięciem się. Niestety nie udało mi się złapać wszystkich i Chmielu przepadł w gęstwinie. Nie wiem, czy jest sens próbować go szukać, ale jutro spróbuję i tak.
								----są też dobre wieści. Podczas naszej nieobecności, ludzie na Kaszubie posunęli trochę robotę naprzód. Wycięli kilka drzew i wzmocnili ogrodzenie. Rośliny na farmie wyglądają dobrze. Wyrosły dość wysokie, a zboże zaczęło się złocić.
								Do tego odkryli, że białe ptaki, które żerują na odpadkach z błotniaków, mają dość smaczne mięso, a ich pierze i pióra mogą być przydatne. Zaczęli je łapać przy pomocy niewielkich sieci, splecionych z włókien wrzaśnika, obciążonych małymi ciężarkami. Zastanawiam się, czy dałoby się hodować te ptaki. Może znosiłyby jajka.
								Nikt nie zaglądał do mojej pracowni przez miesiąc... Dlaczego zrobił się tam taki bałagan?</p>

							<p>- 28 lipca</p>
							<p>Dopiero do mnie dociera, że jestem w tej chwili jedynym członkiem Sztabu w Przystani. Rozesłałem ludzi do pracy, ale raczej marnie idzie mi naśladowanie Kapitana. Wyszedłem rano, żeby poszukać Chmiela w puszczy. Zabrałem ze sobą pistolet, który dał mi Talos... Nadal dziwnie się czuję, nosząc go, ale może mi się przydać. Jerzy nalegał, żeby iść ze mną. I dobrze zrobił. Gdyby nie on, mógłbym tym razem nie wrócić. Nie znaleźliśmy Chmiela, musieliśmy wrócić. Siedzę teraz na mostku i składam do kupy radiostację. </p>

							<p>- 29 lipca</p>
							<p>Udało mi się naprawić radio, ale nie umiem złapać żadnej częstotliwości. Próbowałem nawiązać łączność z kimkolwiek, ale cały czas odpowiada mi szum. Anysz zaoferował, że zajmie się radiostacją. Zgodziłem się. Mogę spokojnie wrócić do pracy i badań nad roślinami. Zacząłem już je opisywać wcześniej w moim zielniku "CO NAS NIE ZJE, MY ZJEMY"... chyba będę musiał pomyśleć o innym tytule. </p>

							<p>- 30 lipca</p>
							<p>Poszedłem znowu poszukać Chmiela. Nie znalazłem go. Za to o mało nie dopadł mnie jakiś dziwaczny mutant.</p>

							<h1 align="center" id="18-08">Sierpień 2118 roku</h1>
							<p>- 1 sierpnia</p>
							<p>Pracujemy dalej. Doglądamy farmy. Polujemy. Jerzy i Pastor zaczęli miewać halucynacje. Mnie za to zaczęły dręczyć koszmary. Nie wiem, czemu, coraz częściej myślę o tej młodej shperaczce, Morri. </p>

							<p>- 4 sierpnia</p>
							<p>Dzisiaj udało sie złapać kilkanaście ptaków żywcem. Wcześniej przygotowałem dla nich drewniane klatki. Zobaczymy, czy coś z tego zyskamy. Nasi nowi "osadnicy" chyba już się przywyzczaili do tutejszych warunków. Na dodatek potrafią być przydatni. Muszę ich jednak ostrzec, żeby nie próbowali szperać w mojej pracowni. </p>

							<p>- 7 sierpnia</p>
							<p>Wyprawiam się dalej do neo-puszczy, szukając ziół. Jerzy coraz częściej mi towarzyszy. Zbudowaliśmy razem niewielką suszarnię tytoniu obok farmy. Pastor (i nie tylko on) zaczął trochę narzekać na braki alkoholu. Faktycznie, przydałoby się trochę jakiegoś destylatu. Niestety nie mamy żadnej aparatury.
								Wieczorem Ignis biegał po całym pokładzie szukając jakiegoś profesora... Nie mam pojęcia o co mogło mu chodzić.</p>

							<p>- 10 sierpnia</p>
							<p>Plony na farmie dojrzewają coraz bardziej. Myślę, że niedługo przyjdzie czas na pierwsze żniwa.
								Anysz osiągnął jakiś przełom przy radiostacji. Wyłapał jakieś trzaski, chyba czyjś głos. Zaczniemy nadawać, może ktoś odpowie.
								Dzisiaj zdechły trzy ptaki w klatkach. Żadnych jajek do tej pory.</p>

							<p>- 12 sierpnia</p>
							<p>Wydaje mi się, że możemy spróbować pozyskiwać miód z lasu. Dzisiaj widziałem pszczoły, o których Ojciec kiedyś mi mówił. Latały wokół żółtych kwiatów na małej polance. Spróbuję znaleźć gniazdo tych owadów.</p>

							<p>- 13 sierpnia</p>
							<p>Długo się włóczyłem po znanych mi ścieżkach, ale nie znalazłem nic ciekawego. Zebrałem tylko trochę znajomych ziół i żywicy.
								Myślę, że trzeba trochę uprzątnąć statek. Skąd się tyle śmieci nazbierało?</p>

							<p>- 16 sierpnia</p>
							<p>Nie wychodziłem znowu do lasu. Zepsuł się jeden z wiatraków, więc musiałem poświęcić cały dzień na naprawy. W nocy ktoś cztery razy krzyczał na cały statek "Jebać Zakon!" </p>

							<p>- 20 sierpnia</p>
							<p>Plony dojrzały. Czas na żniwa! Chwała Świętemu Płomieniowi!
								Będziemy musieli wymyslić jakiś sposób, żeby mielić sprawnie ziarno. </p>

							<p>- 25 sierpnia</p>
							<p>Dzisiaj Elefant zaproponował, żeby wybrać się do legowiska błotniaków i spróbować zwędzić ich jaja. Ciekawy pomysł. Wysłałem go razem z Xathorem, Kangurem i Jerzym. Wrócili pod wieczór, każdy niósł kilka kulistych jaj. Smakowały wyśmienicie. Zostawiłem jedno, żeby sprawdzić czy błotniak może się wykluć. </p>

							<p>- 26 sierpnia</p>
							<p>Ptaki w klatkach zaczęły znosić jajka. Drą przy tym dzioba jakby ktoś je mordował.
								Z pomocą Elefanta zbudowałem na plaży imitację leża, dla jaja błotniaka. Zobaczymy czy coś z tego będzie.
								Na statku daje się odczuć brak Kapitana, a ja nie umiem go zastąpić. Coraz częściej miewam koszmary. </p>

							<p>- 27 sierpnia</p>
							<p>Rano widziałem na czerwono. </p>
							<p>Tęsknię za wyprawami do neo-puszczy. </p>

							<h1 align="center" id="18-09">Wrzesień 2118 roku</h1>
							<p>- 2 września</p>
							<p>Znowu myślałem o Morri. Dlaczego?</p>
							<p>Powinniśmy oszczędzać naboje. Zaczęliśmy robić dodatkową broń do polowań. Harpuny, maczugi, łuki i strzały. W końcu do czegoś się przydały pióra tych wrzeszczących mew.
								Kilka sporych mutantów pojawiło się na skraju puszczy. Musimy je przepędzić. </p>

							<p>- 4 września</p>
							<p>Kilka osób zaczęło chorować. Padają z osłabienia jak muchy. Gorączkują i majaczą. Za dużo, żeby odizolować ich w lecznicy na Kaszubie. Musimy postawić prowizoryczny szpital na plaży. Negra i ja zajmujemy się chorymi. Stosuję na nich czarną pokrzywę.</p>

							<p>- 7 września</p>
							<p>Od kilku dni nie byłem w neo-puszczy. Udało nam się postawić schronienie dla chorych. Ich stan się powoli poprawia. Przydałaby się pomoc Doktor Dzix.</p>

							<p>- 11 września</p>
							<p>Usłyszałem we śnie głośny płacz. Zobaczyłem wielką wieżę, która zapadła się, ogarnięta płomieniami.
								Wybrałem się z paroma osobami do neo-puszczy. Okazało się, że kobiety maja pomysł na tkanie płótna. Musimy nazbierać bardzo dużo chmielnika. Chyba spróbuję rozmnożyć tę roślinę w bliższej okolicy. </p>

							<p>- 13 września</p>
							<p>Dzisiaj zaczynamy budować wieżę na plaży. </p>
							<p>Widziałem kogoś obcego na rufie Kaszuba. Skoczył do morza, kiedy tylko się zbliżyłem. </p>

							<p>- 20 września</p>
							<p>Zauważyłem, że zniknęło trochę różnych zapasów. Nieco amunicji, leków i trwałej żywności. Wyznaczyłem Kangura, żeby pilnował magazynu razem z Ignisem. </p>
							<p>Sam poszukam złodzieja. </p>

							<p>- 22 września</p>
							<p>Przyłapałem jednego z młodszych osadników, jak wykradał lekarstwa. Spanikował, kiedy mnie zobaczył i próbował uciekać. Udało mi się go obezwładnić i zamknąć w karcerze. Muszę zdecydować co z nim zrobić... Co zrobiłby Kapitan, albo Wasyl? </p>

							<p>- 23 września</p>
							<p>Razem z Kangurem przesłuchaliśmy złodzieja. Zmarnowałem na to pół dnia. Wygląda na to, że próbował uciec od nas. Nie powiedział, gdzie schował ukradzione zapasy. Muszę sięgnąć po mocniejsze środki.</p>

							<p>- 24 września</p>
							<p>Zebrałem trochę krwistego wąsu w neo-puszczy. Wydzielina rośliny sprawia niesamowity ból. Związałem wiązkę w rózgę i kazałem wychłostać nią złodzieja. Wytrzymał pięć razów, a potem zemdlał. Przynajmniej się dowiedziałem, gdzie ukrył zapasy. Wszystko już odzyskałem. </p>

							<p>- 25 września</p>
							<p>Chmielu powiedział mi kiedyś, że jacyś ludzi zwykli wycinać złodziejom jakiś widoczny znak na czole. Na przykład trójkąt. To brzmi sprawiedliwie. Nie będziemy tolerować kradzieży...
								...czuję się jak rzeźnik, ale trzeba było to zrobić. Mam nadzieję, że więcej to się nie powtórzy. </p>
							<p>We śnie widziałem Shperaczy, walczących między sobą jak wściekłe psy. Nic nie mogłem zrobić. Obudziłem się, a z nosa leciała mi krew. </p>

							<h1 align="center" id="18-10">Październik 2118 roku</h1>
							<p>- 4 października</p>
							<p>Wygląda na to, że eksperyment z inkubacją błotniaka się powiódł. W ogrodzonym gnieździe pełza krab wielkości ludzkiej głowy. Tylko co my z nim zrobimy teraz? </p>

							<p>- 11 października</p>
							<p>Anysz prawie stracił nadzieję na nawiązanie kontaktu radiowego z kimkolwiek. Od tygodni spędza po parę godzin dziennie, nadając w eter. Poradziłem mu, żeby spróbował wywoływać Shperaczy lub Flying Caravans. </p>

							<p>- 14 października</p>
							<p>Czuję, że nastała jesień w pełni. Niektóre drzewa w neo-puszczy zaczynają żółknąć. Zbliża się czas uśpienia. Muszę nazbierać jak najwięcej przydatnych ziół, zanim znikną. </p>

							<p>- 21 października</p>
							<p>Las stał się wyraźnie senny. Postanowiłem wysłać ekspedycje do Niechorza tak jak rozkazał Kapitan, jeszcze w OldTown. Zobaczymy co uda nam się z szabrować.</p>


		</div>
	</div>

</body>

</html>