<?php

session_start();

include 'log_check.php';
include 'connection.php';

if (isset($_POST['characters'])) {

    $data = $_POST['characters'];

    $Query = $db->prepare('SELECT ch_id FROM characters WHERE name = :character_name');

    $Query->bindValue(':character_name', $data, PDO::PARAM_STR);
    $Query->execute();

    $character = $Query->fetch();

    $_SESSION['character_id'] = $character_id = $character['ch_id'];
    $_SESSION['prev_char_id'] = $character_prev_id = $character['ch_id'];

    header('Location: ../main_menu.php');
}
