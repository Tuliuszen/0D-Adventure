<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Rejestracja</title>
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

            <form method="POST" action="s_kreator.php">
                <center><h3>Rejestracja</h3></center>   
                Imie:<input type="text" name="imie"><br>
                Nazwisko:<input type="text" name="nazwisko"><br>
                Mail:<input type="text" name="mail"><br>
                18lat:<input type="radio" name="wiek"><br>
                Płeć: M:<input type="checkbox" name="plec" value="m"> K:<input type="checkbox" name="plec" value="k"><br>

                Login:<input type="text" name="login"><br>
                Haslo:<input type="password" name="haslo"><br>
                <hr>
                <center><h3>Tworzenie prostaci</h3></center>
                <br>
                Imie Postaci:<input type="text" name="imiePostaci"><br>

                Rasa:<select name="rasa">
                    <option value="ludz">Ludź</option>
                    <option value="elf">Elf</option>
                    <option value="krasnal">Krasnal</option>
                    <option value="gnom">Gnom</option>
                </select>
                <br>
                Klasa:<select name="klasa">
                    <option value="woj">Wojownik</option>
                    <option value="lotr">Łotr</option>
                    <option value="mag">Mag</option>
                </select>
                <script>
                    function SumCheck()
                    {
                        var sumCheck=parseInt(document.querySelector("#glowna > form > input[name=sila]").value)+parseInt(document.querySelector("#glowna > form > input[name=zrecznosc]").value)+parseInt(document.querySelector("#glowna > form > input[name=tarcza]").value)+parseInt(document.querySelector("#glowna > form > input[name=szczescie]").value)+parseInt(document.querySelector("#glowna > form > input[name=ki]").value);
                        if (sumCheck > 30)
                        {
                            alert('Za dużo punktów!');
                            document.querySelector("#glowna > form input[type=submit]").disabled = true;
                        }
                        else
                        {
                            document.querySelector("#glowna > form input[type=submit]").disabled = false;  
                        };
                    };
                </script>
                <br>
                Siła:<input type="range" name="sila" min="1" max="10" onchange="SumCheck()" oninput="this.nextElementSibling.value=this.value"><output>6</output><br>
                Zręczność:<input type="range" name="zrecznosc" min="1" max="10" onchange="SumCheck()" oninput="this.nextElementSibling.value=this.value"><output>6</output><br>
                Tarcza:<input type="range" name="tarcza" min="1" max="10" onchange="SumCheck()" oninput="this.nextElementSibling.value=this.value"><output>6</output><br>
                Szczęście:<input type="range" name="szczescie" min="1" max="10" onchange="SumCheck()" oninput="this.nextElementSibling.value=this.value"><output>6</output><br>
                Ki:<input type="range" name="ki" min="1" max="10" onchange="SumCheck()" oninput="this.nextElementSibling.value=this.value"><output>6</output><br>
                <hr>
                <center><h3>Awatar<h3></center>
                <div id="awatary">
                <input type="radio" name='aw' id="aw1" value="awatary/aw1.jpg"/><label for="aw1"><img src="awatary/aw1.jpg"></label><br>
                <input type="radio" name='aw' id="aw2" value="awatary/aw2.jpg"/><label for="aw2"><img src="awatary/aw2.jpg"></label><br>
                <input type="radio" name='aw' id="aw3" value="awatary/aw3.jpg"/><label for="aw3"><img src="awatary/aw3.jpg"></label><br>
                </div>
                <hr>
                <center>
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
        <font color="yellow"><p>Autor: Maciej Szczepkowski 4C</p></font>
        </footer>
        </div>
    </body>
</html>