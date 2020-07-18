<?php
session_start();
include '../lib/log_check.php';
require_once '../lib/connection.php';

$warehouse_Query = $db->prepare('SELECT id, item_name, item_amount FROM warehouse WHERE type = "material" AND item_amount > "0"');
$warehouse_Query->execute();

$items = $warehouse_Query->fetchAll();
$items_rows = $warehouse_Query->rowCount();
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
        body {
            background-image: none;
        }

        th,
        td {
            border: 1px solid #37F79F;
            padding: 5px;
            width: 100%;
        }

        .boxheader {
            text-align: center;
            border: 1px solid #37F79F;
            width: 100%;
        }

        table {
            padding: 15px;
        }
    </style>

</head>

<body>

    <div class="clearfix">
        <div class="boxheader">
            <h2>Surowce</h2>
        </div>

        <table>
            <thead>
                <tr>

                    <th>Nazwa</th>
                    <th>Ilość</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $item) {
                    echo "<tr>
									<td>{$item['item_name']}</td><td>{$item['item_amount']}</td>
								</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

</body>

</html>