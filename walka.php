<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Walka</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="site">
        <header>
            <?php session_start();?>
         <br>
            <center><h1>Fantasy-Adventure-0D<h1></center>
        </header> 
        <div id="content">
        <aside>
        <center>    
            <a href="index.php">Menu</a><br>
            <a href="rejestracja.php">Rejestracja</a><br>
            <a href="login.php">Logowanie</a><br>
            <?php 
                if(ISSET($_SESSION["login"]))
                {
                    echo "<a href='postac.php'>Postac</a><br>";
                    echo "<a href='sklep.php'>Sklep</a><br>";
                    echo "<a href='walka.php'>Walka</a><br>";
                }
            ?>
        </center>
            <hr>
        </aside>
        <div id="glowna">
            <center>
                <b>Twój przeciwnik na dzisiejszą walkę to słynny:</b><br>
                <?php
                    require 'obiekty.php';
                    require 'funkcje.php';

                    $ork = new Wrog('ork',10,5,0,3,0,1,5,5);
                    $kwach = new Wrog('Super Mysz',15,2,0,5,4,1,10,10);
                    $zywyBebech = new Wrog('bebech',20,3,3,3,3,3,15,15);

                    $wrogowie = array($ork,$kwach,$zywyBebech);

                    $wybranyWrog = LosowanieWroga($wrogowie);


                    WyswietlAwatarWroga($wybranyWrog);
                    echo"<br>";
                    WyswietlWroga($wybranyWrog);
                    echo"<br>";
                    $_SESSION["wrog"] = serialize($wybranyWrog);
                ?>
                <button><a href="s_walka.php">WALCZ</a></button>
            </center>
        </div>
        <div id="prawy">
            <center>
                <p id="zalogowany">
                    <?php 
                        if(ISSET($_SESSION["login"]))
                        {
                            echo "Jesteś zalogowany jako:<br>". $_SESSION["login"];
                        }
                        else
                        {
                            echo "Niezalogowany";
                        }
                    ?>
                    <br>
                    <?php
                    if(ISSET($_SESSION["login"]))
                    {
                        echo "<hr>";
                        echo "<a href='s_wyloguj.php'>Wyloguj</a>";
                    }
                    ?>
                </p>
            </center>
            <hr>
        </div>
        </div>
        <footer>
            <p>Nie wytrzymasz 5 minut grając w tą grę</p>
        </footer>
        </div>
    </body>
</html>