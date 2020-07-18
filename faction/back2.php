<?php

session_start();

unset($_SESSION['character_id']);

$_SESSION['character_id'] = $_SESSION['prev_char_id'];

header('Location: faction.php');
