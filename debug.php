<?php
include ('Funkcje.php');
include ('Obiekty.php');
session_start();
$gracz = unserialize($_SESSION["gracz"]);

$ork = new Wrog('ork',10,5,0,3,0,1,5,5);
$kwach = new Wrog('kwach',15,2,0,5,4,1,10,10);
$zywyBebech = new Wrog('bebech',20,3,3,3,3,3,15,15);

$wrogowie = array($ork,$kwach,$zywyBebech);

$wybranyWrog = LosowanieWroga($wrogowie);
WyswietlWroga($wybranyWrog);
echo (Atakuj($gracz, $wybranyWrog));
echo ('<br>');
echo (Atakuj($wybranyWrog, $gracz));
$tura = true;
$fightOn = CzyWalkaTrwa($gracz,$wybranyWrog);
echo ('<br>');
echo ($fightOn);
?>