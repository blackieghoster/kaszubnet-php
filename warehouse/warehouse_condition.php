<?php
session_start();
include '../lib/log_check.php';
require_once '../lib/connection.php';


$warehouse_Query = $db->prepare('SELECT id, item_name, item_amount FROM warehouse WHERE item_amount > "0"');
$warehouse_Query->execute();

$items = $warehouse_Query->fetchAll();
$item = $warehouse_Query->fetch();

?>
<!DOCTYPE html>
<html>

<head>
    <title>KASZUBnet</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../stylestrony9.css">

    <style>
        th,
        td {
            border: 1px solid #37F79F;
            padding: 5px;
            width: 50%;
        }

        .b1 {
            float: right;
            border: 1px solid #37F79F;
            width: 25%;
            height: 146px;
        }

        h3 {
            text-align: center;
        }

        .box {
            float: left;
            border: 1px solid #37F79F;
            width: 50%;
            height: 261px;
        }
    </style>

</head>

<body>

    <div class="flex-container">
        <div class="clearfix">
            <div class="box_header">
                <div class="back">
                    <p><a href="../main_menu.php">KASZUBnet</a>><a href="warehouse.php">Magazyn</a>>Stan_magazynowy</p>
                </div>
                <p id="header">
                    <div class="glitch" data-text="Stan_magazynowy">Zasoby</div>
                </p>

            </div>


            <div class="box">
                <iframe src="i_utility.php" height="260" width="567" style="border:none;">
                </iframe>
            </div>
            <div class="box">
                <iframe src="i_electronics.php" height="260" width="567" style="border:none;">
                </iframe>
            </div>
            <div class="box">
                <iframe src="i_material.php" height="260" width="567" style="border:none;">
                </iframe>
            </div>
            <div class="box">
                <iframe src="i_other.php" height="260" width="567" style="border:none;">
                </iframe>
            </div>
        </div>
        <br>
        <br>
        <div class="footer">
            <h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
        </div>
    </div>

</body>

</html>