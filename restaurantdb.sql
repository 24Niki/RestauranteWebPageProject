-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Okt 2018 um 18:42
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
  `tischid` int(11) NOT NULL,
  `speisenid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `speisen`
--

CREATE TABLE `speisen` (
  `id` int(11) NOT NULL,
  `kategorie` enum('suppe','salat','pizza','pastaOfen','pastaPfanne','fisch','fleisch','risotto','kleinerHunger','alkoholisch','alkoholfrei','nachspeisen','wochengerichte') COLLATE utf8_unicode_ci NOT NULL,
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
(10, 'salat', 'Italienischer Salat', 'mit Tomaten, Hinterschinken, Käse, Karotten, Ei und Gurken', '6.50', 10),
(11, 'pizza', 'Pizza Margherita', 'mit Tomatensauce und Käse', '5.50', 10),
(12, 'pizza', 'Pizza Salami', 'mit Salami', '6.00', 10),
(13, 'pizza', 'Pizza Prosciutto', 'mit Hinterschinken', '6.00', 10),
(14, 'pizza', 'Pizza Tonno', 'mit Thunfisch und Zwiebeln', '7.50', 10),
(15, 'pizza', 'Pizza Vegetaria', 'mit Champignons, Artischocken, Erbsen und Paprika', '7.50', 10),
(16, 'pizza', 'Pizza Mozzarella', 'mit frischen Tomaten und Mozzarella', '8.00', 10),
(17, 'pastaOfen', 'Lasagne', 'mit Hackfleischsauce und Käse überbacken', '7.00', 10),
(18, 'pastaOfen', 'Gnocchi alla sorrentina', 'mit Mozarella, Basilikum und Käse überbacken', '7.50', 10),
(19, 'pastaOfen', 'Tortellini al Forno', 'mit Hackfleischsauce und Käse überbacken', '7.00', 10),
(20, 'pastaPfanne', 'Penne Quattro Formaggi', 'mit Sahnesauce, Gorgonzola, Edamer und Parmesan', '7.00', 10),
(21, 'pastaPfanne', 'Penne Bolognese', 'mit Bolognesesauce und Parmesan', '6.50', 10),
(22, 'pastaPfanne', 'Gnocchi Quattro Formaggi', 'mit Sahnesauce, Gorgonzola, Edamer und Parmesan', '7.00', 10),
(23, 'pastaPfanne', 'Spaghetti Carbonara', 'mit Hinterschinken, Sahnesauce, Ei und Parmesan', '7.00', 10),
(24, 'pastaPfanne', 'Spaghetti Bolognese', 'mit Bolognesesauce und Parmesan', '6.50', 10),
(25, 'fisch', 'Mediterrane Fischplatte', 'mit Scampi, gegrillten Calamari, frittierten Calamari, mediterranem Gemüse und Zitronen- und Knoblauchdip', '19.50', 15),
(26, 'fisch', 'Frische Muscheln', 'mit Spaghetti in Tomatensauce', '14.00', 15),
(27, 'fisch', 'Calamari fritti', 'gebackene Tintenfischringe', '11.00', 14),
(28, 'fleisch', 'Schnitzel Wiener Art', 'mit Pommes frites', '7.50', 15),
(29, 'fleisch', 'Schnitzel Bolognese', 'mit Bolognese, Käse überbacken und Pommes frites', '8.50', 15),
(30, 'fleisch', 'Schnitzel Gorgonzola', 'mit Gorgonzolakäse, dazu Pommes frites', '8.50', 15),
(31, 'fleisch', 'Rahmschnitzel', 'mit Pommes frites', '9.00', 15),
(32, 'fleisch', 'Hawaii-Schnitzel', 'mit Ananas, Hinterschinken und Käse überbacken, dazu Pommes frites', '8.50', 15),
(33, 'risotto', 'Risotto bianco', 'mit Weißwein, Salbei, Butter und Parmesan', '6.90', 10),
(35, 'risotto', 'Vegetarisches Risotto', 'mit Gemüse', '7.90', 10),
(36, 'risotto', 'Risotto Nero', 'schwarzes Risotto mit Tintenfischringen', '9.90', 10),
(37, 'kleinerHunger', 'Spaghetti Bolognese', 'Kleine Portion', '4.50', 8),
(38, 'kleinerHunger', 'Pommes Frites', 'Kleine Portion', '4.50', 8),
(39, 'kleinerHunger', 'Chicken Nuggets und Pommes frites', 'Kleine Portion', '5.50', 8),
(40, 'kleinerHunger', 'Mozzarella Sticks', 'Kleine Portion, 5 Stück', '4.00', 8),
(41, 'kleinerHunger', 'Zwiebelringe mit Knoblauch-Dip', 'Kleine Portion', '2.50', 8),
(42, 'alkoholisch', 'Hefeweizen', '0,5l', '2.70', 3),
(43, 'alkoholisch', 'Kristallweizen', '0,5l', '2.70', 3),
(44, 'alkoholisch', 'Radler', '0,5l', '2.70', 3),
(45, 'alkoholisch', 'Becks Green Lemon', '0,33l', '2.70', 3),
(46, 'alkoholisch', 'Lambrusco', '0,7l', '7.50', 3),
(47, 'alkoholisch', 'Chianti', '0,7l', '7.50', 3),
(48, 'alkoholisch', 'Vino Rosso', '0,7l', '5.50', 3),
(49, 'alkoholfrei', 'Mineralwasser', '0,7l', '2.00', 3),
(50, 'alkoholfrei', 'Mineralwasser', '0.5l', '1.70', 3),
(51, 'alkoholfrei', 'Coca Cola', '0.33l', '2.00', 3),
(52, 'alkoholfrei', 'Coca Cola', '0,5l', '2.40', 3),
(53, 'alkoholfrei', 'Coca Cola Light', '0,33l', '2.00', 3),
(54, 'alkoholfrei', 'Coca Cola Light', '0,5l', '2.40', 3),
(55, 'alkoholfrei', 'Fanta', '0,33l', '2.00', 3),
(56, 'alkoholfrei', 'Fanta', '0.5l', '2.40', 3),
(57, 'alkoholfrei', 'Sprite', '0,33l', '2.00', 3),
(58, 'alkoholfrei', 'Sprite', '0,5l', '2.40', 3),
(59, 'alkoholfrei', 'Apfelschorle', '0,5l', '1.90', 3),
(60, 'alkoholfrei', 'Orangina Gelb', '0,25l', '2.70', 3),
(61, 'alkoholfrei', 'Orangina Rot', '0,25l', '2.70', 3),
(62, 'alkoholfrei', 'Lemon Soda', '0,33l', '2.20', 3),
(63, 'alkoholfrei', 'Orange Soda', '0,33l', '2.20', 3),
(64, 'nachspeisen', 'Tiramisu', 'enthält Alkohol', '4.50', 8),
(65, 'nachspeisen', 'Tartufo', 'italienische Eisspezialität', '4.00', 9),
(66, 'wochengerichte', 'Pizza Vulkan', 'mit Tomaten, Käse, Salami, Schinken, Peperoni, Knoblauch und Ei (zugeklappt)', '6.00', 15),
(67, 'wochengerichte', 'Rigatoni Marinara', 'mit Knoblauch, Meeresfrüchten und Tomatensauce', '7.00', 15),
(68, 'wochengerichte', 'Nizza Salat', 'mit Tomaten, Zwiebeln, Paprika, Thunfisch und Krabben', '6.00', 10),
(69, 'wochengerichte', 'Putenmedaillons', 'mit Champignon-Sauce, Reis und Zucchini', '11.90', 15);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tische`
--

CREATE TABLE `tische` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tische`
--

INSERT INTO `tische` (`id`, `name`) VALUES
(1, 'Tisch1'),
(2, 'Tisch2'),
(3, 'Tisch3'),
(4, 'Tisch4'),
(5, 'Tisch5');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tischid` (`tischid`),
  ADD KEY `speisenid` (`speisenid`);

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
-- AUTO_INCREMENT für Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT für Tabelle `speisen`
--
ALTER TABLE `speisen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `bestellung_ibfk_1` FOREIGN KEY (`speisenid`) REFERENCES `speisen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bestellung_ibfk_2` FOREIGN KEY (`tischid`) REFERENCES `tische` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
