<?php
    class Gracz
    {
        public $imie;
        public $nazwisko;
        public $mail;
        public $wiek;
        public $plec;

        public $login;
        public $haslo;

        public $nazwa;
        public $zycie;
        public $rasa;
        public $klasa;

        public $sila;
        public $zrecznosc;
        public $tarcza;
        public $szczescie;
        public $ki;
        public $exp;
        public $hajs;
        public $lvl;
        public $awatar;

        public function __construct($nazwa, $zycie, $rasa, $klasa, $sila, $zrecznosc, $tarcza, $szczescie, $ki, $exp, $hajs, $lvl, $login, $awatar) {
            $this->name = $nazwa;
            $this->zycie = $zycie;
            $this->rasa = $rasa;
            $this->klasa = $klasa;
            $this->sila = $sila;
            $this->tarcza = $tarcza;
            $this->zrecznosc = $zrecznosc;
            $this->szczescie = $szczescie;
            $this->ki = $ki;
            $this->exp = $exp;
            $this->hajs = $hajs;
            $this->lvl = $lvl;
            $this->login = $login;
            $this->awatar = $awatar;
          }
        
          function get_lvl() {
            return $this->lvl;
          }

        /*public function Test()
        {
            echo $imie $nazwisko,$nazwa,$rasa,$klasa;

        }*/
    }


class KlasaRasa
    {
      public $sila;
      public $zrecznosc;
      public $tarcza;
      public $szczescie;
      public $ki;

      public function __construct($sila,$zrecznosc,$tarcza,$szczescie,$ki)
      {
        $this->sila = $sila;
        $this->tarcza = $tarcza;
        $this->zrecznosc = $zrecznosc;
        $this->szczescie = $szczescie;
        $this->ki = $ki;
      }
    }

class Wrog
{
  public $nazwa;
  public $zycie;
  public $sila;
  public $zrecznosc;
  public $tarcza;
  public $szczescie;
  public $ki;
  public $exp;
  public $hajs;

  public function __construct($nazwa, $zycie,$sila, $zrecznosc, $tarcza, $szczescie, $ki, $exp, $hajs) {
    $this->name = $nazwa;
    $this->zycie = $zycie;
    $this->sila = $sila;
    $this->tarcza = $tarcza;
    $this->zrecznosc = $zrecznosc;
    $this->szczescie = $szczescie;
    $this->ki = $ki;
    $this->exp = $exp;
    $this->hajs = $hajs;
  }
}

?>