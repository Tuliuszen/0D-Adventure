<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Error404</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="site">
        <header>
            <?php session_start(); ?>
        <br>
            <center><h1>Fantasy-Adventure-0D<h1></center>
        </header> 
        <div id="content">
        <aside>
        <center>    
            <a href="index.php">Menu</a><br>
            <a href="rejestracja.php">Rejestracja</a><br>
            <a href="login.php">Logowanie</a><br>
        </center>
            <hr>
        </aside>
        <div id="glowna">
            <center>
            haslo i login sie nie zgadzaja
            <center>
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
            <font color="yellow"><p>Autor: Maciej Szczepkowski 4C</p></font>
        </footer>
        </div>
    </body>
</html>