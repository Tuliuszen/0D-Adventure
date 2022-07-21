<?php
    @session_start();
    require 'obiekty.php';
    $db = mysqli_connect ("localhost", "root",'',"projekt_ms_4c");

    if ($db->connect_error) 
    {
        die("Connection failed: " . $db->connect_error);
    }

    $login = $_SESSION["login"];

    $staty = mysqli_query($db,"SELECT imiePostaci,rasa,klasa,sila,zrecznosc,tarcza,szczescie,ki,exp,hajs,lvl,login,awatar FROM gracz WHERE login like '$login'");
    $staty=$staty->fetch_array();
    

    $gracz = new Gracz($staty[0],$staty[1],$staty[2],$staty[3],$staty[4],$staty[5],$staty[6],$staty[7],$staty[8],$staty[9],$staty[10],$staty[11],$staty[11],$_SESSION['login']);
    $_SESSION["gracz"] = serialize($gracz);
    //header('Location: index.php');
?>