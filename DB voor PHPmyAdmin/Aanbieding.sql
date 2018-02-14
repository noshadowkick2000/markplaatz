-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 feb 2018 om 09:57
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Aanbieding`
--

CREATE TABLE `aanbieding` (
  `TitelAanbieding` varchar(32) NOT NULL,
  `idAanbieding` int(11) NOT NULL,
  `Beschrijving` varchar(64) NOT NULL,
  `Bieden` tinyint(1) NOT NULL DEFAULT '0',
  `Prijs` decimal(8,2) NOT NULL,
  `Status` varchar(64) NOT NULL,
  `AanbiedersID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Aanbieding`
--
ALTER TABLE `Aanbieding`
  ADD PRIMARY KEY (`idAanbieding`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Aanbieding`
--
ALTER TABLE `Aanbieding`
  MODIFY `idAanbieding` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
