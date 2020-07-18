<?php
session_start();
include '../lib/log_check.php';
require_once '../lib/connection.php';

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
            width: 100%;
            height: 520px;
        }
    </style>

</head>

<body>

    <div class="flex-container">
        <div class="clearfix">
            <div class="box_header">
                <div class="back">
                    <p><a href="../main_menu.php">KASZUBnet</a>><a href="warehouse.php">Magazyn</a>>Ewidencja_magazynowa</p>
                </div>
                <p id="header">
                    <div class="glitch" data-text="Ewidencja_magazynowa">Ewi_enc_a_ma_azy_owa</div>
                </p>

            </div>

            <div class="box">
                <iframe src="i_log.php" height="518" width="1137" style="border:none;">
                </iframe>

            </div>
        </div>
        <br>
        <br>
        <div class="footer">
            <h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
        </div>
</body>

</html>