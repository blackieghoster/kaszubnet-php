<?php
	
	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
		header('Location: index.php');
		exit();
	}

	require_once "lib/connection.php";

	$login = $_POST['login'];
	$password = $_POST['haslo'];

	$result = @$connection->query(sprintf("SELECT * FROM czlonkowie WHERE login='%s'",
		mysqli_real_escape_string($connection, $login)));
	
	if (!$result){
		header('Location: pologwrong.php');
	}

	$pass_hash=$row['haslo'];

	if(!password_verify($password, $pass_hash)){
		header('Location: pologwrong.php');
	}

	$users = $result->num_rows;

	if ($users<=0){
		header('Location: pologwrong.php');
	}	
		
	$row = $result->fetch_assoc();
	$_SESSION['id'] = $row['id'];
	$result->free_result();

	$sql = "SELECT * FROM wersja WHERE id=1";
	$result = $connection->query($sql);

	if ($result->num_rows){
		while($row = $result->fetch_assoc()){
			$_SESSION['wersja']=$row["wersja"];
		}
	} else {
		die( 'No version');
	}
	
	$sql = "SELECT * FROM dane WHERE id=$_SESSION[id]";
	$result = $connection->query($sql);

	if ($result->num_rows) {
		while($row = $result->fetch_assoc()){
			$_SESSION['imie']=$row["imie"];
			$_SESSION['zdjecie']=$row["zdjecie"];
		}
	} else {
		die( 'No data');
	}

	header('Location: polog.php');
	
?>