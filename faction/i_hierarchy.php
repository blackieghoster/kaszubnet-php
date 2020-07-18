<?php
session_start();
include '../lib/log_check.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>KASZUBnet</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/style.css">

    <style>
        body {
            background-image: url("../photos/i_tlo3.png");
        }

        .box1 {
            float: left;
            width: 100%;
            padding: 0px 0px 20px 0px;
            margin: 0px;
            border-top: 1px solid;

        }

        .box20 {
            float: left;
            width: 90%;
            padding: 0px;
            margin: 3% 5% 5% 5%;
            border: 1px solid;
        }

        .boxsztab {
            width: 45%;
            padding: 0px;
            margin: 5% 30% 5% 30%;
            border: 1px solid;
            text-align: center;
        }

        .boxtytul {
            width: 80%;
            margin: 0% 10% 0% 10%;
            border: 3px solid;
            text-align: center;
            height: 60px;
        }

        .boxtytul2 {
            width: 30%;
            margin: 0%;
            border: 1px solid;
            text-align: center;
            width: 100%;
            border-style: dashed;
        }

        .boxpbh {
            float: left;
            width: 33.333333333%;
            padding: 0px;
            margin: 5% 0% 5% 0%;
            border: 1px solid;
            text-align: center;
        }

        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 455px;
            background-color: black;
            color: #37F79F;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            border: 1px solid #37F79F;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
            top: 100%;
            left: 50%;
            margin-left: -228px;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }

        h2:hover {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="clearfix">
        <div class="box1">
            <p id="header">
                <div class="glitch" data-text="Hierarchia_i_Role">Hierarchia_i_Role</div>
            </p>
        </div>

        <div class="box20">
            <div class="boxsztab">
                <div class="boxtytul" style="margin: 0% 35% 0% 35%; width: 30%;">
                    <h1><a href="sztab.php">Sztab</a></h1>
                </div>
                <h2>
                    <div class="tooltip">☸ Talos ☸<span class="tooltiptext">
                            <h3>Kapitan Przystani </h3>
                            <p>Coś musiało się naprawdę zjebać że idziesz zawracać mu dupę, o ile wg go zastaniesz w sztabówce,
                                a zazwyczaj Kapitana tam nie zastaniesz bo robi wielką politykę. </p>
                            <p>Pojawia się dopiero w sytuacjach kryzysowych żeby wskazać komu najebać.
                                Trucie niepotrzebnie dupy grozi meltdownem i samodestrukcją!!!!</p>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">✯ Mur ✯<span class="tooltiptext">
                            <h3>Zastępca Kapitana Przystani</h3>
                            <p>Prawa ręka i noga Kapitana, to On trzyma wszystko i wszystkich w ryzach gdy go nie ma.
                                Wydaje ci się że potrzebujesz Talosa? Pojebało?! Zapieprzaj najpierw do Mura!!!!</p>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">✰ Strzygoń ✰ Sierżant ✰ Wasyl ✰<span class="tooltiptext">
                            <h4>Sztabowcy - najbardziej zaufani i zdeterminowani spośród wszystkich w rozwijaniu oraz zarządzaniu frakcją.</h4>
                        </span></div>
                </h2>

            </div>

            <div class="boxpbh">
                <div class="boxtytul">
                    <h1>Politbiuro</h1>
                </div>
                <h2>
                    <div class="tooltip">✭ Talos ✭<span class="tooltiptext">
                            <h3>Szef-Polityk</h3>
                            <p> Robi wielką politykę</p>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">Hex<span class="tooltiptext">
                            <h3>Doradca</h3>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">Pastor<span class="tooltiptext">
                            <h3>Doradca</h3>
                        </span></div>
                </h2>
                <div class="boxtytul2">
                    <h1>Wywiad</h1>
                </div>

            </div>
            <div class="boxpbh">
                <div class="boxtytul">
                    <div class="tooltip">
                        <h1>B.Ł.O.T.N.I.A.K</h1><span class="tooltiptext">
                            <h3>Zbrojne ramię Przystani</h3>
                        </span>
                    </div>
                </div>
                <div><img src="../zdjecia/blotniak.png"></div>
                <h2>
                    <div class="tooltip">✭ Sierżant ✭<span class="tooltiptext">
                            <h3>Dowódca grupy bojowej B.Ł.O.T.N.I.A.K</h3>
                            <p>Bitwa w mieście czy na pustkowiach? Nie ważne!
                                To do niego należy twoja dupa i jego masz się słuchać!</p>
                            <p>A może dotrwacie do końca Pory Przybyszy.</p>
                        </span></div>
                </h2>
                <h2>Dimitri</h2>
                <h2>Sierżant</h2>
                <h2>Chmielu</h2>
                <h2>Jerzy</h2>
                <h2>Guma</h2>
                <h2>Ignis</h2>
                <h2>Pijo</h2>
                <h2>Chmura</h2>
                <h2>Struna</h2>

            </div>
            <div class="boxpbh">
                <div class="boxtytul">
                    <h1>Pion Cywilny</h1>
                </div>
                <h2>
                    <div class="tooltip">✭ Wasyl ✭<span class="tooltiptext">
                            <h3>Zarządzca pionu cywilnego</h3>
                            <p>Jego głównym zadaniem jest sprawić by wszystkiego było pod dostatkiem i miało swoje miejsce w magazynie
                                (łącznik handlarzy i magazynierów ze strony sztabu). </p>
                            <p>Dba również o przydział obowiązków i żeby każdy wiedział co ma robić.</p>
                        </span></div>
                </h2>

                <div class="boxtytul2">
                    <h1>Szpejo_Małpy</h1>
                    <p>(magazyn)</p>
                </div>
                <h2>
                    <div class="tooltip">Dimitri<span class="tooltiptext">
                            <h3>Kwatermistrz</h3>
                            <p>- dba o sprzęt, porządek na magazynie oraz prawidłowe funkcjonowanie magazynu.
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">Chmielu<span class="tooltiptext">
                            <h3>Magazynier</h3>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">?Favaro?<span class="tooltiptext">
                            <h3>Magazynier</h3>
                        </span></div>
                </h2>
                <div class="boxtytul2">
                    <h1>Rzemieślnicy</h1>
                </div>
                <h2>
                    <div class="tooltip">Mur<span class="tooltiptext">
                            <h3>Przewodzi wszystkim rzemieślnikom.<br>Naprawa panerzy lv.2</h3>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">Pijo<span class="tooltiptext">
                            <h3>Mechanik lv.1</h3>
                        </span></div>
                </h2>
                <div class="boxtytul2">
                    <h1>Cinkciarze</h1>
                </div>
                <h2>
                    <div class="tooltip">Oczko<span class="tooltiptext">
                            <h3>Szef Cinkciarzy i główny handlarz</h3>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">Lucky<span class="tooltiptext">
                            <h3>Zastępca Szefa Cinkciarzy i główny handlarz</h3>
                        </span></div>
                </h2>

                <h2>
                    <div class="tooltip">Guma<span class="tooltiptext">
                            <h3>Handlarz i sklepikarz</h3>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">Pijo<span class="tooltiptext">
                            <h3>Handlarz i sklepikarz</h3>
                        </span></div>
                </h2>
                <h2>
                    <div class="tooltip">Pastor<span class="tooltiptext">
                            <h3>Pomniejszy handlarz</h3>
                        </span></div>
                </h2>

            </div>




        </div>

    </div>
    </div>
    </div>
</body>

</html>