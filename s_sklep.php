<?php
    require 'obiekty.php';
    require 'funkcje.php';
    session_start();

    $produkt = $_POST['produkt'];
    $cena = $_POST['cena'];


    $gracz = unserialize($_SESSION['gracz']);

    if($gracz->hajs >= $cena)
    {
        $gracz->hajs -= $cena;

        switch($produkt)
        {
            case "sila";
                $gracz->sila++;
                break;
            case "zrecznosc";
                $gracz->zrecznosc++;
                break;
            case "tarcza";
                $gracz->tarcza++;
                break;
            case "szczescie";
                $gracz->szczescie++;
                break;
            case "ki";
                $gracz->ki++;
                break;
            case "zycie";
                $gracz->zycie=20;
                break;
        };
        SqlSynchronizacja($gracz);
        $_SESSION['alert']='Kupiłeś '.$produkt.' za tyle hajsu: '.$cena.'!';
    }
    else
    {
        $_SESSION['alert']='Nie kupiłeś '.$produkt.' bo nie masz hajsu!';
    }

    $_SESSION['gracz'] = serialize($gracz);
    header('Location: sklep.php');
    ?>
