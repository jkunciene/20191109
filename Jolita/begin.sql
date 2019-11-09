-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 m. Bir 13 d. 14:24
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `begin`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `atsakymai`
--

CREATE TABLE `atsakymai` (
  `id` int(6) NOT NULL,
  `atsakymas` varchar(120) DEFAULT NULL,
  `klausimoNumeris` int(250) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `atsakymai`
--

INSERT INTO `atsakymai` (`id`, `atsakymas`, `klausimoNumeris`, `data`) VALUES
(1, 'Testuoju Atsakymo update ID1, klNr 2', 2, '2019-06-10'),
(3, 'Atsakydama į Jūsų paklausimą...', 1, '2019-06-04'),
(4, 'Elektroninio deklaravimo sistema. Per išorines sistemas', 1, '2019-06-04'),
(5, 'Apie dokumentų ir formų teikimą per EDS.', 4, '2019-06-04'),
(6, 'skaičiuoklė padės nustatyti mokesčius, kuriuos jums reikės ', 4, '2019-06-04'),
(7, 'mano skaičiuoklė padės nustatyti mokesčius, kuriuos jums reikės ', 7, '2019-06-04'),
(8, 'mano skaičiuoklė padės nustatyti mokesčius, kuriuos jums reikės ', 5, '2019-06-04'),
(9, 'testuoju naujo atsakymo įvedimą', 2, '2019-06-10'),
(10, 'Priklausomai nuo metinių pajamų bendros sumos', 6, '2019-06-11'),
(11, ' Gyventojo 2019 metais ir vėlesniais mokestiniais laikotarpiais gautoms su darbo santykiais ar jų esmę atitinkančiais sa', 22, '2019-06-12'),
(12, 'Per Elektroninio deklaravimo sistemą galima teikti saugiu elektroniniu parašu pasirašytus dokumentus pagal Lietuvos Resp', 3, '2019-06-12');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `begin`
--

CREATE TABLE `begin` (
  `id` int(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `question` varchar(120) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `begin`
--

INSERT INTO `begin` (`id`, `name`, `email`, `question`, `data`) VALUES
(1, 'Tim', 'name@gmail.com', 'Kokiu būdu dirbant mažiausia mokestinė našta?', '2019-06-04'),
(2, 'Tim', 'name@gmail.com', 'Kokiu būdu dirbant mažiausia mokestinė našta?', '2019-06-04'),
(3, 'Jonas', 'jonas@gmail.com', 'Kokiu būdu dirbant mažiausia mokestinė našta?', '2019-06-04'),
(4, 'Ana', 'ana@gmail.com', 'Kokiu būdu dirbant mažiausia mokestinė našta?', '2019-06-04'),
(5, 'Jonas', 'jonas@gmail.com', 'Kokiu būdu dirbant mažiausia mokestinė našta?', '2019-06-04'),
(6, 'Tim', 'name@gmail.com', 'Kokiu būdu dirbant mažiausia mokestinė našta?', '2019-06-04');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `foto`
--

CREATE TABLE `foto` (
  `id` int(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `foto`
--

INSERT INTO `foto` (`id`, `name`, `description`) VALUES
(1, 'fonas.jpg', 'zalsvas fonas'),
(2, 'demes.jpg', 'su laseliais fonas'),
(5, 'knyga.jpg', 'knyga'),
(6, 'kontakt.jpg', 'tinka kontaktu puslapiui'),
(7, 'sign.jpg', 'nurodysiu jums krypti'),
(12, 'kompas.jpg', 'ofiso tema'),
(16, 'laptopas.jpg', 'ofiso tema'),
(17, 'lenta.jpg', 'ofiso tema'),
(18, 'plansete.jpg', 'ofiso tema'),
(20, 'vanduo.jpg', 'fonas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `questions`
--

CREATE TABLE `questions` (
  `id` int(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `question` varchar(120) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `questions`
--

INSERT INTO `questions` (`id`, `name`, `email`, `question`, `data`) VALUES
(1, 'Ana', 'ana@gmail.com', 'Kokiu būdu dirbant mažiausia mokestinė našta?', '2019-06-04'),
(2, 'Kuncienė', 'j.kunciene@gmail.com', 'kaip įkurti MB?', '0000-00-00'),
(3, 'Lina', 'j.kunciene@gmail.com', 'kaip įkurti uab?', '0000-00-00'),
(4, 'Guste', 'j.kunciene@gmail.com', 'Kiek procentu uz nedarbinguma?', '0000-00-00'),
(5, 'Ema', 'emaa@gmail.com', 'Kiek ilgai galima sirgti?', '0000-00-00'),
(6, 'Tadas', 'tadas@gmail.com', 'Kokie mokesciai su IDV?', '0000-00-00'),
(7, 'Titas', 'tadas@gmail.com', 'bandymas updeitinti klausima', '2019-06-04'),
(8, 'Bandymas', 'j.kunciene@gmail.com', 'kaip įkurti MB?', '2019-06-04'),
(9, 'Taut', 'j.kue@gmail.com', 'Kokie teigiami aspektai dirbant su IDV?', '2019-06-05'),
(10, 'agne', 'ne@gmail.com', 'klausimas', '2019-06-05'),
(11, 'Irmantaas', 'kuncux@gmail.com', 'Kada deklaruoti pajamas', '2019-06-05'),
(12, 'Agnė', 'agnė@gmail.com', 'Kiek kainuoja buhalterinė apskaita?', '2019-06-10'),
(15, 'Vakarė', 'vakare@gmail.com', 'Tikslinu klausimą, tikrinu', '2019-06-08'),
(16, 'Vakarė', 'vakare@gmail.com', 'Test question update .Tikslinu klausimą, tikrinu', '2019-06-10'),
(18, 'Lina', 'j.kunciene@gmail.com', 'Kos dabar prekiu lengvatinis PVM?', '2019-06-10'),
(19, 'Zita', 'j.kunciene@gmail.com', 'Taisomas, updeitinamas klausimas', '2019-06-10'),
(20, 'Rūta', 'rutele@gmail.com', 'test paskutintas updetinimo, paeis?', '2019-06-10'),
(21, 'Zitulė', 'naujas@gmail.com', 'testas 2019-06-10 sukurti klausimą', '2019-06-10'),
(22, 'Trečiadienis', 'pasiilgsiu@gmail.com', 'Ar GPM 15proc? ar 20?', '2019-06-12'),
(23, 'Last Bandymai', 'treining@gmail.com', 'Nuo kokios ribos turėsiu mokėti 27proc GPM\'o?', '2019-06-12'),
(26, 'EmailTest', 'testas@gmail.com', 'Ar pas jus veikia email siuntimas?', '2019-06-13'),
(27, 'Rita', 'wie_immer@gmail.com', 'Ar šiandien atsiskaitymas?', '2019-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atsakymai`
--
ALTER TABLE `atsakymai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `begin`
--
ALTER TABLE `begin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atsakymai`
--
ALTER TABLE `atsakymai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `begin`
--
ALTER TABLE `begin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
