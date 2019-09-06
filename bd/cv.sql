-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2019 at 03:49 PM
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
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `file` blob NOT NULL,
  `titre` varchar(225) NOT NULL,
  `niveauexp` varchar(225) NOT NULL,
  `fonction` varchar(225) NOT NULL,
  `niveauetd` varchar(225) NOT NULL,
  `contrat` varchar(225) NOT NULL,
  `consultable` varchar(10) NOT NULL,
  `expprof` text NOT NULL,
  `edcform` text NOT NULL,
  `langues` text NOT NULL,
  `comppers` text NOT NULL,
  `infocomp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `nom`, `prenom`, `file`, `titre`, `niveauexp`, `fonction`, `niveauetd`, `contrat`, `consultable`, `expprof`, `edcform`, `langues`, `comppers`, `infocomp`) VALUES
(22, 'bendaoud', 'soukaina', 0x6578616d706c65732e6465736b746f70, 'cv1', '5 ans dâ€™expÃ©rience et plus', 'Ambassadeur show room', 'BAC+3', 'Contrat de Professionnalisation', 'OUI', 's', 's', 's', 's', 's'),
(25, 'Bendaoud', 'Soukaina', 0x73716c2e706466, 'cv2', '5 ans dâ€™expÃ©rience et plus', 'Chef dâ€™Ã©quipe Homologation', 'BAC', 'Contrat dâ€™Apprentissage', 'NON', 'hjjjjjjjjlkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹Ã¹', 'gyyyyyyyyyyyuuuuuuuuuuuuuuuuuuuuuuuuuuuuhj', 'vggggggggggggggggggggghjbbbbbbbbbbbbbbbbbbbbbbbbbn', 'ooooooooooooooooojjjjjjjjjjjjjjjjjjj'),
(26, 'bd', 'sq', 0x73716c2e706466, 'cv', '5 ans dâ€™expÃ©rience et plus', 'ChargÃ© de recrutement', 'BAC', 'Mission/IntÃ©rim', 'NON', 'gggggggggggggggggggggggggggg', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'ttttttttttttttttttttttttttttttttt', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'zzzzzzzzzzzzzzzzzzzz'),
(28, 'bd', 'sq', 0x73716c2e706466, 'autre cv', '2 Ã  4 ans dâ€™expÃ©rience', 'Adjoint chef de centre', 'BEP', 'Mission/IntÃ©rim', 'NON', 'ffffffffffffffffffffffffffffffffff', 'fffffferrrrrrrrrrrreeeeeeeeeeeeeeeeeeeee', 'azzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'gggggggggggggggggggggggggggggggggggggg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
