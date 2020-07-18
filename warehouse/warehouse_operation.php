<?php
session_start();
include '../lib/log_check.php';
require_once '../lib/connection.php';

$warehouse_Query = $db->prepare('SELECT item_name FROM warehouse');
$warehouse_Query->execute();

$items = $warehouse_Query->fetchAll();
$item = $warehouse_Query->fetch();

$people_Query = $db->prepare('SELECT name FROM characters WHERE access_level>0');
$people_Query->execute();

$people = $people_Query->fetchAll();
$person = $people_Query->fetch();

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
            text-align: left;
        }

        .box {
            float: left;
            border: 1px solid #37F79F;
            width: 50%;
            height: 520px;
        }

        .boxheader {
            text-align: center;
            border: 1px solid #37F79F;
            width: 100%;
        }

        form {
            padding: 25px;
            padding-top: 0px;
        }

        input {
            width: 200px;
        }

        datalist {
            width: 300px;
        }

        input[type=submit] {
            float: right;
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 7px 10px;
            margin: 4px 0;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #30F294;
        }

        .error {
			color: red;
			font-size: 16px;
		}
    </style>

</head>

<body>

    <div class="flex-container">
        <div class="clearfix">
            <div class="box_header">
                <div class="back">
                    <p><a href="../main_menu.php">KASZUBnet</a>><a href="warehouse.php">Magazyn</a>>Przyjęcie/Wydanie</p>
                </div>
                <p id="header">
                    <div class="glitch" data-text="Przyjęcie/Wydanie">Przy_eci_/Wyd_nie</div>
                </p>

            </div>


            <div class="box">
                <div class="boxheader">
                    <h1>Przyjęcie</h1>
                </div>

                <form method="post" action="admission_operation.php">
                    <h2>Nazwa przedmiotu: </h2>
                    <input list="items" name="admission_name" type="text" value="<?php
                                                                                    if (isset($_SESSION['given_admission_name'])) {
                                                                                        echo $_SESSION['given_admission_name'];
                                                                                        unset($_SESSION['given_admission_name']);
                                                                                    }
                                                                                    ?>" />
                    <datalist id="items">
                        <?php
                        foreach ($items as $items_2) {
                            echo " 
						<option value={$items_2['item_name']}>";
                        }
                        ?>
                    </datalist>
                    <?php
                    if (isset($_SESSION['error_admission_name'])) {
                        echo '<div class="error">' . $_SESSION['error_admission_name'] . '</div>';
                        unset($_SESSION['error_admission_name']);
                    }
                    ?>
                    <h2>Ilość: </h2>
                    <input name="admission_amount" type="text" value="<?php
                                                                        if (isset($_SESSION['given_admission_amount'])) {
                                                                            echo $_SESSION['given_admission_amount'];
                                                                            unset($_SESSION['given_admission_amount']);
                                                                        }
                                                                        ?>" />

                    <?php
                    if (isset($_SESSION['error_admission_amount'])) {
                        echo '<div class="error">' . $_SESSION['error_admission_amount'] . '</div>';
                        unset($_SESSION['error_admission_amount']);
                    }
                    ?>

                    <h2>Przynoszący: </h2>
                    <input list="people" name="admission_client" type="text" value="<?php
                                                                            if (isset($_SESSION['given_admission_client'])) {
                                                                                echo $_SESSION['given_admission_client'];
                                                                                unset($_SESSION['given_admission_client']);
                                                                            }
                                                                            ?>" />
                    <datalist id="people">
                        <?php
                        foreach ($people as $person) {
                            echo " 
						<option value={$person['name']}>";
                        }
                        ?>
                    </datalist>
                    <?php
                    if (isset($_SESSION['error_admission_client'])) {
                        echo '<div class="error">' . $_SESSION['error_admission_client'] . '</div>';
                        unset($_SESSION['error_admission_client']);
                    }
                    ?>
                    <h2>Komentarz: </h2><input name="admission_comment" type="text" value="<?php
                                                                                    if (isset($_SESSION['given_admission_comment'])) {
                                                                                        echo $_SESSION['given_admission_comment'];
                                                                                        unset($_SESSION['given_admission_comment']);
                                                                                    }
                                                                                    ?>" />

                    <?php
                    if (isset($_SESSION['error_admission_comment'])) {
                        echo '<div class="error">' . $_SESSION['error_admission_comment'] . '</div>';
                        unset($_SESSION['error_admission_comment']);
                    }
                    ?>
                    <p><input type="submit" value="Przyjmij do magazynu!" /></p>
                    <?php
                    if (isset($_SESSION['error_all1'])) {
                        echo '<div class="error">' . $_SESSION['error_all1'] . '</div>';
                        unset($_SESSION['error_all1']);
                    }
                    ?>
                </form>

            </div>
            <div class="box">
                <div class="boxheader">
                    <h1>Wydanie</h1>
                </div>

                <form method="post" action="release_operation.php">
                    <h2>Nazwa przedmiotu: </h2>
                    <input list="items" name="release_name" type="text" value="<?php
                                                                                if (isset($_SESSION['given_release_name'])) {
                                                                                    echo $_SESSION['given_release_name'];
                                                                                    unset($_SESSION['given_release_name']);
                                                                                }
                                                                                ?>" />
                    <datalist id="items">
                        <?php
                        foreach ($items as $items_2) {
                            echo " 
						<option value={$items_2['item_name']}>";
                        }
                        ?>
                    </datalist>
                    <?php
                    if (isset($_SESSION['error_release_name'])) {
                        echo '<div class="error">' . $_SESSION['error_release_name'] . '</div>';
                        unset($_SESSION['error_release_name']);
                    }
                    ?>
                    <h2>Ilość: </h2>
                    <input name="release_amount" type="text" value="<?php
                                                            if (isset($_SESSION['given_release_amount'])) {
                                                                echo $_SESSION['given_release_amount'];
                                                                unset($_SESSION['given_release_amount']);
                                                            }
                                                            ?>" />

                    <?php
                    if (isset($_SESSION['error_release_amount'])) {
                        echo '<div class="error">' . $_SESSION['error_release_amount'] . '</div>';
                        unset($_SESSION['error_release_amount']);
                    }
                    ?>

                    <h2>Dla: </h2>
                    <input list="people" name="release_client" type="text" value="<?php
                                                                                    if (isset($_SESSION['given_release_client'])) {
                                                                                        echo $_SESSION['given_release_client'];
                                                                                        unset($_SESSION['given_release_client']);
                                                                                    }
                                                                                    ?>" />
                    <datalist id="people">
                        <?php
                        foreach ($people as $person) {
                            echo " 
						<option value={$person['name']}>";
                        }
                        ?>
                    </datalist>
                    <?php
                    if (isset($_SESSION['error_release_client'])) {
                        echo '<div class="error">' . $_SESSION['error_release_client'] . '</div>';
                        unset($_SESSION['error_release_client']);
                    }
                    ?>
                    <h2>Powód: </h2>
                    <input list="reasons" name="release_comment" type="text" value="<?php
                                                                                    if (isset($_SESSION['given_release_comment'])) {
                                                                                        echo $_SESSION['given_release_comment'];
                                                                                        unset($_SESSION['given_release_comment']);
                                                                                    }
                                                                                    ?>" />

                    <datalist id="reasons">
                        <option value="Handel">
                        <option value="Potrzeby własne">

                    </datalist>
                    <?php
                    if (isset($_SESSION['error_release_comment'])) {
                        echo '<div class="error">' . $_SESSION['error_release_comment'] . '</div>';
                        unset($_SESSION['error_release_comment']);
                    }
                    ?>
                    <p><input type="submit" value="Wydaj z magazynu!" /></p>
                    <?php
                    if (isset($_SESSION['error_all2'])) {
                        echo '<div class="error">' . $_SESSION['error_all2'] . '</div>';
                        unset($_SESSION['error_all2']);
                    }
                    ?>
                </form>
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