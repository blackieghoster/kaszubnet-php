<?php
/*
	require_once "conf.php";
	session_start();

	if (!isset($_SESSION['id']))
	{
		header('Location: ../index.php');
		exit();
	}
*/
	//PDO

	if (!isset($_SESSION['user_id'])) {
	header('Location: index.php');
	exit();
	}	

?>