<?php
session_start();

include 'lib/log_check.php';
include 'lib/user_data.php';

//echo "user_id: " . $_SESSION["user_id"] . " id: " . $_SESSION["id"] . " name: " . $_SESSION["name"];

/*$charactersQuery = $db->prepare('SELECT id, name FROM characters WHERE u_id = :id');
	$charactersQuery->bindValue(':id', $_SESSION["user_id"], PDO::PARAM_STR);
	$charactersQuery->execute();

	$char = $charactersQuery->fetchAll();

	$characters = $charactersQuery->fetch();

	$c_rows = $charactersQuery->rowCount();*/

?>

<!DOCTYPE html>
<html>

<head>
	<title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="stylestrony9.css">

	<style>
		.hello {
			float: center;
			width: 100%;
			padding: 0px;
			margin: 0px;
			border: 1px solid;
			font-size: 40px;
		}

		.column_header {
			float: left;
			width: 50%;
			height: 80px;
			border: 1px solid;
		}

		.column {
			float: left;
			width: 50%;
			height: 398px;
			border: 1px solid;
		}

		.table {
			padding: 15px;
			border: 1px solid;
		}

		.gray {
			opacity: 0.5;
		}

		img {
			width: 50%;
			height: 50%;
		}

		table {
			float: center;
			border: 1px solid #37F79F;
			width: 100%;
		}

		.new_char {
			float: center;
			padding: 0px;
			width: 100%;
			text-align: center;
			font-size: 28px;

		}

		iframe {
			border: 1px solid #37F79F;
		}

		form {
			float: center;
			padding: 25px;
			width: 100%;
			text-align: center;
			font-size: 28px;
		}

		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 2px;
			box-sizing: border-box;
			font-size: 18px;
		}

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #30F294;
		}


		.glitch {
			color: #37F79F;
			font-size: 40px;
			position: relative;
		}

		@keyframes noise-anim {
			0% {
				clip: rect(17px, 9999px, 66px, 0);
			}

			5% {
				clip: rect(67px, 9999px, 64px, 0);
			}

			10% {
				clip: rect(99px, 9999px, 71px, 0);
			}

			15% {
				clip: rect(61px, 9999px, 6px, 0);
			}

			20% {
				clip: rect(4px, 9999px, 95px, 0);
			}

			25% {
				clip: rect(15px, 9999px, 76px, 0);
			}

			30% {
				clip: rect(40px, 9999px, 9px, 0);
			}

			35% {
				clip: rect(47px, 9999px, 38px, 0);
			}

			40% {
				clip: rect(46px, 9999px, 55px, 0);
			}

			45% {
				clip: rect(61px, 9999px, 89px, 0);
			}

			50% {
				clip: rect(83px, 9999px, 24px, 0);
			}

			55% {
				clip: rect(71px, 9999px, 76px, 0);
			}

			60% {
				clip: rect(2px, 9999px, 4px, 0);
			}

			65% {
				clip: rect(63px, 9999px, 3px, 0);
			}

			70% {
				clip: rect(7px, 9999px, 54px, 0);
			}

			75% {
				clip: rect(4px, 9999px, 22px, 0);
			}

			80% {
				clip: rect(61px, 9999px, 3px, 0);
			}

			85% {
				clip: rect(20px, 9999px, 61px, 0);
			}

			90% {
				clip: rect(38px, 9999px, 96px, 0);
			}

			95% {
				clip: rect(77px, 9999px, 46px, 0);
			}

			100% {
				clip: rect(10px, 9999px, 55px, 0);
			}
		}

		.glitch:after {
			content: attr(data-text);
			position: absolute;
			left: 2px;
			text-shadow: -1px 0 red;
			top: 0;
			color: #37F79F;
			background: black;
			overflow: hidden;
			clip: rect(0, 900px, 0, 0);
			animation: noise-anim 2s infinite linear alternate-reverse;
		}

		@keyframes noise-anim-2 {
			0% {
				clip: rect(30px, 9999px, 88px, 0);
			}

			5% {
				clip: rect(96px, 9999px, 70px, 0);
			}

			10% {
				clip: rect(32px, 9999px, 95px, 0);
			}

			15% {
				clip: rect(90px, 9999px, 24px, 0);
			}

			20% {
				clip: rect(30px, 9999px, 41px, 0);
			}

			25% {
				clip: rect(25px, 9999px, 39px, 0);
			}

			30% {
				clip: rect(72px, 9999px, 92px, 0);
			}

			35% {
				clip: rect(46px, 9999px, 21px, 0);
			}

			40% {
				clip: rect(81px, 9999px, 4px, 0);
			}

			45% {
				clip: rect(83px, 9999px, 8px, 0);
			}

			50% {
				clip: rect(53px, 9999px, 8px, 0);
			}

			55% {
				clip: rect(85px, 9999px, 95px, 0);
			}

			60% {
				clip: rect(100px, 9999px, 20px, 0);
			}

			65% {
				clip: rect(24px, 9999px, 63px, 0);
			}

			70% {
				clip: rect(83px, 9999px, 72px, 0);
			}

			75% {
				clip: rect(73px, 9999px, 16px, 0);
			}

			80% {
				clip: rect(98px, 9999px, 82px, 0);
			}

			85% {
				clip: rect(93px, 9999px, 45px, 0);
			}

			90% {
				clip: rect(79px, 9999px, 45px, 0);
			}

			95% {
				clip: rect(18px, 9999px, 79px, 0);
			}

			100% {
				clip: rect(44px, 9999px, 4px, 0);
			}
		}

		.glitch:before {
			content: attr(data-text);
			position: absolute;
			left: -2px;
			text-shadow: 1px 0 blue;
			top: 0;
			color: w#37F79F;
			background: black;
			overflow: hidden;
			clip: rect(0, 900px, 0, 0);
			animation: noise-anim-2 3s infinite linear alternate-reverse;
		}
	</style>

</head>

<body>
	<div class="flex-container">
		<div class="clearfix">
			<div class="hello">
				<p style="text-align: center;">Witaj <b><?php echo $_SESSION['user_name'] ?></b>!</p>
				<p style="text-align: center; font-size: 20px;">[<a href="lib/logout.php">Wyloguj się!</a>]/[<a href="user_account.php">Edycja konta!</a>]<p>
			</div>

			<div class="column_header">
				<p>
					<div class="glitch" data-text="Twoje_postacie">Twoje postacie</div>
				</p>
			</div>
			<div class="column_header">
				<p>
					<div class="glitch" data-text="Wybór_postaci">Wybór postaci</div>
				</p>
			</div>

			<div class="column">
				<div class="table">

					<iframe src="i_characters.php" height="272" width="539"></iframe>

				</div>
				<div class="new_char">
					<p><a href='new_character.php'>Dodaj nową postać [+]</a></p>
				</div>

			</div>

			<div class="column">
				<form method="post" action="lib/char_chosing.php">
					<p>v Zaloguj się jako v<select name="characters">
							<?php
							foreach ($char as $character) {
								echo " 
						<option value={$character['name']}>{$character['name']}</option>
						";
							}
							?>
						</select>
						<p><input type="submit" value=">>> Kaszubnet <<<" /></p>
				</form>
			</div>
		</div>
	</div>
	<br><br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>