-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2019 at 03:50 PM
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
-- Table structure for table `formulaire2`
--

CREATE TABLE `formulaire2` (
  `id` int(11) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `type` varchar(225) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `postal` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telephone1` varchar(20) NOT NULL,
  `fax1` varchar(20) NOT NULL,
  `site` varchar(255) NOT NULL,
  `adrfacturation` text NOT NULL,
  `postalfacturation` varchar(255) NOT NULL,
  `villefacturation` varchar(255) NOT NULL,
  `file` blob NOT NULL,
  `civilite` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone2` varchar(20) NOT NULL,
  `teleportable` varchar(20) NOT NULL,
  `fax2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulaire2`
--

INSERT INTO `formulaire2` (`id`, `societe`, `type`, `pays`, `adresse`, `postal`, `ville`, `telephone1`, `fax1`, `site`, `adrfacturation`, `postalfacturation`, `villefacturation`, `file`, `civilite`, `nom`, `prenom`, `fonction`, `email`, `password`, `telephone2`, `teleportable`, `fax2`) VALUES
(49, 'argused', 'Entreprise', 'France', 'anassi', '124578', 'casablanca', '0645454545', '', 'wwwww', '', '', '', 0x73716c2e706466, 'Monsieur,Madame', 'ss', 'bd', 'employeur', 'cs@gmail.com', '1245782356891245', '0645454545', '', ''),
(50, '2000', 'Entreprise', 'France', 'anassi', '124578', 'casa', '0645454545', '', 'alpha.ma', '', '', '', 0x73716c2e706466, 'Monsieur,Madame', 'bendaoud', 'soukaina', 'sss', 'es@gmail.com', '0650879758soukaina', '645454545', '', ''),
(51, 'argused', 'Entreprise', 'France', 'anassi', '124578', 'casablanca', '0645454545', '', 'wwwww', '', '', '', 0x73716c2e706466, 'Monsieur,Madame', 'ss', 'bd', 'employeur', 'cs@gmail.com', 'bc8e716925b8f052021366470a10a386', '0645454545', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulaire2`
--
ALTER TABLE `formulaire2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulaire2`
--
ALTER TABLE `formulaire2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
