<?php
    require_once 'connection.php';

    if (isset($_POST['new_login'])){
        $new_login = filter_input(INPUT_POST, 'new_login');

        if ((strlen($new_login)<1) || (strlen($new_login)>30)){ 
            $_SESSION['error_new_login']="Przekaz musi posiadać od 2 do 30 znaków!";
            $_SESSION['given_new_login'] = $new_login;
            header('refresh: 1; url=user_account.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE users SET login=:new_login WHERE id=:u_id ');
        $editQuery->bindValue(':new_login', $new_login, PDO::PARAM_STR);
        $editQuery->bindValue(':u_id', $_SESSION['user_id'], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=user_menu.php');
    }
    