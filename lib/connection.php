<?php
/*
    require_once "lib/conf.php";
	
	$connection = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connection->connect_errno!=0)
	{
		die( "Failed to connect to MySQL: ".$connection->connect_errno);
	}
	*/
	//PDO------------------------------------------------------------------------v

	$config = require_once "conf.php";

	try{

		$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
			PDO::ATTR_EMULATE_PREPARES => false, 
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]);

	} catch (PDOException $error){

		echo $error->getMessage();
		exit('Database error');
	}
?>