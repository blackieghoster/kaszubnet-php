<?php
session_start();
include '../lib/log_check.php';

require_once dirname(__FILE__) . "/src/phpfreechat.class.php";
$params = array();
$params["title"] = "Wezel_komunikacyjny";
$params["nick"] = "";  // setup the intitial nickname
$params["channels"]        = array("OldTown", "ORP_Kaszub", "Tricity", "Północ");
$params["frozen_channels"] = array("OldTown", "ORP_Kaszub", "Tricity", "Północ");
$params['firstisadmin'] = false;
//$params["isadmin"] = true; // makes everybody admin: do not use it on production servers ;)
$params["serverid"] = md5(__FILE__); // calculate a unique id for this chat
$params["debug"] = false;
$params["max_msg"] = 1000;
$params["timeout"] = 50000;

$chat = new phpFreeChat($params);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Wezel_komunikacyjny</title>

	<?php $chat->printJavascript(); ?>
	<?php $chat->printStyle(); ?>

	<link rel="stylesheet" title="classic" type="text/css" href="style/content.css" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono">
	<link rel="stylesheet" href="../css/style.css">

	<style>
		.box0 {
			float: left;
			width: 47%;
			margin: 10px 0px 10px 0px;
			padding: 0px;
			border: 0px solid;
		}

		.box1 {
			float: left;
			width: 0%;
			height: 770px;
			padding: 0px;
			margin-right: 0px;
			border: 0px solid;
		}

		.box2 {
			width: 80%;
			padding: 0px;
			margin: 0px 0px 0px 200px;
			border: 1px solid;
		}

		.back {
			width: 90px;
		}
	</style>
</head>

<body>

	<div class="flex-container">
		<div class="clearfix">

			<div class="box1">
				<div class="back">
					<p><a href="../main_menu.php">KASZUBnet</a></p>
				</div>
				<br>
				<br>
				<br>
				<br>

				<div class="box0">
					<p id="menu"> Kanały:</p>
					<ul>

						<li><a style="font-size: 22px" href="#" onclick="pfc.sendRequest('/join OldTown');">OldTown</a></li>
						<li><a style="font-size: 22px" href="#" onclick="pfc.sendRequest('/join ORP_Kaszub');">ORP_Kaszub</a></li>
						<li><a style="font-size: 22px" href="#" onclick="pfc.sendRequest('/join Tricity');">Tricity</a></li>
						<li><a style="font-size: 22px" href="#" onclick="pfc.sendRequest('/join Północ');">Północ</a></li>
						<br>
						<li><a style="font-size: 22px" href="rules.php">Zasady korzystania z węzła</a></li>
					</ul>
				</div>

			</div>

			<div class="box2">
				<div class="content">
					<?php $chat->printChat(); ?>
					<?php if (isset($params["isadmin"]) && $params["isadmin"]) { ?>
						<p style="color:red;font-weight:bold;">Warning: because of "isadmin" parameter, everybody is admin. Please modify this script before using it on production servers !</p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	</div>
	<br>
	<br>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>

</body>

</html>