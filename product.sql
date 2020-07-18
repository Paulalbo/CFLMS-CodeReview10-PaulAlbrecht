-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 15:37
-- Server-Version: 10.1.39-MariaDB
-- PHP-Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `libary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `title` varchar(200) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `author` varchar(200) NOT NULL,
  `ISBN_code` int(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `publish_date` date NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`title`, `img`, `author`, `ISBN_code`, `description`, `publish_date`, `publisher`, `type`, `status`, `id`) VALUES
('Clean Code', 'https://images-na.ssl-images-amazon.com/images/I/41jEbK-jG+L._SX374_BO1,204,203,200_.jpg', 'Robert C. Martin', 123456789, 'Even bad code can function. But if code isn\'t clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesn\'t have to be that way. Noted software expert Robert C. Martin presents a revolutionary paradigm with Clean Code: A Handbook of Agile Software Craftsmanship .', '2020-07-21', 'test publisher', 'Book', 1, 1),
('Clean', 'https://images-na.ssl-images-amazon.com/images/I/516tg-5b2ZL._SX380_BO1,204,203,200_.jpg', 'Robert C. Martin', 1234567, 'By applying universal rules of software architecture, you can dramatically improve developer productivity throughout the life of any software system. ', '2020-07-03', 'publisher', 'Book', 1, 2),
('Clean test', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTzM5YrP7Cdw5I5wFhLoSdKf4f7HR4I1UHsgGj0p8GOFhm716P84H9MQwcPrO0Tco1UYHQvplRZVA&usqp=CAc', 'Robert C. Martin', 1234567, 'By applying universal rules of software architecture, you can dramatically improve developer productivity throughout the life of any software system. ', '2020-07-03', 'publisher', 'Book', 2, 4),
('Clean Architecture', 'https://images-na.ssl-images-amazon.com/images/I/516tg-5b2ZL._SX380_BO1,204,203,200_.jpg', 'Robert C. Martin', 1234567, 'By applying universal rules of software architecture, you can dramatically improve developer productivity throughout the life of any software system. ', '2020-07-03', 'publisher', 'Book', 1, 5),
('Clean asdfa sd', 'https://images-na.ssl-images-amazon.com/images/I/516tg-5b2ZL._SX380_BO1,204,203,200_.jpg', 'Robert C. Martin', 1234567, 'By applying universal rules of software architecture, you can dramatically improve developer productivity throughout the life of any software system. ', '2020-07-03', 'publisher', 'Book', 2, 6),
('Clean Architecture', 'https://images-na.ssl-images-amazon.com/images/I/516tg-5b2ZL._SX380_BO1,204,203,200_.jpg', 'Robert C. Martin', 1234567, 'By applying universal rules of software architecture, you can dramatically improve developer productivity throughout the life of any software system. ', '2020-07-03', 'publisher', 'Book', 1, 7);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
