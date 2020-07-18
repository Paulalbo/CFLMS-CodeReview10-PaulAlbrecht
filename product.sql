-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 16:50
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
('The Clean Coder', 'https://images-na.ssl-images-amazon.com/images/I/51+NUIgEc9L._SX383_BO1,204,203,200_.jpg', 'Robert C. Martin', 2147483647, 'Programmers who endure and succeed amidst swirling uncertainty and nonstop pressure share a common attribute: They care deeply about the practice of creating software. They treat it as a craft. They are professionals.', '2020-07-08', 'Robert C. Martin', 'Book', 1, 10),
('Clean Agile', 'https://images-na.ssl-images-amazon.com/images/I/41VQ9-JOXLL._SX380_BO1,204,203,200_.jpg', 'Robert C. Martin', 2147483647, 'n the journey to all things Agile, Uncle Bob has been there, done that, and has the both the t-shirt and the scars to show for it. This delightful book is part history, part personal stories, and all wisdom. If you want to understand what Agile is and how it came to be, this is the book for yo', '2020-04-16', 'Robert C. Martin', 'Book', 1, 11),
('The Pragmatic Programmer', 'https://images-na.ssl-images-amazon.com/images/I/51cUVaBWZzL._SX380_BO1,204,203,200_.jpg', 'Obie Fernandez', 2147483647, 'Twenty years ago, the first edition of The Pragmatic Programmer completely changed the trajectory of my career. This new edition could do the same for yours.&; &;Mike Cohn, Author of Succeeding with Agile, Agile Estimating and Planning, and User Stories Applied', '2020-04-08', 'Obie Fernandez', 'Book', 0, 12),
('Implementing Domain-Driven Design', 'https://images-na.ssl-images-amazon.com/images/I/51n8pr7OEOL._SX364_BO1,204,203,200_.jpg', 'Randy Stafford', 6516168, 'For software developers of all experience levels looking to improve their results, and design and implement domain-driven enterprise applications consistently with the best current state of professional practice, Implementing Domain-Driven Design will impart a treasure trove of knowledge hard won within the DDD and enterprise application architecture communities over the last couple decades.â€ â€“Randy Stafford, Architect At-Large, Oracle Coherence Product Development   ', '2019-02-14', 'Randy Stafford', 'Book', 2, 13),
('Grundkurs gutes Webdesign', 'https://images-na.ssl-images-amazon.com/images/I/81kkluYhV1L.jpg', 'BjÃ¶rn Rohles', 2147483647, 'Eine gute Website? Klar, die ist vor allem informativ, schnell und funktional. Aber was macht aus einer einfachen Website einen echten Hingucker? Einen, der im GedÃ¤chtnis bleibt, weil er einfach richtig gut gestaltet wurde?', '2019-11-07', 'BjÃ¶rn Rohles', 'Book', 0, 14),
('Website-Konzeption und Relaunch', 'https://images-na.ssl-images-amazon.com/images/I/71Ovs8f3GtL.jpg', 'Sebastian Erlhofer', 2147483647, 'Ob Neustart oder Relaunch, eine erfolgreiche Website benÃ¶tigt eine solide Konzeption und eine klare Nutzerzentrierung. Dieses Praxishandbuch hilft Ihnen, erfolgreiche Webseiten zu konzipieren. Es enthÃ¤lt zahlreiche Rezepte und Praxisbeispiele fÃ¼r alle Aufgabengebiete der Website-Konzeption, von Strategie und Planung Ã¼ber Design und Layout bis hin zum integrierten Inbound-Marketing. Profitieren Sie von Erkenntnissen aus der Kommunikationswissenschaft und Psychologie, um Ihre Website bedarfsgerecht an Ihre Zielgruppe anzupassen. Inkl. Wireframes fÃ¼r Ihre eigene Website-Konzeption.', '2019-04-04', 'Sebastian Erlhofer', 'Book', 2, 15),
('Grundkurs Grafik und Gestaltung', 'https://images-na.ssl-images-amazon.com/images/I/71PI+ksHBkL.jpg', 'Claudia Korthaus', 2147483647, 'Wer sich zum ersten Mal mit dem Thema Layout, Grafikdesign und Gestaltung beschÃ¤ftigt, hat viele Fragen. Wo soll ich anfangen, wenn ich vor einer leeren weiÃŸen Seite stehe, die Â»gestaltetÂ« werden will? Welche Formate bieten sich an? Welche Schriften passen am besten zusammen? Wie erzeuge ich Aufmerksamkeit? Und gilt das alles auch fÃ¼rs Web?', '2019-03-14', 'Claudia Korthaus', 'Book', 1, 16),
('Stile & Looks: Gestaltungsideen fÃ¼r Print- und Webdesign', 'https://images-na.ssl-images-amazon.com/images/I/81eWMY4Y7BL.jpg', 'Gudrun Wegener', 1616846864, 'Gestaltung! Hier erfahren Sie, wie Sie die coolen Designstile nachbauen, die Sie immer wieder in professionellen Print- und Webdesigns bewundern: Flat Design, der Retro-Look, der blumige, elegant oder typografische Stil, auffÃ¤llig oder experimentelle Gestaltungen â€“ schauen Sie sich die zahlreichen Beispiele an, variieren Sie Ihre Designs und finden Sie so den passenden Look! Gestalten wie ein Profi', '2019-01-10', 'Gudrun Wegener', 'Book', 1, 17),
('Das Design-Buch fÃ¼r Nicht-Designer', 'https://images-na.ssl-images-amazon.com/images/I/81y2YPG48kL.jpg', 'Claudia Korthaus', 2147483647, 'Die einzige Voraussetzung fÃ¼r dieses Buch ist: SpaÃŸ am Gestalten! Es richtet sich an alle, die gerne kreativ sind und Designs lieber selbst entwerfen, als einfach im Supermarkt eine Geburtstagskarte zu kaufen oder nur eine Word-Vorlage fÃ¼r den nÃ¤chsten Aushang zu nutzen. Das Besondere an diesem Buch: Hier dreht sich alles ausschlieÃŸlich um Beispiele. Postkarten, Einladungen, Vereinszeitungen', '2019-06-05', 'Claudia Korthaus', 'Book', 2, 18),
('JavaScript: Das umfassende Handbuch', 'https://images-na.ssl-images-amazon.com/images/I/71vK5rVUBtL.jpg', 'Philip Ackermann', 2147483647, 'Ein umfassender Einstieg in JavaScript, viele praktische Beispiele und eine Darstellung auch professioneller Techniken â€“ all das zeichnet dieses unverzichtbare Handbuch aus. Es eignet sich sowohl fÃ¼r AnfÃ¤nger, die JavaScript von Grund auf lernen, als auch fÃ¼r Fortgeschrittene und Profis. Lernen Sie JavaScript von Grund auf und entwickeln Sie moderne, dynamische Webanwendungen. Hier', '2018-06-15', 'Philip Ackermann', 'Book', 2, 19);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
