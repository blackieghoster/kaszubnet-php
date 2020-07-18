<?php
session_start();
include 'lib/log_check.php';

include 'lib/user_data.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

    <link rel="stylesheet" href="stylestrony9.css">

    <style>
        body{
            background-color: black;
            background-image: none;
        }
        .table {
            padding: 15px;
            border: 1px solid;
        }

        img {
            width: 55%;
            height: 35%;
        }

        table {
            float: center;
            border: 1px solid #37F79F;
            padding: 5px;
            width: 100%;
        }

        .new_char {
            float: center;
            padding: 0px;
            width: 100%;
            text-align: center;
            font-size: 28px;

        }

        th {
            float: center;
            border: 1px solid #37F79F;
            padding: 5px;
            width: 50%;
        }

        td {
            float: center;
            border: 1px solid #37F79F;
            padding: 5px;
            width: auto;
            text-align: center;
            font-size: 24px;
        }
    </style>

</head>

<body>
    <table>
        <thead>
        </thead>
        <tbody>
            <?php
            foreach ($char as $character) {
                echo "
								<tr>
									<td>{$character['name']}</td> 
								
									<th><img src='{$character['photo']}'></th>
								</tr
								";
            }

            ?>
        </tbody>
    </table>

</body>

</html>