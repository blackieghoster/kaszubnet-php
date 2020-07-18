<?php
/*
	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: polog.php');
		exit();
	}

	require_once "lib/conf.php";
	$connection = new mysqli($host, $db_user, $db_password, $db_name);
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	} 

	$sql = "SELECT * FROM wersja WHERE id=1";
	$result = $connection->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$wersja=$row["wersja"];
		}
	} else {
	echo "error1";
	}
	$connection->close();

	//30F294
*/
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>KASZUBnet</title>
		<meta charset="utf8 COLLATE utf8_polish_ci" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

<style>

	p {
		text-align: center;
		font-size: 25px;
	}

	body {
		color: #30F294;
		font-family: 'Share Tech Mono', monospace;
		background-color: black;
		background-image: url("tlo3.png");
		background-repeat: no-repeat;
		background-size: auto;
		background-position: center top;
		background-attachment: fixed;
		margin: 100px 100px 55px;
	
	}

	.box1 { 
		width: 30%;
		margin: auto;
	}
				
	a:link {
		color: #37F79F;
	}

	a:visited {
		color: #37F79F;
	}

	.footer {
		text-align: center;
	}

</style>
</head>

<body>
<div align="center">
	<br>
		<h1>Połączono z KASZUB.net</h1>
		<br>
			<div class="box1">
				<fieldset>
				<legend><p><b>Logowanie...</b></p></legend>
					<form action="lib/logging_pdo.php" method="post">
					Login: <br /> <input type="text" name="login" <?= isset($_SESSION['given_login']) ? 'value="' . $_SESSION['given_login'] . '"' : '' ?>/> <br />
					Haslo: <br /> <input type="password" name="pass"/> <br />	
					<br>	
					<input type="submit" value="Zaloguj się"/>

					<?php
					if (isset($_SESSION['bad_attempt'])) {
						echo '<p>Niepoprawny login lub hasło!</p>';
						unset($_SESSION['bad_attempt']);
					}
					?>
					
					</form>
				</fieldset>
			</div>
			<br>
		<div align="center">
		<h3><b>!!!Uwaga!!! Wszystkie informacje zamieszczone na Kaszubnecie są In-game.</b></h3>
		</div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--<div class="footer"><h5>KASZUBnet ver.<?// echo $wersja; ?></h5></div>-->
</body>
</html>