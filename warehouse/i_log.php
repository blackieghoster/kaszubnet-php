<?php
session_start();
include '../lib/log_check.php';
require_once '../lib/connection.php';

$warehouse_log_Query = $db->prepare('SELECT warehouseman, item, amount, client, comment, action, time FROM warehouse_log');
$warehouse_log_Query->execute();

$logs = $warehouse_log_Query->fetchAll();
$log = $warehouse_log_Query->fetch();

?>
<!DOCTYPE html>
<html>

<head>
    <title>KASZUBnet</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="../css/style.css">

    <style>
        body {
            background-image: none;
        }

        th,
        td {
            border: 1px solid #37F79F;
            padding: 5px;
            width: 100%;
            font-size: 14px;
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

        <table>
            <thead>
                <tr>

                    <th>Magazynier</th>
                    <th>Przedmiot</th>
                    <th>Ilość</th>
                    <th>Przynoszący / Dla</th>
                    <th>Akcja</th>
                    <th>Komentarz/Powód</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($logs as $log) {
                    echo "<tr>
									<td>{$log['warehouseman']}</td><td>{$log['item']}</td><td>{$log['amount']}</td><td>{$log['client']}</td><td>{$log['action']}</td><td>{$log['comment']}</td><td>{$log['time']}</td>
								</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

</body>

</html>