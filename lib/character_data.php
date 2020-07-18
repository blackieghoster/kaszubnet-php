<?php
require_once 'connection.php';


// character data

    $characterQuery = $db->prepare('SELECT * FROM characters WHERE ch_id = :character_id');

    $characterQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $characterQuery->execute();

    $character = $characterQuery->fetch();

    $_SESSION['character_name'] = $character_name = $character['name'];
    $_SESSION['character_photo'] = $character_photo = $character['photo'];

    $character_age = $character['age'];
    $character_birth = $character['birth'];
    $character_function = $character['function'];
    $character_abode = $character['abode']; 
    $character_origin = $character['origin']; 
    $character_job = $character['job'];
    $character_specialization = $character['specialization'];
    $character_religion = $character['religion'];
    $character_ot_presence = $character['ot_presence'];
    $character_history = $character['ch_history'];

// character equipment

    $character_eq_Query = $db->prepare('SELECT * FROM equipment WHERE ch_id = :character_id');

    $character_eq_Query->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $character_eq_Query->execute();

    $character_eq = $character_eq_Query->fetch();

    $id = $character_eq['ch_id'];
    $throw_weapon = $character_eq['throw_weapon'];
    $tw_photo = $character_eq['tw_photo'];
    $helmet = $character_eq['helmet'];
    $helmet_photo = $character_eq['helmet_photo'];
    $gas_mask = $character_eq['gas_mask'];
    $gm_photo = $character_eq['gm_photo'];
    $shield = $character_eq['shield'];
    $shield_photo = $character_eq['shield_photo'];
    $main_firearm = $character_eq['main_firearm'];
    $mf_photo = $character_eq['mf_photo'];
    $torso = $character_eq['torso'];
    $torso_photo = $character_eq['torso_photo'];
    $armor_rating = $character_eq['armor_rating'];
    $rad_res = $character_eq['rad_res'];
    $two_handed = $character_eq['two_handed'];
    $th_photo = $character_eq['th_photo'];
    $pistol = $character_eq['pistol'];
    $pistol_photo = $character_eq['pistol_photo'];
    $short_malee = $character_eq['short_malee'];
    $sm_photo = $character_eq['sm_photo'];
    $pants = $character_eq['pants'];
    $pants_photo = $character_eq['pants_photo'];
    $one_handed = $character_eq['one_handed'];
    $oh_photo = $character_eq['oh_photo'];
    $other = $character_eq['other'];


// character achievements

    $character_achiev_Query = $db->prepare('SELECT * FROM char_achiev WHERE ch_id = :character_id');

    $character_achiev_Query->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $character_achiev_Query->execute();

    $character_achiev = $character_achiev_Query->fetch();

// achievements_availability_data

    $sito_1 = $character_achiev['sito_1'];
    $sito_2 = $character_achiev['sito_2'];
    $sito_3 = $character_achiev['sito_3'];
    $kukla_1 = $character_achiev['kukla_1'];
    $kukla_2 = $character_achiev['kukla_2'];
    $kukla_3 = $character_achiev['kukla_3'];
    $snajper_1 = $character_achiev['snajper_1'];
    $snajper_2 = $character_achiev['snajper_2'];
    $snajper_3 = $character_achiev['snajper_3'];
    $rzeznik_1 = $character_achiev['rzeznik_1'];
    $rzeznik_2 = $character_achiev['rzeznik_2'];
    $rzeznik_3 = $character_achiev['rzeznik_3'];
    $killer_1 = $character_achiev['killer_1'];
    $killer_2 = $character_achiev['killer_2'];
    $killer_3 = $character_achiev['killer_3'];
    $men_of_mayhem = $character_achiev['men_of_mayhem'];
    $deratyzator_1 = $character_achiev['deratyzator_1'];
    $deratyzator_2 = $character_achiev['deratyzator_2'];
    $deratyzator_3 = $character_achiev['deratyzator_3'];
    $the_judge_1 = $character_achiev['the_judge_1'];
    $the_judge_2 = $character_achiev['the_judge_2'];
    $the_judge_3 = $character_achiev['the_judge_3'];

    $dzielny_pacjent_1 = $character_achiev['dzielny_pacjent_1'];
    $dzielny_pacjent_2 = $character_achiev['dzielny_pacjent_2'];
    $dzielny_pacjent_3 = $character_achiev['dzielny_pacjent_3'];
    $siostro_basen_1 = $character_achiev['siostro_basen_1'];
    $siostro_basen_2 = $character_achiev['siostro_basen_2'];
    $siostro_basen_3 = $character_achiev['siostro_basen_3'];
    $doc_zed_1 = $character_achiev['doc_zed_1'];
    $doc_zed_2 = $character_achiev['doc_zed_2'];
    $doc_zed_3 = $character_achiev['doc_zed_3'];
    $wanna_be_kass = $character_achiev['wanna_be_kass'];
    $wanna_be_dziksu = $character_achiev['wanna_be_dziksu'];

    $gold_digger_1 = $character_achiev['gold_digger_1'];
    $gold_digger_2 = $character_achiev['gold_digger_2'];
    $gold_digger_3 = $character_achiev['gold_digger_3'];
    $zombie = $character_achiev['zombie'];
    $rozrzutny_1 = $character_achiev['rozrzutny_1'];
    $rozrzutny_2 = $character_achiev['rozrzutny_2'];
    $rozrzutny_3 = $character_achiev['rozrzutny_3'];
    $sugar_daddy_1 = $character_achiev['sugar_daddy_1'];
    $sugar_daddy_2 = $character_achiev['sugar_daddy_2'];
    $sugar_daddy_3 = $character_achiev['sugar_daddy_3'];
    $sugar_daddy_4 = $character_achiev['sugar_daddy_4'];

    $stalker_1 = $character_achiev['stalker_1'];
    $stalker_2 = $character_achiev['stalker_2'];
    $stalker_3 = $character_achiev['stalker_3'];
    $tulacz = $character_achiev['tulacz'];
    $podroznik = $character_achiev['podroznik'];
    $wloczykij = $character_achiev['wloczykij'];
    $pielgrzym = $character_achiev['pielgrzym'];
    $powsinoga = $character_achiev['powsinoga'];
    $wojazer = $character_achiev['wojazer'];
    $the_wanderer = $character_achiev['the_wanderer'];

    $mr_gumby = $character_achiev['mr_gumby'];
    $oscar = $character_achiev['oscar'];
    $rasta = $character_achiev['rasta'];
    $zul = $character_achiev['zul'];
    $chmielu = $character_achiev['chmielu'];
    $trzezwy = $character_achiev['trzezwy'];
    $night_watch = $character_achiev['night_watch'];
    $guardian_angel_1 = $character_achiev['guardian_angel_1'];
    $guardian_angel_2 = $character_achiev['guardian_angel_2'];
    $guardian_angel_3 = $character_achiev['guardian_angel_3'];
    $unholy_one = $character_achiev['unholy_one'];
    $i_live_i_die_1 = $character_achiev['i_live_i_die_1'];
    $i_live_i_die_2 = $character_achiev['i_live_i_die_2'];
    $i_live_i_die_3 = $character_achiev['i_live_i_die_3'];
    $captain_wanna_be = $character_achiev['captain_wanna_be'];
    $szambor = $character_achiev['szambor'];


// achievements_combat

    if ($sito_1) {
        $sito_1_ph = "../zdjecia_achiev/sito_1.png";
    } else {
        $sito_1_ph = "../zdjecia_achiev/sito_blank.png";
    }

    if ($sito_2) {
        $sito_2_ph = "../zdjecia_achiev/sito_2.png";
    } else {
        $sito_2_ph = "../zdjecia_achiev/sito_blank.png";
    }

    if ($sito_3) {
        $sito_3_ph = "../zdjecia_achiev/sito_3.png";
    } else {
        $sito_3_ph = "../zdjecia_achiev/sito_blank.png";
    }


    if ($kukla_1) {
        $kukla_1_ph = "../zdjecia_achiev/kukla_1.png";
    } else {
        $kukla_1_ph = "../zdjecia_achiev/kukla_blank.png";
    }

    if ($kukla_2) {
        $kukla_2_ph = "../zdjecia_achiev/kukla_2.png";
    } else {
        $kukla_2_ph = "../zdjecia_achiev/kukla_blank.png";
    }

    if ($kukla_3) {
        $kukla_3_ph = "../zdjecia_achiev/kukla_3.png";
    } else {
        $kukla_3_ph = "../zdjecia_achiev/kukla_blank.png";
    }


    if ($snajper_1) {
        $snajper_1_ph = "../zdjecia_achiev/snajper_1.png";
    } else {
        $snajper_1_ph = "../zdjecia_achiev/snajper_blank.png";
    }

    if ($snajper_2) {
        $snajper_2_ph = "../zdjecia_achiev/snajper_2.png";
    } else {
        $snajper_2_ph = "../zdjecia_achiev/snajper_blank.png";
    }

    if ($snajper_3) {
        $snajper_3_ph = "../zdjecia_achiev/snajper_3.png";
    } else {
        $snajper_3_ph = "../zdjecia_achiev/snajper_blank.png";
    }


    if ($rzeznik_1) {
        $rzeznik_1_ph = "../zdjecia_achiev/rzeznik_1.png";
    } else {
        $rzeznik_1_ph = "../zdjecia_achiev/rzeznik_blank.png";
    }

    if ($rzeznik_2) {
        $rzeznik_2_ph = "../zdjecia_achiev/rzeznik_2.png";
    } else {
        $rzeznik_2_ph = "../zdjecia_achiev/rzeznik_blank.png";
    }

    if ($rzeznik_3) {
        $rzeznik_3_ph = "../zdjecia_achiev/rzeznik_3.png";
    } else {
        $rzeznik_3_ph = "../zdjecia_achiev/rzeznik_blank.png";
    }


    if ($killer_1) {
        $killer_1_ph = "../zdjecia_achiev/killer_1.png";
    } else {
        $killer_1_ph = "../zdjecia_achiev/sito_blank.png";
    }

    if ($killer_2) {
        $killer_2_ph = "../zdjecia_achiev/killer_2.png";
    } else {
        $killer_2_ph = "../zdjecia_achiev/sito_blank.png";
    }

    if ($killer_3) {
        $killer_3_ph = "../zdjecia_achiev/killer_3.png";
    } else {
        $killer_3_ph = "../zdjecia_achiev/sito_blank.png";
    }


    if ($men_of_mayhem) {
        $men_of_mayhem_ph = "../zdjecia_achiev/men_of_mayhem.png";
    } else {
        $men_of_mayhem_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($deratyzator_1) {
        $deratyzator_1_ph = "../zdjecia_achiev/deratyzator_1.png";
    } else {
        $deratyzator_1_ph = "../zdjecia_achiev/deratyzator_blank.png";
    }

    if ($deratyzator_2) {
        $deratyzator_2_ph = "../zdjecia_achiev/deratyzator_2.png";
    } else {
        $deratyzator_2_ph = "../zdjecia_achiev/deratyzator_blank.png";
    }

    if ($deratyzator_3) {
        $deratyzator_3_ph = "../zdjecia_achiev/deratyzator_3.png";
    } else {
        $deratyzator_3_ph = "../zdjecia_achiev/deratyzator_blank.png";
    }

    if ($the_judge_1) {
        $the_judge_1_ph = "../zdjecia_achiev/the_judge_1.png";
    } else {
        $the_judge_1_ph = "../zdjecia_achiev/the_judge_blank.png";
    }

    if ($the_judge_2) {
        $the_judge_2_ph = "../zdjecia_achiev/the_judge_2.png";
    } else {
        $the_judge_2_ph = "../zdjecia_achiev/the_judge_blank.png";
    }

    if ($the_judge_3) {
        $the_judge_3_ph = "../zdjecia_achiev/the_judge_3.png";
    } else {
        $the_judge_3_ph = "../zdjecia_achiev/the_judge_blank.png";
    }

// achievements_medic

    if ($dzielny_pacjent_1) {
        $dzielny_pacjent_1_ph = "../zdjecia_achiev/dzielny_pacjent_1.png";
    } else {
        $dzielny_pacjent_1_ph = "../zdjecia_achiev/dzielny_pacjent_blank.png";
    }

    if ($dzielny_pacjent_2) {
        $dzielny_pacjent_2_ph = "../zdjecia_achiev/dzielny_pacjent_2.png";
    } else {
        $dzielny_pacjent_2_ph = "../zdjecia_achiev/dzielny_pacjent_blank.png";
    }

    if ($dzielny_pacjent_3) {
        $dzielny_pacjent_3_ph = "../zdjecia_achiev/dzielny_pacjent_3.png";
    } else {
        $dzielny_pacjent_3_ph = "../zdjecia_achiev/dzielny_pacjent_blank.png";
    }


    if ($siostro_basen_1) {
        $siostro_basen_1_ph = "../zdjecia_achiev/siostro_basen_1.png";
    } else {
        $siostro_basen_1_ph = "../zdjecia_achiev/siostro_basen_blank.png";
    }

    if ($siostro_basen_2) {
        $siostro_basen_2_ph = "../zdjecia_achiev/siostro_basen_2.png";
    } else {
        $siostro_basen_2_ph = "../zdjecia_achiev/siostro_basen_blank.png";
    }

    if ($siostro_basen_3) {
        $siostro_basen_3_ph = "../zdjecia_achiev/siostro_basen_3.png";
    } else {
        $siostro_basen_3_ph = "../zdjecia_achiev/siostro_basen_blank.png";
    }


    if ($doc_zed_1) {
        $doc_zed_1_ph = "../zdjecia_achiev/doc_zed_1.png";
    } else {
        $doc_zed_1_ph = "../zdjecia_achiev/doc_zed_blank.png";
    }

    if ($doc_zed_2) {
        $doc_zed_2_ph = "../zdjecia_achiev/doc_zed_2.png";
    } else {
        $doc_zed_2_ph = "../zdjecia_achiev/doc_zed_blank.png";
    }

    if ($doc_zed_3) {
        $doc_zed_3_ph = "../zdjecia_achiev/doc_zed_3.png";
    } else {
        $doc_zed_3_ph = "../zdjecia_achiev/doc_zed_blank.png";
    }

    if ($wanna_be_kass) {
        $wanna_be_kass_ph = "../zdjecia_achiev/wanna_be_kass.png";
    } else {
        $wanna_be_kass_ph = "../zdjecia_achiev/wanna_be_kass_blank.png";
    }

    if ($wanna_be_dziksu) {
        $wanna_be_dziksu_ph = "../zdjecia_achiev/wanna_be_dziksu.png";
    } else {
        $wanna_be_dziksu_ph = "../zdjecia_achiev/wanna_be_dziksu_blank.png";
    }

// achievements_trade

    if ($gold_digger_1) {
        $gold_digger_1_ph = "../zdjecia_achiev/gold_digger_1.png";
    } else {
        $gold_digger_1_ph = "../zdjecia_achiev/gold_digger_blank.png";
    }

    if ($gold_digger_2) {
        $gold_digger_2_ph = "../zdjecia_achiev/gold_digger_2.png";
    } else {
        $gold_digger_2_ph = "../zdjecia_achiev/gold_digger_blank.png";
    }

    if ($gold_digger_3) {
        $gold_digger_3_ph = "../zdjecia_achiev/gold_digger_3.png";
    } else {
        $gold_digger_3_ph = "../zdjecia_achiev/gold_digger_blank.png";
    }

    if ($zombie) {
        $zombie_ph = "../zdjecia_achiev/zombie.png";
    } else {
        $zombie_ph = "../zdjecia_achiev/zombie_blank.png";
    }

    
    if ($rozrzutny_1) {
        $rozrzutny_1_ph = "../zdjecia_achiev/blank_small_1.png";
    } else {
        $rozrzutny_1_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($rozrzutny_2) {
        $rozrzutny_2_ph = "../zdjecia_achiev/blank_small_2.png";
    } else {
        $rozrzutny_2_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($rozrzutny_3) {
        $rozrzutny_3_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $rozrzutny_3_ph = "../zdjecia_achiev/blank_small.png";
    }


    if ($sugar_daddy_1) {
        $sugar_daddy_1_ph = "../zdjecia_achiev/blank_small_1.png";
    } else {
        $sugar_daddy_1_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($sugar_daddy_2) {
        $sugar_daddy_2_ph = "../zdjecia_achiev/blank_small_2.png";
    } else {
        $sugar_daddy_2_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($sugar_daddy_3) {
        $sugar_daddy_3_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $sugar_daddy_3_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($sugar_daddy_4) {
        $sugar_daddy_4_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $sugar_daddy_4_ph = "../zdjecia_achiev/blank_small.png";
    }


// achievements_wasteland

    if ($stalker_1) {
        $stalker_1_ph = "../zdjecia_achiev/blank_small_1.png";
    } else {
        $stalker_1_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($stalker_2) {
        $stalker_2_ph = "../zdjecia_achiev/blank_small_2.png";
    } else {
        $stalker_2_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($stalker_3) {
        $stalker_3_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $stalker_3_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($tulacz) {
        $tulacz_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $tulacz_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($podroznik) {
        $podroznik_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $podroznik_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($wloczykij) {
        $wloczykij_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $wloczykij_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($pielgrzym) {
        $pielgrzym_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $pielgrzym_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($powsinoga) {
        $powsinoga_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $powsinoga_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($wojazer) {
        $wojazer_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $wojazer_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($the_wanderer) {
        $the_wanderer_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $the_wanderer_ph = "../zdjecia_achiev/blank_small.png";
    }

// achievements_other

    if ($mr_gumby) {
        $mr_gumby_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $mr_gumby_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($oscar) {
        $oscar_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $oscar_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($rasta) {
        $rasta_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $rasta_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($zul) {
        $zul_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $zul_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($chmielu) {
        $chmielu_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $chmielu_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($trzezwy) {
        $trzezwy_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $trzezwy_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($night_watch) {
        $night_watch_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $night_watch_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($guardian_angel_1) {
        $guardian_angel_1_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $guardian_angel_1_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($guardian_angel_2) {
        $guardian_angel_2_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $guardian_angel_2_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($guardian_angel_3) {
        $guardian_angel_3_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $guardian_angel_3_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($unholy_one) {
        $unholy_one_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $unholy_one_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($i_live_i_die_1) {
        $i_live_i_die_1_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $i_live_i_die_1_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($i_live_i_die_2) {
        $i_live_i_die_2_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $i_live_i_die_2_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($i_live_i_die_3) {
        $i_live_i_die_3_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $i_live_i_die_3_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($captain_wanna_be) {
        $captain_wanna_be_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $captain_wanna_be_ph = "../zdjecia_achiev/blank_small.png";
    }

    if ($szambor) {
        $szambor_ph = "../zdjecia_achiev/blank_small_3.png";
    } else {
        $szambor_ph = "../zdjecia_achiev/blank_small.png";
    }

// abilities

    $character_abilitie_Query = $db->prepare('SELECT * FROM `char_abilities` WHERE ch_id = :character_id');

    $character_abilitie_Query->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
    $character_abilitie_Query->execute();

    $character_abilitie = $character_abilitie_Query->fetch();

    $chems_production = $character_abilitie['chems_production'];
    $powder_production = $character_abilitie['powder_production'];
    $spec_mechanic = $character_abilitie['spec_mechanic'];
    $spec_chemist = $character_abilitie['spec_chemist'];
    $spec_programmer = $character_abilitie['spec_programmer'];
    $spec_electrician = $character_abilitie['spec_electrician'];
    $weapon_repair_1 = $character_abilitie['weapon_repair_1'];
    $weapon_repair_2 = $character_abilitie['weapon_repair_2'];
    $weapon_repair_3 = $character_abilitie['weapon_repair_3'];
    $ammo_prod_1 = $character_abilitie['ammo_prod_1'];
    $ammo_prod_2 = $character_abilitie['ammo_prod_2'];
    $ammo_prod_3 = $character_abilitie['ammo_prod_3'];
    $armor_repair_1 = $character_abilitie['armor_repair_1'];
    $armor_repair_2 = $character_abilitie['armor_repair_2'];
    $armor_repair_3 = $character_abilitie['armor_repair_3'];
    $med_paramedic = $character_abilitie['med_paramedic'];
    $med_intern = $character_abilitie['med_intern'];
    $med_doctor = $character_abilitie['med_doctor'];
    $med_ordynator = $character_abilitie['med_ordynator'];
    $driver = $character_abilitie['driver'];

//other

    $verQuery = $db->prepare('SELECT time FROM ver WHERE id = "1"');
    $verQuery->execute();
    $ver = $verQuery->fetch();

    $now_time = $ver['time'];

    $birth_time = new DateTime($character_birth);

    $age_2 = DateTime::createFromFormat('Y-m-d', $character_birth);

    $_SESSION['now'] = $now= DateTime::createFromFormat('Y-m-d H:i:s', $now_time);

    $years = $birth_time->diff($now);


