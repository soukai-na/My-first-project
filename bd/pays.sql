-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2019 at 03:51 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autorecrute`
--

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `texte`) VALUES
(1, '<p><font  color=#555555 size=5px face=arial><div style=\'margin:16;\'>Offres dâ€™emploi Automobile</div></font></p>\r\n<div id=offre>\r\n<div id=cp>\r\n<div id=carte>\r\n<img src=images/carte.png style=\'margin-right:17; \'/>\r\n<div id=pays>\r\n<div id=pays1 style=\'margin-right:17px;\'>\r\nAlsace</br>\r\nAquitaine</br>\r\nAuvergne</br>\r\nBourgogne</br>\r\nBretagne</br>\r\nCentre-Val de Loire</br>\r\nChampagne-Ardenne</br>\r\nCorse</br>\r\nFranche-ComtÃ©</br>\r\nIle-de-France</br>\r\nLanguedoc-Roussillon </br>       \r\n\r\n</div>\r\n\r\n\r\n<div id=pays2>\r\nLimousin</br>\r\nLorraine</br>\r\nMidi-PyrÃ©nÃ©es</br>\r\nNord-Pas-de-Calais</br>\r\nBasse-Normandie</br>\r\nHaute-Normandie</br>\r\nPays de la Loire</br>\r\nPicardie</br>\r\nPoitou-Charentes</br>\r\nProvence-Alpes-CÃ´te dâ€™Azur</br>\r\nRhÃ´ne-Alpes</br> \r\n</div>\r\n</div>\r\n</div>\r\n</br>\r\n\r\n<div id=top style=\'margin-left:20;\'><div style=\'font-weight:100; color:red; text-align:left;\' >Top Villes</div><hr>\r\n\r\nParis  Marseille  Lyon  Toulouse  Nice </br>\r\nNantes  Montpellier  Bordeaux  Lille \r\n\r\n </div>\r\n</div>\r\n</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
