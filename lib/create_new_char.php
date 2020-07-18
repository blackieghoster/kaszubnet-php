<?php
    require_once 'connection.php';

    if (isset($_POST['new_char'])){
        $new_char = filter_input(INPUT_POST, 'new_char');

        if ((strlen($new_char)<1) || (strlen($new_char)>30)){ 
            $_SESSION['error_new_char']="Przekaz musi posiadać od 2 do 30 znaków!";
            $_SESSION['given_data'] = $new_char;
            header('refresh: 1; url=../new_character.php');
            exit;
        }

        $editQuery = $db->prepare('INSERT INTO characters (u_id, name, access_level) VALUES (:u_id, :new_char, :access_level)');
        $editQuery->bindValue(':u_id', $_SESSION["user_id"], PDO::PARAM_STR);
        $editQuery->bindValue(':new_char', $new_char, PDO::PARAM_STR);
        $editQuery->bindValue(':access_level', 1, PDO::PARAM_STR);
        $editQuery->execute();

        $characterQuery = $db->prepare('SELECT ch_id FROM characters WHERE name = :new_char');
        $characterQuery->bindValue(':new_char', $new_char, PDO::PARAM_STR);
        $characterQuery->execute();

        $character = $characterQuery->fetch();
        $id = $character['id'];

        $editQuery = $db->prepare('INSERT INTO equipment (ch_id) VALUES (:id)');
        $editQuery->bindValue(':id', $id, PDO::PARAM_STR);
        $editQuery->execute();

        $editQuery = $db->prepare('INSERT INTO char_abilities (ch_id) VALUES (:id)');
        $editQuery->bindValue(':id', $id, PDO::PARAM_STR);
        $editQuery->execute();

        $editQuery = $db->prepare('INSERT INTO char_achiev (ch_id) VALUES (:id)');
        $editQuery->bindValue(':id', $id, PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=user_menu.php');
    }
