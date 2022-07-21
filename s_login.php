<?php
    session_start();
    require ('obiekty.php');

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];


    $db = mysqli_connect("localhost", "root",'',"projekt_ms_4c");


    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
      }
    else
    {   
        $loginS = mysqli_query($db,"SELECT login FROM gracz WHERE login like '$login'");
        $hasloS = mysqli_query($db,"SELECT haslo FROM gracz WHERE haslo like '$haslo'");
        $loginS=$loginS->fetch_array();
        $hasloS=$hasloS->fetch_array();
        
        if($login == $loginS[0] && $haslo == $hasloS[0])
        {
            echo "Jestes zalogowany";
            $_SESSION["login"] = $login;
            //header('Location: index.php');
            
            //$_SESSION["favanimal"] = "cat";

            $staty = mysqli_query($db,"SELECT imiePostaci,zycie,rasa,klasa,sila,zrecznosc,tarcza,szczescie,ki,exp,hajs,lvl,awatar,login FROM gracz WHERE login like '$login'");
            $staty=$staty->fetch_array();

            //echo ($staty[0].' '.$staty[1].' '.$staty[2].' '.$staty[3].' '.$staty[4].' '.$staty[5].' '.$staty[6].' '.$staty[7].' '.$staty[8].' '.$staty[9].' '.$staty[10].' '.$staty[11].' '.$staty[12].' '.$_SESSION['login'].' '.$staty[13]);
            
            $gracz = new Gracz($staty[0],$staty[1],$staty[2],$staty[3],$staty[4],$staty[5],$staty[6],$staty[7],$staty[8],$staty[9],$staty[10],$staty[11],$_SESSION['login'],$staty[12]);
            $_SESSION["gracz"] = serialize($gracz);
            //echo $gracz->name;

            header('Location: postac.php');
        }
        else
        {
            header('Location: zlylogin.php');
        }
    }
?> 
