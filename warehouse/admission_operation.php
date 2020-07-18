<?php
session_start();
require_once '../lib/connection.php';

//item admission
if (isset($_POST['admission_name']) && ($_POST['admission_amount']) && ($_POST['admission_client']) && ($_POST['admission_comment'])) {
    $name = filter_input(INPUT_POST, 'admission_name');
    $amount = filter_input(INPUT_POST, 'admission_amount');
    $client = filter_input(INPUT_POST, 'admission_client');
    $comment = filter_input(INPUT_POST, 'admission_comment');


    if ((strlen($name) < 1) || (strlen($name) > 30)) {
        $_SESSION['error_admission_name'] = "Przekaz musi posiadać od 2 do 30 znaków!";
        $_SESSION['given_admission_name'] = $name;
        header('refresh: 1; url=warehouse_operation.php');
        exit;
    }

    if (!ctype_digit($amount)) {
        $_SESSION['error_admission_amount'] = "Przekaz może składać się tylko z cyfr";
        $_SESSION['given_admission_amount'] = $amount;
        header('refresh: 1; url=warehouse_operation.php');
        exit;
    }

    $amountQuery = $db->prepare('SELECT item_amount FROM warehouse WHERE item_name = :item_name');
    $amountQuery->bindValue(':item_name', $name, PDO::PARAM_STR);
    $amountQuery->execute();
    $am = $amountQuery->fetch();

    $previous_amount = $am['item_amount'];
    $new_amount = $previous_amount + $amount;

    if ((strlen($client) < 2) || (strlen($client) > 30)) {
        $_SESSION['error_admission_client'] = "Przekaz musi posiadać od 3 do 30 znaków!";
        $_SESSION['given_admission_client'] = $client;
        header('refresh: 1; url=warehouse_operation.php');
        exit;
    }

    if ((strlen($comment) < 2) || (strlen($comment) > 300)) {
        $_SESSION['error_admission_comment'] = "Przekaz musi posiadać od 3 do 300 znaków!";
        $_SESSION['given_admission_comment'] = $comment;
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
    $logQuery->bindValue(':action', 'przyjęcie', PDO::PARAM_STR);
    $logQuery->execute();

    header('refresh: 1; url=warehouse_operation.php');
} else {
    $_SESSION['error_all1'] = "Wszystkie pola muszą być uzupełnione!";
    header('refresh: 1; url=warehouse_operation.php');
    exit;
}


