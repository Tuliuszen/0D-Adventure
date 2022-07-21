<?php
    require 'obiekty.php';
    
    if($_POST['wiek'] == null)
    {
        header('Location: zlywiek.php');
    }
    
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $mail = $_POST['mail'];
    $wiek = $_POST['wiek'];
    $plec = $_POST['plec'];

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $imiePostaci = $_POST['imiePostaci'];
    $rasa = $_POST['rasa'];
    $klasa = $_POST['klasa'];

    $sila = $_POST['sila'];
    $zrecznosc = $_POST['zrecznosc'];
    $tarcza = $_POST['tarcza'];
    $szczescie = $_POST['szczescie'];
    $ki = $_POST['ki'];

    $awatar = $_POST['aw'];
    
    require('Funkcje.php');

    $klasaGracz = tworzenieKlasa($klasa);
    $rasaGracz = tworzenieRasa($rasa);

    $sila = $sila + $klasaGracz->sila + $rasaGracz->sila;
    $zrecznosc = $zrecznosc + $klasaGracz->zrecznosc + $rasaGracz->zrecznosc;
    $tarcza = $tarcza + $klasaGracz->tarcza + $rasaGracz->tarcza;
    $szczescie = $szczescie + $klasaGracz->szczescie + $rasaGracz->szczescie;
    $ki = $ki + $klasaGracz->ki + $rasaGracz->ki;

    $db = mysqli_connect ("localhost", "root",'',"projekt_ms_4c");

    if ($db->connect_error) 
    {
        die("Connection failed: " . $db->connect_error);
    }
    else
    {
        mysqli_query($db,"INSERT INTO gracz (imie, nazwisko, mail, pelnoletnosc, plec, login, haslo, imiePostaci,zycie, rasa, klasa, sila, zrecznosc, tarcza, szczescie, ki, awatar, exp,hajs,lvl) VALUES ('$imie', '$nazwisko', '$mail', '$wiek','$plec','$login','$haslo','$imiePostaci',20,'$rasa','$klasa','$sila','$zrecznosc','$tarcza','$szczescie','$ki','$awatar',0,0,1);");
        header('Location: index.php');
    }



?> 
