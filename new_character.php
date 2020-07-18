<?php
session_start();
include 'lib/log_check.php';
include 'lib/create_new_char.php';

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
        input[type=submit] {
            float: center;
            width: 25%;
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

        form {
            padding: 25px;
            padding-top: 0px;
        }

        .box {
            float: center;
            border: 0px solid #37F79F;
            width: 100%;
            height: 200px;
            text-align: center;
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <div class="flex-container">
        <div class="clearfix">
            <div class="box_header">
                <div class="back">
                    <p><a href="user_menu.php"><b>[Wybór_postaci]</a></p>
                </div>

                <p id="header">
                    <div class="glitch" data-text="Nowa_postać">No_a_po_tać</div>
                </p>
                <div class="box">
                    <form method="post">
                        <h2>Imie postaci:</h2>
                        <p><input name="new_char" type="text" value="<?php
                                                                        if (isset($_SESSION['given_new_char'])) {
                                                                            echo $_SESSION['given_new_char'];
                                                                            unset($_SESSION['given_new_char']);
                                                                        }
                                                                        ?>" placeholder="Imię twojej nowej postaci!">

                            <?php
                            if (isset($_SESSION['error_new_char'])) {
                                echo '<div class="error">' . $_SESSION['error_new_char'] . '</div>';
                                unset($_SESSION['error_new_char']);
                            }
                            ?>
                            <p><input type="submit" value="Dodaj!" /></p>
                    </form>
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