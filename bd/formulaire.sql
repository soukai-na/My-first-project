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
-- Table structure for table `formulaire`
--

CREATE TABLE `formulaire` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `mois` int(11) NOT NULL,
  `jour` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `telephone1` varchar(255) NOT NULL,
  `telephone2` varchar(255) NOT NULL,
  `mobilite` varchar(255) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `metieractuel` varchar(255) NOT NULL,
  `metierrecherche` varchar(255) NOT NULL,
  `disponiblite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulaire`
--

INSERT INTO `formulaire` (`id`, `email`, `password`, `nom`, `prenom`, `annee`, `mois`, `jour`, `pays`, `adresse`, `ville`, `postal`, `telephone1`, `telephone2`, `mobilite`, `activite`, `metieractuel`, `metierrecherche`, `disponiblite`) VALUES
(21, 'cs@gmail.com', 'bc8e716925b8f052021366470a10a386', 'bd', 'sq', 2017, 7, 1, 'Angola', 'anassi', 'casablanca', '124578', '645454545', '0645454545', 'Nationale', 'EmployÃ© ou ouvrier', 'Assistant Homologation', 'Assistant Homologation', 'En recherche dâ€™activitÃ©'),
(24, 'bendaouds62@gmail.com', '8be6ab241b6fdc8c6f9c02048afa4c5b', 'Bendaoud', 'Soukaina', 1989, 7, 7, 'Angola', 'anassi', 'casablanca', '124578', '645454545', '0645454545', 'Nationale', 'EmployÃ© ou ouvrier', 'Chef dâ€™unitÃ© mÃ©canique', 'Chef dâ€™equipe logistique', 'En recherche dâ€™activitÃ©');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
