<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="site">
        <header>
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

            <form method="POST" action="s_login.php">
                <center>
                    <h3>Logowanie</h3><br>
                    Login:<input type="text" name="login"><br>
                    Hasło:<input type="password" name="haslo"><br>                
                    <hr>
                    <input type="submit">
                </center>
            </form>          
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