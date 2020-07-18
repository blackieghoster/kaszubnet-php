<?php

    require_once 'connection.php';

	$u_Query = $db->prepare('SELECT login FROM users WHERE id = :id');
	$u_Query->bindValue(':id', $_SESSION["user_id"], PDO::PARAM_STR);
	$u_Query->execute();
	
	$u_Q = $u_Query->fetch();

	$_SESSION["user_name"]=$u_Q['login'];

	// user_characters data
	$user_characters_Query = $db->prepare('SELECT ch_id, name, photo FROM characters WHERE u_id = :id');
	$user_characters_Query->bindValue(':id', $_SESSION["user_id"], PDO::PARAM_STR);
	$user_characters_Query->execute();

	$char = $user_characters_Query->fetchAll();
	$characters = $user_characters_Query->fetch();
	
	$character_photo = $characters['photo'];

	//$_SESSION['id'] = $characters["id"];
	//$_SESSION['name'] = $characters['name'];
	
    // page version
	$verQuery = $db->prepare('SELECT version, time FROM ver WHERE id = "1"'); //wcisnąć w jedną linijkę
	$verQuery->execute();

	$ver = $verQuery->fetch();

	$_SESSION['version']=$ver['version'];
	$_SESSION['time']=$ver['time'];
?>