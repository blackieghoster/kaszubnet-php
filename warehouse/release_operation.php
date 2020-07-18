<?php
session_start();
require_once '../lib/connection.php';

//item release

if (isset($_POST['release_name']) && ($_POST['release_amount']) && ($_POST['release_client']) && ($_POST['release_comment'])) {
    $name = filter_input(INPUT_POST, 'release_name');
    $amount = filter_input(INPUT_POST, 'release_amount');
    $client = filter_input(INPUT_POST, 'release_client');
    $comment = filter_input(INPUT_POST, 'release_comment');


    if ((strlen($name) < 2) || (strlen($name) > 30)) {
        $_SESSION['error_release_name'] = "Przekaz musi posiadać od 3 do 30 znaków!";
        $_SESSION['given_release_name'] = $name;
        header('refresh: 1; url=warehouse_operation.php');
        exit;
    }

    if (!ctype_digit($amount)) {
        $_SESSION['error_release_amount'] = "Przekaz może składać się tylko z cyfr";
        $_SESSION['given_release_amount'] = $amount;
        header('refresh: 1; url=warehouse_operation.php');
        exit;
    }

    $amountQuery = $db->prepare('SELECT item_amount FROM warehouse WHERE item_name = :item_name');
    $amountQuery->bindValue(':item_name', $name, PDO::PARAM_STR);
    $amountQuery->execute();
    $am = $amountQuery->fetch();

    $previous_amount = $am['item_amount'];
    $new_amount = $previous_amount - $amount;

    if ($new_amount <0){
        $_SESSION['error_release_amount'] = "Nie wystarczająca ilosć zasobu do wydania!";
        $_SESSION['given_release_amount'] = $amount;
        header('refresh: 1; url=warehouse_operation.php');
        exit;
    }

    if ((strlen($client) < 2) || (strlen($client) > 30)) {
        $_SESSION['error_release_client'] = "Przekaz musi posiadać od 3 do 30 znaków!";
        $_SESSION['given_release_client'] = $client;
        header('refresh: 1; url=warehouse_operation.php');
        exit;
    }

    if ((strlen($comment) < 2) || (strlen($comment) > 300)) {
        $_SESSION['error_release_comment'] = "Przekaz musi posiadać od 3 do 300 znaków!";
        $_SESSION['given_release_comment'] = $comment;
        header('refresh: 1; url=warehouse_operation.php');
        exit;
    }

    $admissionQuery = $db->prepare('UPDATE warehouse SET item_amount = :item_amount WHERE item_name = :item_name');
    $admissionQuery->bindValue(':item_amount', $new_amount, PDO::PARAM_STR);
    $admissionQuery->bindValue(':item_name', $name, PDO::PARAM_STR);
    $admissionQuery->execute();

    $logQuery = $db->prepare('INSERT INTO warehouse_log (warehouseman, item, amount, client, comment, action, time) VALUES ( :warehouseman, :item, :amount, :client, :comment, :action, now() + INTERVAL 100 YEAR)');
    $logQuery->bindValue(':warehouseman', $_SESSION['character_name'], PDO::PARAM_STR);
    $logQuery->bindValue(':item', $name, PDO::PARAM_STR);
    $logQuery->bindValue(':amount', $amount, PDO::PARAM_STR);
    $logQuery->bindValue(':client', $client, PDO::PARAM_STR);
    $logQuery->bindValue(':comment', $comment, PDO::PARAM_STR);
    $logQuery->bindValue(':action', 'wydanie', PDO::PARAM_STR);
    $logQuery->execute();

    header('refresh: 1; url=warehouse_operation.php');
} else {
    $_SESSION['error_all2'] = "Wszystkie pola muszą być uzupełnione!";
    header('refresh: 1; url=warehouse_operation.php');
    exit;
}