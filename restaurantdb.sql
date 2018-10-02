-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Okt 2018 um 17:15
-- Server-Version: 10.1.35-MariaDB
-- PHP-Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `restaurantdb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellung`
--

CREATE TABLE `bestellung` (
  `id` int(11) NOT NULL,
  `tischeid` int(11) NOT NULL,
  `speisenid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `speisen`
--

CREATE TABLE `speisen` (
  `id` int(11) NOT NULL,
  `kategorie` enum('suppe','salat','pizza','pastaOfen','pastaPfanne','fisch','fleisch','risotto','kleinerHunger','alkoholisch','alkoholfrei','nachspeisen') COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beschreibung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preis` decimal(10,2) UNSIGNED NOT NULL,
  `zubereitungszeit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `speisen`
--

INSERT INTO `speisen` (`id`, `kategorie`, `name`, `beschreibung`, `preis`, `zubereitungszeit`) VALUES
(6, 'suppe', 'Tomatensuppe', 'mit Tomate und Basilikum', '4.50', 10),
(7, 'suppe', 'Zucchini-Tomaten Suppe', 'mit Zwiebeln, Zucchini und Tomaten', '5.00', 10),
(8, 'salat', 'Caprese Salat', 'mit Tomaten, Mozarella, Zwiebeln, Oregano, Essig und Öl', '6.50', 10),
(9, 'salat', 'Gemischter Salat', 'mit Eisbergsalat, Karotten, Tomaten, Gurken und Paprika', '4.50', 10),
(10, 'salat', 'Italienischer Salat', 'mit Tomaten, Hinterschinken, Käse, Karotten, Ei und Gurken', '6.50', 10);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tische`
--

CREATE TABLE `tische` (
  `id` int(11) NOT NULL,
  `tischname` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tische`
--

INSERT INTO `tische` (`id`, `tischname`) VALUES
(1, 'Rom'),
(2, 'Mailand'),
(3, 'Florenz'),
(4, 'Venedig'),
(5, 'Pisa');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tischeid` (`tischeid`),
  ADD UNIQUE KEY `speisenid` (`speisenid`);

--
-- Indizes für die Tabelle `speisen`
--
ALTER TABLE `speisen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tische`
--
ALTER TABLE `tische`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `speisen`
--
ALTER TABLE `speisen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `tische`
--
ALTER TABLE `tische`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `bestellung_ibfk_1` FOREIGN KEY (`speisenid`) REFERENCES `speisen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bestellung_ibfk_2` FOREIGN KEY (`tischeid`) REFERENCES `tische` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
