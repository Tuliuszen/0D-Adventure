<?php
if (class_exists('KlasaRasa')){
    function tworzenieRasa($raska)
        {
            switch($raska){
            case 'ludz':
                $rasaGracz = new KlasaRasa(1,1,1,1,1);
                break;
            case 'elf':
                $rasaGracz = new KlasaRasa(0,2,0,1,2);
                break;
            case 'krasnal':
                $rasaGracz = new KlasaRasa(2,0,2,1,0);
                break;
            case 'gnom':
                $rasaGracz = new KlasaRasa(0,1,0,3,1);
                break;
            };
            return $rasaGracz;
        };
        
    function tworzenieKlasa($klaska)
        {
            switch($klaska){
            case 'woj':
                $klasaGracz = new KlasaRasa(2,2,1,0,0);
                break;
            case 'lotr':
                $klasaGracz = new KlasaRasa(0,2,0,2,1);
                break;
            case 'mag':
                $klasaGracz = new KlasaRasa(0,0,0,2,3);
                break;
            };
            return $klasaGracz;
        };
};


function LosowanieWroga($wrogowie)
{
    $x = rand(0,2);
    return $wybrany = $wrogowie[$x];
}

function WyswietlWroga($wrog)
{
    echo $wrog->name."<br>";
    echo "zycie".$wrog->zycie."<br>";
    echo "sila".$wrog->sila."<br>";
    echo "zrecznosc".$wrog->zrecznosc."<br>";
    echo "tarcza".$wrog->tarcza."<br>";
    echo "szczescie".$wrog->szczescie."<br>";
    echo "ki".$wrog->ki."<br>";
    echo "hajs".$wrog->hajs."<br>";
    echo "exp".$wrog->exp."<br>";
}

function WyznaczObrazenia($atakujacy)
{
    $obrazenia = $atakujacy->sila * ($atakujacy->ki/2);
    return $obrazenia;
}

function Atakuj($atakujacy, $atakowany)
{
    $atak = rand(0,$atakujacy->zrecznosc);
    $unik = rand(0,$atakowany->zrecznosc);

    if($atak >= $unik)
    {
        $kryt = rand(0,$atakujacy->szczescie);
        $obrona = rand(0,$atakowany->szczescie);
        if($kryt > $obrona)
        {
            return ZadajObrazenia(2*WyznaczObrazenia($atakujacy),$atakowany);
        }
        else
        {
            return ZadajObrazenia(WyznaczObrazenia($atakujacy),$atakowany);
        }
    }
    else
    {
        return 0;
    }
}

function ZadajObrazenia($obrazenia, $atakowany)
{
    $zadano = $obrazenia - $atakowany->tarcza;
    if($zadano <= 0)
    {
        return $zadano = 1;
    }
    else    
    {
        return $zadano+=1;
    };
}

function CzyWalkaTrwa($gracz,$przeciwnik)
{
    if($gracz->zycie > 0 && $przeciwnik->zycie > 0)
    {
        return true;
    }
    else
    {
        return false;
    };
}

function WyswietlWygranego($wygrany)
{
    if($wygrany->login == $_SESSION["login"])
    {
        echo "<div id='awatary'><img src=".$wygrany->awatar."><br></div>";
    }
    else
    {
        WyswietlAwatarWroga($wygrany);
    }
    
    echo "<b>".$wygrany->name."</b><br>";
    echo "zycie".$wygrany->zycie."<br>";
    echo "sila".$wygrany->sila."<br>";
    echo "zrecznosc".$wygrany->zrecznosc."<br>";
    echo "tarcza".$wygrany->tarcza."<br>";
    echo "szczescie".$wygrany->szczescie."<br>";
    echo "ki".$wygrany->ki."<br>";
    echo "hajs".$wygrany->hajs."<br>";
    echo "exp".$wygrany->exp."<br>";
}

function SprawdzLvL($gracz)
{
    $poprzedni = $gracz->lvl;
    if($gracz->exp > 10)
    {
        if($poprzedni == 1)
            $gracz->lvl = Awansuj(2,$gracz);
    }
    else if($gracz->exp > 30)
    {
        if($poprzedni == 2)
            $gracz->lvl = Awansuj(3,$gracz);
    }
    else if($gracz->exp > 80)
    {
        if($poprzedni == 3)
            $gracz->lvl = Awansuj(4,$gracz);
    }
}

function Awansuj($lvl,$gracz)
{
    $gracz->lvl = $lvl;

    $gracz->sila++;
    $gracz->zrecznosc++;
    $gracz->tarcza++;
    $gracz->szczescie++;
    $gracz->ki++;
}

function SqlSynchronizacja($gracz)
{
    $db = mysqli_connect ("localhost", "root",'',"projekt_ms_4c");

    if ($db->connect_error) 
    {
        die("Connection failed: " . $db->connect_error);
    }
    else
    {
        $gracz;
        mysqli_query($db,"UPDATE gracz SET zycie = '$gracz->zycie', sila = '$gracz->sila', zrecznosc = '$gracz->zrecznosc', tarcza = '$gracz->tarcza', szczescie =  '$gracz->szczescie', ki = '$gracz->ki', exp = exp+ '$gracz->exp', hajs = hajs +'$gracz->hajs', lvl = '$gracz->lvl' WHERE gracz.login = '$gracz->login';");
    }
}

function WyswietlAwatarWroga($wrog)
{
    if($wrog->name == "bebech")
    {
        echo "<img src='awatary/fat.jpg' width='256em' height='256em'>";
    }
    else if($wrog->name == "ork")
    {
        echo "<img src='awatary/peon.jpg' width='256em' height='256em'>";
    }
    else if($wrog->name == "Super Mysz")
    {
        echo "<img src='awatary/mysz.jpg' width='256em' height='256em'>";
    }
}
?>