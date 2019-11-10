-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019 m. Lap 10 d. 13:37
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teltonika`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `citytable`
--

CREATE TABLE `citytable` (
  `id` int(6) NOT NULL,
  `city` varchar(120) DEFAULT NULL,
  `cityarea` double DEFAULT NULL,
  `citypopulation` double DEFAULT NULL,
  `citycode` int(250) DEFAULT NULL,
  `cityUPdata` date DEFAULT NULL,
  `idcountry` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `citytable`
--

INSERT INTO `citytable` (`id`, `city`, `cityarea`, `citypopulation`, `citycode`, `cityUPdata`, `idcountry`) VALUES
(1, 'Petorca', 52221, 22545, 4, '2020-02-05', 6),
(2, 'Vietri di Potenza', 72931, 53191, 7, '2020-05-24', 6),
(3, 'Palmiano', 95207, 71903, 4, '2019-10-16', 4),
(4, 'Bonnyville', 88962, 34959, 10, '2020-03-18', 13),
(5, 'Torres del Paine', 41144, 45927, 7, '2019-02-13', 62),
(6, 'Mazzano Romano', 89492, 81812, 5, '2020-03-15', 4),
(8, 'Burgos', 80857, 20184, 3, '2019-01-28', 10),
(9, 'Wattrelos', 82536, 5957, 7, '2020-07-10', 12),
(10, 'Lonzee', 8112, 88708, 3, '2019-08-15', 3),
(11, 'Osnabrück', 77217, 66489, 5, '2020-10-29', 7),
(12, 'Serrungarina', 92147, 77410, 9, '2020-03-27', 20),
(13, 'Kircudbright', 42665, 32217, 6, '2019-08-30', 3),
(14, 'Dolembreux', 86153, 60678, 6, '2019-09-08', 63),
(15, 'Omaha', 3393, 39309, 8, '2020-05-06', 12),
(16, 'Saint Martin', 73540, 36164, 1, '2020-01-22', 12),
(17, 'Germain', 687, 39930, 2, '2019-04-18', 2),
(18, 'Basingstoke', 52012, 98119, 10, '2020-04-18', 13),
(19, 'Kaunas', 1234, 1234, 5555, '2019-11-10', 4),
(20, 'Ferrere', 32139, 38432, 5, '2019-01-28', 13),
(21, 'Edmundston', 87413, 13746, 9, '2020-09-10', 13),
(22, 'Châteauroux', 64271, 65959, 3, '2020-05-29', 10),
(23, 'Westmount', 10864, 5118, 8, '2020-03-01', 7),
(24, 'Retford', 43870, 56888, 6, '2020-05-06', 5),
(25, 'Perk', 25381, 84665, 9, '2019-07-06', 60),
(26, 'Fishguard', 6446, 39296, 1, '2019-07-22', 6),
(27, 'Vanderhoof', 95502, 86547, 3, '2020-05-29', 53),
(28, 'Tambaram', 52646, 67645, 6, '2019-10-28', 8),
(29, 'Galbiate', 19404, 62137, 6, '2020-08-27', 7),
(30, 'Sissa', 53296, 98555, 8, '2019-12-09', 11),
(51, 'Moignelee', 94525, 93697, 6, '2020-07-02', 8),
(53, 'Coldstream', 3972, 17963, 1, '2020-03-26', 3),
(54, 'Okotoks', 91363, 13772, 10, '2019-11-30', 53),
(55, 'Passau', 92617, 77163, 8, '2020-10-11', 54),
(56, 'Cockburn', 37205, 49312, 10, '2020-07-18', 10),
(57, 'Rankweil', 75311, 53676, 8, '2020-03-17', 55),
(58, 'Liberchies', 52030, 52711, 7, '2019-11-14', 57),
(59, 'San Fabián', 97029, 999, 1, '2020-09-02', 58),
(60, 'Okpoko', 55985, 89231, 3, '2019-08-23', 6),
(64, 'Testas City', 123456, 123, 2598, '2019-11-10', 61);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `countrytable`
--

CREATE TABLE `countrytable` (
  `id` int(6) NOT NULL,
  `coutry` varchar(120) DEFAULT NULL,
  `area` double DEFAULT NULL,
  `population` double DEFAULT NULL,
  `code` int(250) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `countrytable`
--

INSERT INTO `countrytable` (`id`, `coutry`, `area`, `population`, `code`, `data`) VALUES
(3, 'Belarus', 456, 308791, 54424, '2019-11-09'),
(4, 'Saint Kitts and Nevis', 593, 3950, 29, '2019-03-16'),
(6, 'Finland', 807, 3068, 56, '2019-05-03'),
(7, 'Saint Kitts and Nevis', 965, 5859, 28, '2018-11-28'),
(8, 'Chad', 868, 4593, 16, '2019-01-20'),
(10, 'China', 811, 9346, 28, '2019-06-01'),
(11, 'United States Minor Outlying Islands', 949, 1063, 87, '2018-11-23'),
(12, 'Serbia', 757, 7211, 52, '2019-05-16'),
(13, 'Jersey', 907, 2013, 50, '2019-09-27'),
(53, 'Pakistan', 576, 4002, 43, '2019-04-29'),
(54, 'Lebanon', 501, 8096, 80, '2018-11-15'),
(55, 'Botswana', 605, 9579, 61, '2019-01-15'),
(56, 'Burundi', 942, 6114, 90, '2019-04-12'),
(57, 'Greece', 920, 8745, 57, '2019-10-30'),
(58, 'Ukraine', 663, 9477, 38, '2018-12-26'),
(59, 'Nepal', 526, 1186, 84, '2019-10-18'),
(60, 'Åland Islands', 760, 6919, 75, '2019-01-09'),
(61, 'Niue', 973, 5620, 39, '2019-10-20'),
(62, 'Bosnia and Herzegovina', 944, 9146, 85, '2018-12-21'),
(63, 'Lithuania', 697536, 2000000, 54425, '2019-11-09'),
(64, 'Lithuania', 1323, 852, 45256, '2019-11-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citytable`
--
ALTER TABLE `citytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countrytable`
--
ALTER TABLE `countrytable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citytable`
--
ALTER TABLE `citytable`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `countrytable`
--
ALTER TABLE `countrytable`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
