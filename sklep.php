<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Skelp</title>
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
                    echo "<a href='s_walka.php'>Walka</a><br>";
                }
            ?>
        </center>
            <hr>
        </aside>
        <div id="glowna">
            <center>
                <form method="POST" action="s_sklep.php">
                     <input type="hidden" name="produkt" value="sila">
                     <input type="hidden" name="cena" value="10">
                    <label>SILA+1</label>
                    <input type="submit" value="10$">
                </form>
                <form method="POST" action="s_sklep.php">
                     <input type="hidden" name="produkt" value="zrecznosc">
                     <input type="hidden" name="cena" value="10">
                    <label>ZRECZNOSC+1</label>
                    <input type="submit" value="10$">
                </form>
                <form method="POST" action="s_sklep.php">
                     <input type="hidden" name="produkt" value="tarcza">
                     <input type="hidden" name="cena" value="10">
                    <label>TARCZA+1</label>
                    <input type="submit" value="10$">
                </form>
                <form method="POST" action="s_sklep.php">
                     <input type="hidden" name="produkt" value="szczescie">
                     <input type="hidden" name="cena" value="10">
                    <label>SZCZESCIE+1</label>
                    <input type="submit" value="10$">
                </form>
                <form method="POST" action="s_sklep.php">
                     <input type="hidden" name="produkt" value="ki">
                     <input type="hidden" name="cena" value="10">
                    <label>KI+1</label>
                    <input type="submit" value="10$">
                </form>
                <form method="POST" action="s_sklep.php">
                     <input type="hidden" name="produkt" value="zycie">
                     <input type="hidden" name="cena" value="10">
                    <label>ZYCIE+1</label>
                    <input type="submit" value="10$">
                </form>
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
            <p>Nie wytrzymasz 5 minut grając w tą grę</p>
        </footer>
        </div>
        <script>
            <?php
            if(ISSET ($_SESSION['alert'])){
                echo("alert('".$_SESSION['alert']."');");
                unset($_SESSION['alert']);
            };
            ?>
        </script>
    </body>
</html>