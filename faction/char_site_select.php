<?php

session_start();

/*
if (isset($_POST['id'])) {

    $_SESSION["character_id"] = $_POST['id'];

    header('Location: template.php');
} else {
    header('Location: i_czlonkowie.php');
}

*/
$x = $_POST['id'];

switch ($x) {
    case 0:  header('Location: i_members.php');
    break;

    case ($x>0):  
        $_SESSION["character_id"] = $_POST['id'];
        header('Location: template.php');
    break;

    default: header('Location: i_members.php');
    break;
}
?>