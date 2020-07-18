<?php
	session_start();
	include '../lib/log_check.php';

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="../stylestrony9.css">
	
<style>

	.error{
		color:red;
		margin-top: 10px;
		margin-bottom: 10px;
		font-size: 12px;
	}

	.box1 {
		float: right;
		width: 100%;
		padding: 0px;
		margin: 0px 0px 00px 0px;
		border: 1px solid;
		background: blank;
	}

	input {
		width: 100%;
	}

	input[type=text] {
		border: 3px solid #37F79F;
		border-radius: 3px;
	}

	.flex-container {
		height: 670px;
	}

    .back {
		width: 14%;
	}
</style>
</head>

<body>
<div class="flex-container">
	<div class="clearfix">
        <div class="back">
		    <p><a href="../main_menu.php">KASZUBnet</a>><a href="edition.php">Edycja</a></p>
		</div>	

		<iframe src="i_edition.php" height="605" width="1136" style="border:none;"></iframe>

	</div>
	<br>
	<br>
	<div class="footer"><h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5></div>
</div>	
</body>
</html>