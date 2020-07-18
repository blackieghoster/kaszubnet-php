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
	</style>
</head>

<body>

	<div class="clearfix">
		<div class="box1">
			<p id="header">Ekspedycja na Kaszuba</p>
			<p>Podróż do Okrętu „ORP Kaszub”</p>
			<p>- 21 lipca 2117 roku</p>
			<p>Po tragicznej śmierci Hafizullacha i pospiesznym zebraniu jego szczątków, co uważam za niegodne pamięci tego wspaniałego człowieka, Kapitan Talos zdecydował, że musimy opuścić OldTown. Frakcja podzieliła się. Nie jestem pewny przyczyn podziału, ale więcej niż połowa z nas zdecydowała się podążyć własną drogą, zanim (jeśli w ogóle) dołączą do nas w nowym domu, jakim ma się dla nas stać wrak przedwojennej korwety. Prowadzeni przez naszego przywódcę wyruszyliśmy. Koniec Pory Przybyszów pożegnał nas ulewnym deszczem. Jest nas niewielu: Kapitan, Elwis, Wasyl, Chmielu, Szopen, Elephant, Negra i ja. Musimy przedostać się przez niebezpieczne pustkowia, a potem lasy aż do wybrzeża. Później odnajdziemy wrak i zastanowimy się co dalej…</p>

			<p>- 22 lipca 2117 roku</p>
			<p>Pierwszy dzień wyprawy i pierwsze trudności. Nie potrafię walczyć, ale jestem jedynym technikiem w naszej niewielkiej karawanie. Chłopaki są obciążeni bronią i amunicją, także ja dźwigam większość innego sprzętu. Po ulewnym deszczu droga pokryta jest grząskim błotem. Poruszamy się bardzo wolno. Dobrze, że mamy dużo zapasów. (Fundusz frakcyjny!) Zombi wydał część swoich kapsli, żeby nas wyposażyć na podróż. Rozbijamy obóz w pustych ruinach. Wasyl zabrał Szopena oraz Elephanta na szybki zwiad okolicy. Minęło kilka godzin. Jeszcze nie wrócili.</p>

			<p>- 23 lipca 2117 roku</p>
			<p>Przez całą noc czuwaliśmy na zmianę w piątkę, czekając na resztę. Wrócili dopiero o świcie. Cieszyli się jak dzieci na widok prażonej szarańczy. W nocy zobaczyli kilku bandytów, którzy upili się niedaleko naszego obozu. Chłopaki podkradli się do nich i po cichu załatwili. Przy jednym znaleźli kluczyki do auta. Rozejrzeli się po okolicy i znaleźli zdezelowanego pickupa. Co najlepsze, pojazd jest na chodzie. Chwała Świętemu Płomieniowi! Jedziemy teraz całkiem szybko drogą na północ. Wasyl prowadzi, Kapitan siedzi obok w kokpicie, a reszta na pace. (Trochę trzęsie, dlatego litery takie krzywe. Później może przepiszę to na jakiejś maszynie…) Po kilku godzinach jazdy w baku zabrakło paliwa. I tak mieliśmy ogromne szczęście. W krótkim czasie pokonaliśmy duży odcinek drogi w najbardziej niebezpiecznym terenie. Dalej idziemy pieszo.</p>

			<p>- 25 lipca 2117 roku</p>
			<p>Zabrałem trochę części zamiennych z auta, a potem je uszkodziłem, żeby już nikt za szybko z niego nie skorzystał. Pola kukurydzy zostały daleko za nami, a pusta równina zaczęła ustępować lasowi. Chyba nie jest to osławiona Neo-Puszcza. Nie przypomina też na szczęście moich rodzinnych stron. Nikt z nas nie chce zostać sparaliżowany przez toksyczny sok jakiegoś zmutowanego drzewa. Mimo, że las wydaje się bardziej „zwyczajny” mamy się na baczności. Na skraju leżą ludzkie szczątki. Co jakiś czas słyszymy okropne nawoływania dzikich zwierząt, albo czegoś jeszcze gorszego. Chłopaki są trochę zaniepokojeni, zmęczenie daje się we znaki. Tylko po Kapitanie nie da się niczego poznać. Wręcz przeciwnie. Czuć bijący od niego entuzjazm. Jakby wyczuwał, że zbliżamy się do celu. Dodaje to nam otuchy. Ściemnia się, poczekamy do rana, zanim wejdziemy między drzewa. Możliwe, że prawdziwe problemy dopiero przed nami.</p>

			<p>- 26 lipca 2117</p>
			<p>Rano wstaliśmy i po krótkiej odprawie weszliśmy w las. Bardzo szybko się przekonaliśmy, że mamy do czynienia z Neo-Puszczą. Wszystko jest zmutowane. Drzewa, albo ociekają cuchnącymi sokami, albo są porośnięte świecącym mchem, liście oraz igły roślin ranią ręce i tną ubrania jak noże. Po ziemi wiją się dziwaczne pnącza, które zdają się śledzić każdy nasz krok. Zatrzymaliśmy się tylko na chwilę, a mam wrażenie, że wszystko pochyla się w naszą stronę. Nie widać, którędy weszliśmy do lasu. Nie ma już odwrotu. </p>

			<p>- ...chyba koniec lipca 2117 roku</p>
			<p>Zabłądziliśmy. Od kilku dni błąkamy się po tym okrutnym labiryncie. Leśne ścieżki są bardzo poplątane, a po deszczach część z nich zupełnie zniknęła. Parę razy wpadaliśmy na dzikie bestie. Strzały z reguły je odstraszają, ale część była na tyle głodna, że je zabiliśmy. Pozwoliło to nam uzupełnić zapasy mięsa. Woda w zasadzie się skończyła. Od co najmniej trzech dni zbieramy rosę w co się da, żeby mieć co pić. To co znajduje się w leśnych bajorkach trudno nazwać wodą. Żadna filtracja nie pomaga. Jeśli szybko nie znajdziemy względnie czystego źródła będziemy musieli pić krew zabitych zwierząt.</p>

			<p>- ...zdaje się, że już mamy pierwszy tydzień sierpnia 2117 roku</p>
			<p>Jest bardzo ciężko. Zanim nasze organizmy przyzwyczaiły się do zwierzęcej krwi, przez jakiś czas wszyscy czuliśmy się słabo. Dorwała nas biegunka. Nie mogliśmy się poruszać za szybko, bo co chwilę ktoś musiał przystanąć. Ale ludzie jak szczury, przyzwyczajmy się do wszystkiego. A to nie było wszystko. Zatraciliśmy poczucie czasu. Nie jestem w stanie nawet dobrze policzyć dni. W końcu wydobrzeliśmy na tyle, żeby podjąć sensowny marsz. Zauważyliśmy, że w jednym kierunku puszcza zaczęła się przerzedzać. Kapitan zdecydował, że musimy poruszać się w tę właśnie stronę, a na pewno w końcu wyjdziemy z lasu. Musimy znaleźć źródło czystej wody…</p>

			<p>- ...dla porządku będzie to pierwszy dzień po wyjściu (dpw) 2117 roku</p>
			<p>Udało się! Chwała niech będzie Świętemu Płomieniowi! Cel naszej podróży - Kaszub jest przed naszymi oczami. Jednak nie jesteśmy tu sami. Morze faluje spokojnie, ale widać, że przy samej wodzie kręcą się jakieś pokraczne stworzenia na czterech nogach. Wzrostem są podobne do dorosłego człowieka. Zamiast dłoni mają wielkie szczypce. Ich ciała pokrywa pancerz. Całe szczęście nie mogą nas wyczuć w dzień, bo wiatr wieje znad wody. Trzymamy się skraju lasu, czekamy na rozkazy Kapitana… Długo nie zwlekaliśmy. Talos kazał Elwisowi przejść na prawą flankę, żeby zliczyć dokładnie siły przeciwnika… Wrócił po dłuższej chwili, okazało się, że mamy do czynienia z dwunastką pokracznych stworów. Przygotowujemy się do bitwy o nasz nowy dom. Zostawiamy cały niepotrzebny ekwipunek w zaroślach. Zbieramy broń i obmyślamy taktykę. Ostatecznie decydujemy się na jednoczesny atak z dwóch stron. Święty Płomieniu prowadź nas w walce…</p>

			<p>- drugi dpw 2117 roku</p>
			<p>Zwyciężyliśmy! Po dość nierównej walce oczyściliśmy najbliższą okolicę i statek z wrogich mutantów. Żaden z nas nie odniósł poważnych ran, może tylko Elwis i Wasyl trochę się poturbowali nawzajem, przez głupią kłótnię, ale razem z Negrą i Szopenem połataliśmy ich jak się dało. Zaczęliśmy przeszukiwać statek. Mamy mnóstwo wysuszonych ciał do wyrzucenia. To musiała być kiedyś załoga okrętu. Na szczycie wieży pośrodku statku znajduje się pokład obserwacyjny. Założyliśmy tam punkt obserwacyjny. Po horyzont widać morze z jednej i las od drugiej strony. Na dolnym pokładzie znaleźliśmy trochę starych zapasów żywności. Nadal nadają się do spożycia. Najniższa część Kaszuba jest zalana wodą, która sięga prawie do kolan. W poszyciu musi być sporo dziur. Odkryliśmy maszynownię. Zabieram się z Elwisem do naprawy generatora. Jeśli nie uda się go uruchomić, to może chociaż użyjemy części do budowy wiatraków. Reszta szuka materiałów do budowy systemów filtracji. Musimy mieć czystą wodę.</p>

			<p>- trzeci dpw 2117 roku</p>
			<p>Naprawy idą marnie. Elektryka wygląda jakby coś usmażyło wszystkie obwody. Nawet szkolenie u Shperaczy nie pomoże mi w takiej sytuacji... Odkryliśmy za to, że mięso tych opancerzonych mutantów jest całkiem pożywne. Chmielu nie mógł powstrzymać ciekawości, ale wyszło nam to na dobre. Zaczynam myśleć o założeniu farmy, mam nasiona z OldTown, trzeba tylko wypalić kawałek Neo-Puszczy. Zobaczymy co Talos na to. </p>

			<p>- czwarty dpw 2117 roku</p>
			<p>Bierzemy się do ciężkiej pracy. Oby Święty Płomień nam sprzyjał.</p>

			<p>- piąty dpw 2117 roku</p>
			<p>Zaczęliśmy od wytyczenia granic farm. Potem podłożyliśmy ogień, korzystając z tego, że wiatr wiał od morza. Las przyjął płomienie i płonął. O Święty Płomieniu! Jak on długo płonął... Dym miał sinoniebieskie i zielonkawe zabarwienie. Dla bezpieczeństwa zaczekaliśmy na Kaszubie. Zabieramy się za uprzątnięcie naszej przyszłej farmy. Musimy zachować ostrożność, pożar mógł ściągnąć na nas uwagę ludzi. </p>

			<p>- szósty dpw 2117 roku</p>
			<p>Nie myliłem się. W trakcie pracy dostrzegliśmy ludzi nadchodzących plażą. Chyba jednak bali się do nas podejść. A może nam się tylko zdawało... Wasyl obserwował teren cały czas z wieżyczki Kaszuba, ale nikogo nie widział. Musimy się mieć na baczności. Na jakiś czas muszę przerwać pisanie. Mam za dużo pracy przy stawianiu tego miejsca na nogi. Gdyby tylko Zombi przysłał karawanę... przydałyby się posiłki.</p>

			<p>Właściwie ekspedycja zakończyła się, znaleźliśmy Kaszuba. Będę jednak dalej pisał o wszystkim czego dokonaliśmy, budując naszą Przystań.</p>

		</div>
	</div>
</body>

</html>