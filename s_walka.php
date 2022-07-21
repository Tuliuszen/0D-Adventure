<?php
    require 'obiekty.php';
    require 'funkcje.php';
    $tura = true;
    $fightOn = true;

    $db = mysqli_connect ("localhost", "root",'',"projekt_ms_4c");

    if ($db->connect_error) 
    {
        die("Connection failed: " . $db->connect_error);
    }
    else
    {
        session_start();
        $gracz = unserialize($_SESSION["gracz"]);
        $wybranyWrog = unserialize($_SESSION["wrog"]);

        //$ork = new Wrog('ork',10,5,0,3,0,1,5,5);
        //$kwach = new Wrog('kwach',15,2,0,5,4,1,10,10);
        //$zywyBebech = new Wrog('bebech',20,3,3,3,3,3,15,15);

        //$wrogowie = array($ork,$kwach,$zywyBebech);

        //$wybranyWrog = LosowanieWroga($wrogowie);
        //WyswietlWroga($wybranyWrog);

        while($fightOn == true)
        {
            if($tura)
            {
                $wybranyWrog->zycie -= Atakuj($gracz, $wybranyWrog);
                $tura = false;
                echo ('<br>Wrog->zycie '.$wybranyWrog->zycie.'<br>');
            }
            else
            {
                $gracz->zycie -= Atakuj($wybranyWrog, $gracz);
                $tura = true;
                echo ('<br>gracz->zycie '.$gracz->zycie.'<br>');
            };
            $fightOn = CzyWalkaTrwa($gracz,$wybranyWrog);

            if($fightOn == false)
            {
                //$wygrany;
                if($wybranyWrog->zycie <= 0)
                {
                    $wygrany = $gracz;
                    $gracz->exp += $wybranyWrog->exp;
                    $gracz->hajs += $wybranyWrog->hajs;
                    SprawdzLvL($gracz);
                    WyswietlWygranego($gracz);
                    SqlSynchronizacja($gracz);
                }
                else if($gracz->zycie <= 0)
                {
                    $wygrany = $wybranyWrog;
                    WyswietlWygranego($wybranyWrog);
                };
            }
        }
        SqlSynchronizacja($gracz);
        $_SESSION['wygrany'] = serialize($wygrany);
        $_SESSION['gracz'] = serialize($gracz);
        //$_SESSION['wygrany'] = 'Dupcia';
        header('Location: wygrana.php');

    }
?>