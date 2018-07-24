-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 04:59 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr14_saad_helal_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EventURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `description`, `image`, `capacity`, `email`, `phone_number`, `address`, `EventURL`, `Type`, `startDate`, `endDate`) VALUES
(1, 'Ed sheeran live', 'Ed Sheeran is a singer-songwriter from Suffolk, England. Known for his hybrid pop and R&B sound, which mixes his soulful lyrics with his mellow voice, Ed Sheeran has found extensive fame across all corners of the globe.', 'https://events.wien.info/media/full/Ed-Sheeran-Press-Photo-1-Greg-Williams.jpg', '1500', 'edshereen@gmail.com', 436655985665, 'Meiereistraße 7, 1020 wien', 'https://www.songkick.com/concerts/30613619-ed-sheeran-at-ernst-happel-stadion', 'music', '2018-01-16 19:15:00', '2018-01-16 22:00:00'),
(14, 'Jazz Fest Wien ', 'The jazz Fest Wien will continue to keep kicking into the fist halfof July and boy do they have some cracking good acts lined up. If you haven’t yet, check out one of the performances the festival has to offer', 'http://www.viennawurstelstand.com/wp-content/uploads/2017/05/viennawurstelstand_events_jazzfestwien-640x426.jpg', '2500', 'samdouh@gmail.com', 4366059856665, 'CREAU, Meiereistraße Ecke Krieaupromenade, 1020 Wien ', 'https://www.facebook.com/events/477013086052411/', 'music', '2018-06-15 16:00:00', '2018-07-20 22:00:00'),
(15, 'Techno Deluxe', 'Techno Deluxe presents… well, Techno this Friday, with the help of Soma. Soma turned 25 last year and celebrated in style, but the party hasn’t stopped and thus they have bought two of their top acts to Vienna for your enjoyment', 'http://www.viennawurstelstand.com/wp-content/uploads/2018/07/viennawurstelstand_events_techno_delux_w_rebekah_X_gary_beck.jpg', '800', 'ask@gmail.com', 43655952522, 'Spittelauer Lände 12, 1090 wien', 'http://www.viennawurstelstand.com/location/grelle-forelle/', 'music', '2018-03-15 17:30:00', '2018-03-15 23:00:00'),
(16, 'The Magic Flute', 'Opera in two acts by Wolfgang Amadé Mozart  Text by Emanuel Schikaneder  First performed in Vienna on the 30th of September 1791  Directed by: Prof. Gerhard Tötschinger', 'https://events.wien.info/media/full/kinderzauberfl%C3%B6te_1_1.jpg', '250', 'ask@gmail.com', 432655655226, 'Schloss Schönbrunn, Hofratstrakt \r\n1130 Wien', 'https://events.wien.info/en/id/the-magic-flute/', 'theater', '2018-07-21 18:00:00', '2018-07-21 21:00:00'),
(17, 'Afrika-Tage Wien', 'From August 10-27, the Africa Days celebrate pure joie de vivre for the fourteenth time in Vienna. Captivating rhythms, imaginative costumes and delicious food transform Danube Island into a center of happiness', 'https://events.wien.info/media/full/afrika-tage.jpg', '5000', 'ask@gmail.com', 4326565232, 'Donauinsel \r\n1210 Wien', 'https://events.wien.info/en/umq/afrika-tage-wien-2018/', 'music', '2018-08-10 16:00:00', '2018-08-12 23:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
