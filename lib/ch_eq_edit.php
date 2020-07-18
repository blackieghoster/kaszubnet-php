<?php

include 'character_data.php';

//Characters eq

    //Character throw_weapon
    if (isset($_POST['throw_weapon'])){
        $data = filter_input(INPUT_POST, 'throw_weapon');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_tw']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_tw'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET throw_weapon = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }

    //Character helmet
    if (isset($_POST['helmet'])){
        $data = filter_input(INPUT_POST, 'helmet');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_helmet']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_helmet'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET helmet = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }

    //Character gas_mask
    if (isset($_POST['gas_mask'])){
        $data = filter_input(INPUT_POST, 'gas_mask');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_gas']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_gas'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET gas_mask = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }

    //Character shield
    if (isset($_POST['shield'])){
        $data = filter_input(INPUT_POST, 'shield');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_shield']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_shield'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET shield = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }

    //Character main_firearm
    if (isset($_POST['main_firearm'])){
        $data = filter_input(INPUT_POST, 'main_firearm');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_mf']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_mf'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET main_firearm = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character torso
    if (isset($_POST['torso'])){
        $data = filter_input(INPUT_POST, 'torso');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_torso']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_torso'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET torso = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character armor_rating
    if (isset($_POST['armor_rating'])){
        $data = filter_input(INPUT_POST, 'armor_rating');

        if (!ctype_digit($data)){ 
            $_SESSION['error_ar']="Przekaz może składać się tylko z cyfr!";
            $_SESSION['given_data_ar'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        if ((strlen($data)<0) || (strlen($data)>2)){ 
            $_SESSION['error_ar']="Przekaz musi posiadać od 1 do 2 znaków!";
            $_SESSION['given_data_ar'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET armor_rating = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character rad_res
    if (isset($_POST['rad_res'])){
        $data = filter_input(INPUT_POST, 'rad_res');

        if (!ctype_digit($data)){ 
            $_SESSION['error_rr']="Przekaz może składać się tylko z cyfr!";
            $_SESSION['given_data_rr'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        if ((strlen($data)<0) || (strlen($data)>2)){ 
            $_SESSION['error_rr']="Przekaz musi posiadać od 1 do 2 znaków!";
            $_SESSION['given_data_rr'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET rad_res = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character two_handed
    if (isset($_POST['two_handed'])){
        $data = filter_input(INPUT_POST, 'two_handed');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_th']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_th'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET two_handed = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character pistol
    if (isset($_POST['pistol'])){
        $data = filter_input(INPUT_POST, 'pistol');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_pistol']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_pistol'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET pistol = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character short_malee
    if (isset($_POST['short_malee'])){
        $data = filter_input(INPUT_POST, 'short_malee');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_sm']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_sm'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET short_malee = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character pants
    if (isset($_POST['pants'])){
        $data = filter_input(INPUT_POST, 'pants');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_pants']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_pants'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET pants = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character one_handed
    if (isset($_POST['one_handed'])){
        $data = filter_input(INPUT_POST, 'one_handed');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_oh']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_oh'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET one_handed = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }
    //Character other
    if (isset($_POST['other'])){
        $data = filter_input(INPUT_POST, 'other');

        if ((strlen($data)<2) || (strlen($data)>200)){ 
            $_SESSION['error_other']="Przekaz musi posiadać od 3 do 200 znaków!";
            $_SESSION['given_data_other'] = $data;
            header('refresh: 1; url=i_eq_edit.php');
            exit;
        }

        $editQuery = $db->prepare('UPDATE equipment SET other = :character_data WHERE id = :character_id');
        $editQuery->bindValue(':character_data', $data, PDO::PARAM_STR);
        $editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
        $editQuery->execute();

        header('refresh: 1; url=i_eq_edit.php');
    }

?>