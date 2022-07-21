-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2021, 23:03
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt_ms_4c`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gracz`
--

CREATE TABLE `gracz` (
  `imie` text COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8mb4_polish_ci NOT NULL,
  `mail` varchar(200) COLLATE utf8mb4_polish_ci NOT NULL,
  `pelnoletnosc` tinyint(1) NOT NULL,
  `plec` text COLLATE utf8mb4_polish_ci NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` varchar(200) COLLATE utf8mb4_polish_ci NOT NULL,
  `imiePostaci` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `Zycie` int(11) NOT NULL DEFAULT 20,
  `rasa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `klasa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `sila` int(11) NOT NULL,
  `zrecznosc` int(11) NOT NULL,
  `tarcza` int(11) NOT NULL,
  `szczescie` int(11) NOT NULL,
  `ki` int(11) NOT NULL,
  `awatar` varchar(200) COLLATE utf8mb4_polish_ci NOT NULL,
  `exp` int(11) NOT NULL,
  `hajs` int(11) NOT NULL,
  `lvl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `gracz`
--

INSERT INTO `gracz` (`imie`, `nazwisko`, `mail`, `pelnoletnosc`, `plec`, `login`, `haslo`, `imiePostaci`, `Zycie`, `rasa`, `klasa`, `sila`, `zrecznosc`, `tarcza`, `szczescie`, `ki`, `awatar`, `exp`, `hajs`, `lvl`) VALUES
('Adas', 'Niezgutka', 'adasio@gmail.com', 0, 'm', 'adas', 'kleks', 'Adasiok', 20, 'ludz', 'woj', 10, 10, 9, 8, 8, 'awatary/aw2.jpg', 2435, 2435, 0),
('test', 'test', 'tescik', 0, 'm', 'test', 'test', 'tester', 20, 'krasnal', 'mag', 10, 7, 9, 10, 11, 'awatary/aw3.jpg', 205, 145, 0),
('Wojtek', 'Wojacki', 'wojak@gmail.com', 0, 'm', 'Wojtas', 'wojtas', 'Wojtas', 20, 'krasnal', 'lotr', 15, 7, 7, 5, 12, 'awatary/aw1.jpg', 150, 120, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gracz`
--
ALTER TABLE `gracz`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
