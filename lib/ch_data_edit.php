<?php

include 'character_data.php';

//Characters data

//Character name
if (isset($_POST['name'])) {
    $data = filter_input(INPUT_POST, 'name');

    if ((strlen($data) < 2) || (strlen($data) > 20)) {
        $_SESSION['error_name'] = "Przekaz musi posiadać od 3 do 20 znaków!";
        $_SESSION['given_data_name'] = $data;
        header('refresh: 1; url=i_data_edit.php');
        exit;
    }

    $editQuery = $db->prepare('UPDATE characters SET name = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

/*   //Character age
    if (isset($_POST['age'])){
        $data = filter_input(INPUT_POST, 'age');

        if (!ctype_digit($data)){ 
            $_SESSION['error']="Przekaz może składać się tylko z cyfr";
            $_SESSION['given_data'] = $data;
            header('refresh: 1; url=i_data_edit.php');
            exit;
        }

        if ((strlen($data)<2) || (strlen($data)>20)){ 
            $_SESSION['error']="Przekaz musi posiadać od 1 do 2 znaków!";
            $_SESSION['given_data'] = $data;
            header('refresh: 1; url=i_data_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE characters SET age = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $character_id/*$_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_data_edit.php');
    }
*/
//Character birth date
if (isset($_POST['birth'])) {
    $data = filter_input(INPUT_POST, 'birth');

    $editQuery = $db->prepare('UPDATE characters SET birth = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

//Character function
if (isset($_POST['function'])) {
    $data = filter_input(INPUT_POST, 'function');

    if ((strlen($data) < 2) || (strlen($data) > 20)) {
        $_SESSION['error_function'] = "Przekaz musi posiadać od 3 do 20 znaków!";
        $_SESSION['given_data_function'] = $data;
        header('refresh: 1; url=i_data_edit.php');
        exit;
    }

    $editQuery = $db->prepare('UPDATE characters SET function = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

//Character abode
if (isset($_POST['abode'])) {
    $data = filter_input(INPUT_POST, 'abode');

    $editQuery = $db->prepare('UPDATE characters SET abode = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

//Character origin
if (isset($_POST['origin'])) {
    $data = filter_input(INPUT_POST, 'origin');

    if ((strlen($data) < 2) || (strlen($data) > 100)) {
        $_SESSION['error_origin'] = "Przekaz musi posiadać od 3 do 100 znaków!";
        $_SESSION['given_data_origin'] = $data;
        header('refresh: 1; url=i_data_edit.php');
        exit;
    }

    $editQuery = $db->prepare('UPDATE characters SET origin = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

//Character job
if (isset($_POST['job'])) {
    $data = filter_input(INPUT_POST, 'job');

    if ((strlen($data) < 2) || (strlen($data) > 50)) {
        $_SESSION['error_job'] = "Przekaz musi posiadać od 3 do 50 znaków!";
        $_SESSION['given_data_job'] = $data;
        header('refresh: 1; url=i_data_edit.php');
        exit;
    }

    $editQuery = $db->prepare('UPDATE characters SET job = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

//Character specialization
if (isset($_POST['specialization'])) {
    $data = filter_input(INPUT_POST, 'specialization');

    if ((strlen($data) < 2) || (strlen($data) > 120)) {
        $_SESSION['error_spec'] = "Przekaz musi posiadać od 3 do 120 znaków!";
        $_SESSION['given_data_spec'] = $data;
        header('refresh: 1; url=i_data_edit.php');
        exit;
    }

    $editQuery = $db->prepare('UPDATE characters SET specialization = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

//Character religion
if (isset($_POST['religion'])) {
    $data = filter_input(INPUT_POST, 'religion');

    if ((strlen($data) < 2) || (strlen($data) > 30)) {
        $_SESSION['error_religion'] = "Przekaz musi posiadać od 3 do 30 znaków!";
        $_SESSION['given_data_religion'] = $data;
        header('refresh: 1; url=i_data_edit.php');
        exit;
    }

    $editQuery = $db->prepare('UPDATE characters SET religion = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

//Character ot_presence
if (isset($_POST['ot_presence_14']) || isset($_POST['ot_presence_15']) || isset($_POST['ot_presence_16']) || isset($_POST['ot_presence_17']) || isset($_POST['ot_presence_18']) || isset($_POST['ot_presence_19'])) {
    $data1 = filter_input(INPUT_POST, 'ot_presence_14');
    $data2 = filter_input(INPUT_POST, 'ot_presence_15');
    $data3 = filter_input(INPUT_POST, 'ot_presence_16');
    $data4 = filter_input(INPUT_POST, 'ot_presence_17');
    $data5 = filter_input(INPUT_POST, 'ot_presence_18');
    $data6 = filter_input(INPUT_POST, 'ot_presence_19');

    $x = " [" . $data1 . "] [" . $data2 . "] [" . $data3 . "] [" . $data4 . "] [" . $data5 . "] [" . $data6 . "] ";

    $editQuery = $db->prepare('UPDATE characters SET ot_presence = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $x, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}

//Character history
if (isset($_POST['ch_history'])) {
    $data = filter_input(INPUT_POST, 'ch_history');

    if ((strlen($data) < 2) || (strlen($data) > 100000)) {
        $_SESSION['error_history'] = "Przekaz musi posiadać od 3 do 65000 znaków!";
        $_SESSION['given_data_history'] = $data;
        header('refresh: 1; url=i_data_edit.php');
        exit;
    }

    $editQuery = $db->prepare('UPDATE characters SET ch_history = :character_data WHERE id = :character_id');
    $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
    $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $editQuery->execute();

    header('refresh: 1; url=i_data_edit.php');
}
